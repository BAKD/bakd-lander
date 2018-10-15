<?php

/*
|--------------------------------------------------------------------------
| BAKD.io Landing Page Routes
|--------------------------------------------------------------------------
|
*/

// Main Landing Page
$router->get('/', ['uses' => 'PageController@index', 'as' => 'home']);

// Handle Newsletter Subscribers
$router->post('subscribe', ['uses' => 'NewsletterController@subscribe', 'as' => 'newsletter.subscribe']);
$router->get('newsletter/thanks', ['uses' => 'NewsletterController@thanks', 'as' => 'newsletter.thanks']);

// Handle Donations
$router->post('donate', ['uses' => 'DonationController@donate', 'as' => 'donation.donate']);

// Handle Contact Us Submissions
$router->post('contact', ['uses' => 'PageController@contact', 'as' => 'contact.send']);

// Generate a random string for use with the app's encryption
$router->get('/key', function () use ($router) {
    return str_random(32);
});

// Get the current Lumen version
$router->get('/lumen/version', function () use ($router) {
    return $router->app->version();
});