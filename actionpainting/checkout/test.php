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
      <input type="email" name="email" class="form-control mb-3" placeholder="Email Address">
      <input type="hidden" name="token" />
      <div class="input-group">
        <input style="margin-right:6px;" type="text" name="last_name" class="form-control" placeholder="Last Name">
        <input style="margin-left:6px;"  type="text" name="first_name" class="form-control" placeholder="First Name">
      </div>
      <div class="details">Shipping address</div>
      <select class="form-select mb-3" aria-label="">
        <option selected>Select country</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <input type="city" name="city" class="form-control mb-3" placeholder="City">
      <div class="input-group mb-3">
        <input style="margin-right:6px;" type="text" name="county" class="form-control" placeholder="State/County">
        <input style="margin-left:6px;"  type="text" name="postal" class="form-control" placeholder="ZIP code">
      </div>
      <div class="input-group mb-3">
        <input style="margin-right:6px;" type="text" name="adress" class="form-control" placeholder="Street adress">
        <input style="margin-left:6px;"  type="text" name="apartment" class="form-control" placeholder="Apartment or house number">
      </div>
      </div>
    <div class="details">Payment</div>
    <div  class="container p-0">

    <div style="border: 1px solid rgba(0, 0, 0, 0.25);" >
        <div class="card px-4">
        
          
           <div  class="row ">
              
            <div>
              <div class="d-flex align-items-center">
                <p class="mt-3"> Credit card</p>
                <div class="ms-auto">
                <img  style="height: 50px; width: 50px;" src="pics/master.svg" alt="">
                <img  style="height: 50px; width: 50px;" src="pics/maestro.svg" alt="">
                <img class="px-1"  style="height: 55px; width: 55px;" src="pics/Visa_2021.svg" alt="">
                <img class="px-1"  style="height: 55px; width: 55px;" src="pics/amex.svg" alt="">
                </div>
              </div>
            </div>
          
                <div class="col-12">
                    <div class="d-flex flex-column mt-1">
                        <p class="text mb-1">Name on card</p> 
                        <input type="name" name="email" class="form-control mb-3" placeholder="John Doe">

                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Card Number</p> 
                        <div id="card-number-element" class="cardinput"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column mt-3">
                        <p class="text mb-1">Expiry</p> 
                        <div id="card-expiry-element" class="cardinput"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column mt-3">
                        <p class="text mb-1">CVV/CVC</p>
                        <div id="card-cvc-element" class="cardinput"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="button mb-3" type="submit">Pay $25</button>
    <div class="outcome">
      <div class="error"></div>
      <div class="success">
        Success! Your Stripe token is <span class="token"></span>
      </div>
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