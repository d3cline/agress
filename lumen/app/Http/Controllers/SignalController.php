<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignalController extends Controller
{
    private $socketPath = '/home/d3cline/dev/signal-cli/signal.sock';

    public function sendMessage(Request $request)
    {
        $recipient = $request->input('recipient');
        $message = $request->input('message');

        if (!$recipient || !$message) {
            return response()->json(['error' => 'Recipient and message are required'], 400);
        }

        $data = [
            'jsonrpc' => '2.0',
            'method' => 'send',
            'params' => [
                'recipient' => [$recipient],
                'message' => $message,
            ],
            'id' => 1
        ];

        $response = $this->sendRequest($data);

        return response()->json($response);
    }

    private function sendRequest($data)
    {
        $socketPath = $this->socketPath;

        // Create a UNIX socket
        $sock = socket_create(AF_UNIX, SOCK_STREAM, 0);
        if (!$sock) {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);
            return ['error' => "Couldn't create socket: [$errorcode] $errormsg"];
        }

        // Connect to the socket
        if (!socket_connect($sock, $socketPath)) {
            $errorcode = socket_last_error($sock);
            $errormsg = socket_strerror($errorcode);
            socket_close($sock);
            return ['error' => "Could not connect: [$errorcode] $errormsg"];
        }

        // Encode the data and send it
        $jsonData = json_encode($data) . "\n";

        if (!socket_write($sock, $jsonData, strlen($jsonData))) {
            $errorcode = socket_last_error($sock);
            $errormsg = socket_strerror($errorcode);
            socket_close($sock);
            return ['error' => "Could not send data: [$errorcode] $errormsg"];
        }

        // Read the response
        $response = '';
        while ($out = socket_read($sock, 2048)) {
            $response .= $out;
            if (strpos($out, "\n") !== false) {
                break;
            }
        }

        socket_close($sock);

        // Decode and return the response
        return json_decode(trim($response), true);
    }
}
