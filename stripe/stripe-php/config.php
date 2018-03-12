<?php
require_once('stripe-php/init.php');

$stripe = array(
  "secret_key"      => "sk_test_uLP4f45j378rRet5OlT2H37L",
  "publishable_key" => "pk_test_SmD0TWrsgK81mAHarwi7nClz"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
