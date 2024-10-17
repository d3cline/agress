## Warning

This codebase is in early development. 

## Why?

Standard e-commerce is stale, gatekeeping, and impersonal. This project puts the power back in the DEAL. Maybe you want to negotiate directly or offer unique and rotating accepted currencies. Maybe today I want to offer you six tomatoes for your eight potatoes, and tomorrow it’s rutabagas. Maybe I want to accept Monero. Maybe I want to see what you’ll offer me each time. Most of all, I want a personal interaction with every single customer. Ghost kitchen the internet. Why should everything have to track back to a monolithic bank or the US dollar? Here, you’re in control, embracing flexibility and creativity in every transaction.

## How?

Put simply, the transaction at checkout moves over to secure chat. Your customer will build a cart with the standard e-commerce experience up until checkout. From there, the checkout process shifts to chat in a mobile environment, where negotiations continue all the way through to shipping. This approach allows for direct, secure, and flexible interactions between you and your customers.

## Project Scope

This project is an open-source e-commerce API application built with Lumen (PHP/MySQL), specifically designed for artisanal and small-batch products. It is lightweight, efficient, and mobile-admin focused. The primary features include:

1. **Minimalist Design and Fast Performance**:
   - **Small E-commerce by Design**: Intentionally designed as a one-page application to keep things simple and fast.
   - **No Extensive Plugins**: Avoids bulky plugins to maintain speed and efficiency.
   - **Daisy UI for Customization**: Utilizes Daisy UI to provide all the customization needed, ensuring a clean and modern aesthetic.
   - **Raw HTML with Clean API Interface**: Built with pure HTML5 and JavaScript for a responsive user experience.
   - **PHP Lumen with Minimal Dependencies**: Uses the Lumen framework with minimal package dependencies, emphasizing speed and simplicity.
   - **A Purposeful Deviation**: Not meant to reinvent the wheel—this is a new wheel focused on efficiency and simplicity.

2. **Media Library/Server**:
   - Upload and serve image and video files (`.webp`, `.jpg`, `.png`, `.mp4`) via a dedicated media library.
   - Access is restricted to admins only for content uploads.
   - Mimetype enforcement ensures only specified file types are accepted.

3. **Automated Email Campaigns**:
   - Email campaigns are auto-generated based on new stock arrivals.
   - Weekly email blasts are sent to subscribed users to keep them updated.

4. **Signal-cli Integration for Checkout**:
   - Orders are processed through Signal instead of traditional payment processors.
   - The checkout experience completes via Signal for a manual confirmation, emphasizing security and user control.

5. **Signal Admin**:
   - Admin interactions are 100% via Signal.
   - No traditional admin dashboard; manage everything through Signal messages.

6. **PHP/MySQL Backend**:
   - Lumen framework (PHP) with MySQL database for robust, scalable backend support.

7. **Static Frontend with Daisy UI and Pure HTML5/JavaScript**:
   - Frontend is statically generated using Daisy UI for a modern, minimalist aesthetic.
   - Built with pure HTML5 and JavaScript, providing a fast and responsive user experience.

8. **SEO-Centric Design**:
   - All product listings, media, and content are optimized for natural SEO, prioritizing organic visibility.
   - Structured data, meta tags, and clean URLs are embedded to maximize search engine discoverability.
