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
  
      <div>
        <div class="details">Contact information</div>
      <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
      <input type="hidden" name="token" />
      <div class="input-group">
        <input style="margin-right:6px;" type="text" name="last_name" class="form-control StripeElement StripeElement--empty" placeholder="Last Name">
        <input style="margin-left:6px;"  type="text" name="first_name" class="form-control StripeElement StripeElement--empty" placeholder="First Name">
      </div>
      <div class="details">Shipping address</div>
      <select class="form-select mb-3 StripeElement StripeElement--empty" aria-label="">
        <option selected>Select country</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <input type="city" name="city" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="City">
      <div class="input-group mb-3">
        <input style="margin-right:6px;" type="text" name="apartment" class="form-control StripeElement StripeElement--empty" placeholder="Apartment or house number">
        <input style="margin-left:6px;"  type="text" name="postal" class="form-control StripeElement StripeElement--empty" placeholder="Postal code">
      </div>
      </div>
    <div class="details">Credit card details</div>
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
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>