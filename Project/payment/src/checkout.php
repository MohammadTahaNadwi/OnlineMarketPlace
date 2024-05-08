<?php
use \Stripe\Stripe;
use \Stripe\Checkout\Session;

require_once('../vendor/autoload.php');
//put youre secret key here
$secret_key = "sk_test_51NrcFzCayZtvd45RjZWy8N47MIiHlA1zDkSIISAmR4fXTQ4L8s5GOYzelpV5Kgm9RjlPocGozgVnzwuGXz2tbSwJ00X0VJ6BKV";
Stripe::setApiKey($secret_key);
header("Content-Type: application/json");
$checkout_session = Session::create([
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'Advert'
            ],
            'unit_amount' => $_POST['price']
        ],
        'quantity' => 1
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost/project/CustomerDashboard.php?allowAdvert=true',
    'cancel_url' => 'http://localhost/project/CustomerDashboard.php'
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>