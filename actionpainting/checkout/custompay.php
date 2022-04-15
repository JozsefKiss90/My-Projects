<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  <title>Pay Page</title>
</head>
<body>
  <div class="container">
    <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
    <form action="./charge.php" method="post" id="payment-form">
      <<input type="hidden" name="token" />
    <div class="group">
      <label>
        <span>Card number</span>
        <div id="card-number-element" class="field"></div>
      </label>
      <label>
        <span>Expiry date</span>
        <div id="card-expiry-element" class="field"></div>
      </label>
      <label>
        <span>CVC</span>
        <div id="card-cvc-element" class="field"></div>
      </label>
      <label>
        <span>Postal code</span>
        <input id="postal-code" name="postal_code" class="field" placeholder="Regular field placeholder" />
      </label>
    </div>
    <button type="submit">Pay $25</button>
    <div class="outcome">
      <div class="error"></div>
      <div class="success">
        Success! Your Stripe token is <span class="token"></span>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>
  <script src="custom.js"></script>
</body>
</html>