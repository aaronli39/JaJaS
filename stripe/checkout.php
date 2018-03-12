<?php require_once('./config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>JaJaS - Your Gardening Essentials</title>

     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

     <!-- Custom fonts for this template -->
     <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

     <!-- Custom styles for this template -->
     <link href="css/agency.css" rel="stylesheet">

     <style>
     #facircle {
          color: red;
     }
     </style>
</head>

<body id="page-top">


    <form action="charge.php" method="post">
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-description="Access for a year"
              data-amount="5000"
              data-locale="auto"></script>
    </form>
</body>
</html>
