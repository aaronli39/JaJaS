<?php
require_once('stripe-php/init.php');

$stripe = array(
  "secret_key"      => "sk_live_wrjEMEoOsUIVAUsi54oFWiKu",
  "publishable_key" => "pk_live_nIA6QW6hqxkYvpZWViXdBzip"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
