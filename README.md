<h1 align="center">NGO: It Helps ></h1>
<div align="center">
<br>
</div>

This product has these features.

 Admin can update all site seetings from backend login.
 - List of donations
 - Lish of Contacts
 - Site Settings Options
 - Email Send to Visitors: when contact message received by admin 
 - Email Send to donors : when donors make payment
 - Paymnet Gateway: Paypal Integration  



## Credits

- Search Engin: Google.com,  
- Admin theme : https://voyager.devdojo.com/
- Payment Gateway: https://paypal.com 
- Framework: Laravel 8.x, A wonderful MVC on PHP, Laravel.com 

<br>Design Updated and Developed By 
<br>Rishikant Srivastava
<br>rishikantsri.tech

## Live Site
https://ngo.rishikantsri.online/


## FAQ


1)How to Install

- Clone the repository with git clone

- Copy .env.example file to .env and edit database credentials there
   
    - Change Local host
       -  APP_URL=your_site_url
   
    - Enter Main Database details
       -  DB_CONNECTION=mysql
       -  DB_HOST=127.0.0.1
       -  DB_PORT=3306
       -  DB_DATABASE=
       -  DB_USERNAME=
       -  DB_PASSWORD=
       
	
    - Enter Main STMP details
       -  MAIL_MAILER=smtp
       -  MAIL_HOST=
       -  MAIL_PORT=
       -  MAIL_USERNAME=
       -  MAIL_PASSWORD=
       -  MAIL_ENCRYPTION=
       -  MAIL_FROM_ADDRESS=

    - Enter Paypal Details

       -   PAYPAL_SANDBOX_API_USERNAME=
       -   PAYPAL_SANDBOX_API_PASSWORD=
       -   PAYPAL_SANDBOX_API_SECRET= 

       -   PAYPAL_LIVE_API_USERNAME=
       -   PAYPAL_LIVE_API_PASSWORD=
       -   PAYPAL_LIVE_API_SECRET= 

       -   *change sandbox(for testing) to live(for live) as per requirement
        -  config->paypal.php
         - 'mode'    => env('PAYPAL_MODE', 'sandbox'),  // 'sandbox' to 'live'
         - check and update all other paypal information



    - Change iframe for google map
        -  resources->view->frontend->layouts->contact.blade.php 

- Run these command in shell 
    - composer install 
    - php artisan key:generate
    - Now visit to Your site
    - You can login to admin
    - yourdomain/admin URL and login with credentials 
    - username :	admin@example.com
	- password :	password 



2) Why are All features not working?
Yes, I am keep updating with the best effort. You can pull request i will update that soon.



