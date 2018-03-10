// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
Stripe.apiKey = "pk_test_SmD0TWrsgK81mAHarwi7nClz";

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
String token = request.getParameter("stripeToken");

// Charge the user's card:
Map<String, Object> params = new HashMap<String, Object>();
params.put("amount", 999);
params.put("currency", "usd");
params.put("description", "Uber for Shit");
Map<String, String> initialMetadata = new HashMap<String, String>();
initialMetadata.put("order_id", 6735);
params.put("metadata", initialMetadata);
params.put("source", token);

Charge charge = Charge.create(params);
