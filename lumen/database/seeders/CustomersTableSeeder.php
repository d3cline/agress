<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 unique customers
        for ($i = 0; $i < 10; $i++) {
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_number' => $faker->phoneNumber,
            ]);
        }
    }
}
