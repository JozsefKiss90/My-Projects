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
  <div  class="container container-media">
    <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
    <div  class="row mx-3">
    <div class="col-6">
    <form action="./charge.php" method="post" id="payment-form">
  
     
    <div class="details"><strong>Contact information</strong></div>
      <div style="background-color:#eaf3fd;" class="px-3 py-3" >
            <input type="email" name="email" class="form-control mb-3" placeholder="Email Address">
            <input type="hidden" name="token" />
            <div class="input-group">
                <input style="margin-right:6px;" type="text" name="last_name" class="form-control" placeholder="Last Name">
                <input style="margin-left:6px;"  type="text" name="first_name" class="form-control" placeholder="First Name">
            </div>
         </div>
    
         <div class="details"><strong>Shipping address</strong></div>
         <div style="background-color:#eaf3fd;" class="px-3 py-3" >
        <div class="input-group">
            <select class="form-select mb-3 px-2" aria-label="">
                <option selected>Select country</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <input type="city" name="city" class="form-control mb-3" placeholder="City">
            <div class="input-group mb-3">
                <input style="margin-right:6px;" type="text" name="county" class="form-control" placeholder="State/County">
                <input style="margin-left:6px;"  type="text" name="postal" class="form-control" placeholder="ZIP code">
            </div>
            <div class="input-group mb-1">
                <input style="margin-right:6px;" type="text" name="adress" class="form-control" placeholder="Street adress">
                <input style="margin-left:6px;"  type="text" name="apartment" class="form-control" placeholder="Apartment or house number">
            </div>
         </div>
    <div class="details"> <strong>Payment</strong></div>
    <div  class="container p-0">
            <div class="card px-3">
                <div style="border: 1px solid rgba(0, 0, 0, 0.125);background-color:white;" class="row">
                    <div class="d-flex align-items-center">
                        <p class="mt-3 mx-1"> Credit card</p>
                        <div class="ms-auto">
                            <img  style="height: 50px; width: 50px;" src="pics/master.svg" alt="">
                            <img  style="height: 50px; width: 50px;" src="pics/maestro.svg" alt="">
                            <img class="px-1"  style="height: 55px; width: 55px;" src="pics/Visa_2021.svg" alt="">
                            <img class="px-1"  style="height: 55px; width: 55px;" src="pics/amex.svg" alt="">
                        </div>
                    </div>   
                </div>
          
          
            <div style="background-color:#eaf3fd;" class="row">
                <div class="col-12">
                    <div class="d-flex flex-column mt-3">
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
                <div class="col-6 mb-3">
                    <div class="d-flex flex-column mt-3">
                        <p class="text mb-1">CVV/CVC</p>
                        <div id="card-cvc-element" class="cardinput"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="row max-btn">
                    <div class="col-6">
                    <button class="button mb-1" type="submit">Pay</button>
                    <div class="outcome">
                    <div class="error"></div>
                    <div class="success">
                        Success! Your Stripe token is <span class="token"></span>
                    </div>
                    </div>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <a class="mb-1" style="color:black" href="">Return to cart</a>
                    </div>
                </div>
    <div class="medium-media">
            <div class="details-1"> <strong>Summary</strong></div>
                <div style="background-color:#eaf3fd;" class="px-3">
                    <div class="row mb-4">
                        <div class="col-10 d-flex align-items-start  justify-content-start mt-3 text">
                        <div class="img-btn">
                            <img style="margin-right:10px" class ="col-image"  src="pics/poll8.jpg">
                            <button type="button" style="border:none;" class="btn-rounded">
                                <p>1</p>
                            </button>
                            </div>
                            <div class=" mx-0">
                            <p><strong>Pollock Image</strong><br>160*100cm</p>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end align-items-start mt-3 col-2">
                            <p>100$</p>
                        </div>		
                        
                    </div>
                    
                    <svg height="2" width="415">
                    <line x1="0" y1="0" x2="450" y2="0" style="stroke:black;stroke-width:2" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div style="line-height: 1.8; height:53px" class="row mt-1">
                        
                            <div class="col-8 d-flex align-items-center">
                                <p>Subtotal <br>Shipping</p>
                            </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 ">
                                <p>100$<br>  20$</p>
                            </div>	
                    </div>
                    
                    <svg height="2" width="415">
                    <line x1="0" y1="0" x2="500" y2="0" style="stroke:black;stroke-width:2" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div class="row">
                        
                            <div  class="col-8 d-flex align-items-center mt-1">
                                <p>Total</p>
                            </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 mt-2">
                                <p>120$</p>
                            </div>	
                    
                    </div>
               
            </div>
            <div class="row">
                    <div class="col-12  d-flex justify-content-center">
                    <button class="button mb-1" type="submit">Pay</button>
                    <div class="outcome">
                    <div class="error"></div>
                    <div class="success">
                        Success! Your Stripe token is <span class="token"></span>
                    </div>
                    </div>
                    </div>
                </div>
        </div>  
    </div>
    </form>

    

        <div class=" col-5  mt-4 payment">
            <div class="details-1"> <strong>Summary</strong></div>
                <div style="background-color:#eaf3fd;" class="px-2 mb-3">
                    <div  class="row">
                        <div class="col-10 d-flex align-items-start  justify-content-start text mt-3">
                            <div class="img-btn">
                            <img style="margin-right:10px" class ="col-image"  src="pics/poll8.jpg">
                            <button type="button" style="border:none;" class="btn-rounded">
                                <p>1</p>
                            </button>
                            </div>
                            <div class=" mx-0">
                            <p><strong>Pollock Image</strong><br>160*100cm</p>
                            </div>
                        </div>
                        
                        <div class="d-flex d-flex justify-content-end align-items-start col-2 mt-3">
                            <p>100$</p>
                        </div>		
                        
                    </div>
                    
                    <svg height="2" width="430">
                    <line x1="0" y1="0" x2="410" y2="0" style="stroke:black;stroke-width:2" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div style="line-height: 1.8; height:53px" class="row mt-1">
                        
                            <div class="col-8 d-flex align-items-center">
                                <p>Subtotal <br>Shipping</p>
                            </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 ">
                                <p>100$<br>  20$</p>
                            </div>	
                    </div>
                    
                    <svg height="2" width="410">
                    <line x1="0" y1="0" x2="500" y2="0" style="stroke:black;stroke-width:3" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div class="row">
                        
                            <div  class="col-8 d-flex align-items-center mt-1">
                                <p>Total</p>
                             </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 mt-2">
                                <p>120$</p>
                            </div>	
                    
                    </div>
            </div>
        </div>  
    </div>
    </div>

<div class="container container-media-1">
    
    <div class="row d-flex justify-content-center container-row">
        <div class="col-12 d-flex justify-content-center">
        <form action="./charge.php" method="post" id="payment-form">
    
        <div class="row d-flex justify-content-center"> 
                <div class="details">
                        <strong>Contact information</strong>
                </div> 
            <div class="col-12">
                    <div style="background-color:#eaf3fd;" class="px-3 py-3" >
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address">
                        <input type="hidden" name="token" />
                        <div class="input-group">
                            <input style="margin-right:6px;" type="text" name="last_name" class="form-control" placeholder="Last Name">
                            <input style="margin-left:6px;"  type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                    </div>
            </div>
        </div>
            <div class="details"><strong>Shipping address</strong></div>
            <div style="background-color:#eaf3fd;" class="px-3 py-3" >
            <div class="input-group">
                <select class="form-select mb-3 px-2" aria-label="">
                    <option selected>Select country</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
                <input type="city" name="city" class="form-control mb-3" placeholder="City">
                <div class="input-group mb-3">
                    <input style="margin-right:6px;" type="text" name="county" class="form-control" placeholder="State/County">
                    <input style="margin-left:6px;"  type="text" name="postal" class="form-control" placeholder="ZIP code">
                </div>
                <div class="input-group mb-1">
                    <input style="margin-right:6px;" type="text" name="adress" class="form-control" placeholder="Street adress">
                    <input style="margin-left:6px;"  type="text" name="apartment" class="form-control" placeholder="Apartment or house number">
                </div>
            </div>
        <div class="details"> <strong>Payment</strong></div>
        <div  class="container p-0">
                <div class="card px-3">
                    <div style="border: 1px solid rgba(0, 0, 0, 0.125);background-color:white;" class="row">
                        <div class="d-flex align-items-center">
                            <p class="mt-3 mx-1"> Credit card</p>
                            <div class="ms-auto">
                                <img  style="height: 35px; width: 35px;" src="pics/master.svg" alt="">
                                <img  style="height: 35px; width: 35px;" src="pics/maestro.svg" alt="">
                                <img class="px-1"  style="height: 40px; width: 40px;" src="pics/Visa_2021.svg" alt="">
                                <img class="px-1"  style="height: 40px; width: 40px;" src="pics/amex.svg" alt="">
                            </div>
                        </div>   
                    </div>
            
            
                <div style="background-color:#eaf3fd;" class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column mt-3">
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
                    <div class="col-6 mb-3">
                        <div class="d-flex flex-column mt-3">
                            <p class="text mb-1">CVV/CVC</p>
                            <div id="card-cvc-element" class="cardinput"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
  
    <div class="details"> <strong>Summarys</strong></div>
        <div style="background-color:#eaf3fd;" class="col-11 mx-1 mt-1 ">
                    <div class="row mt-1 py-2 ">
                        <div class="col-6 mt-3">
                            <img  class ="col-image"  src="pics/poll8.jpg">
                        </div>
                        <div class="col-6 mt-3 text-end">
                            <div class="text-1">
                                <strong>Pollock Image</strong>
                            </div>
                            <div class="text-1">
                                160*100cm
                            </div >
                            <div class="text-1">
                                1 item
                            </div>
                            <div class="text-1">
                                100$
                            </div>
                        </div>
                        
                    </div>
                    
                    <svg height="2" width="445">
                    <line x1="0" y1="0" x2="285" y2="0" style="stroke:black;stroke-width:2" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div style="line-height: 1.8; height:53px" class="row mt-1">
                        
                            <div class="col-8 d-flex align-items-center">
                                <p>Subtotal <br>Shipping</p>
                            </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 ">
                                <p>100$<br>  20$</p>
                            </div>	
                    </div>
                    
                    <svg height="2" width="445">
                    <line x1="0" y1="0" x2="285" y2="0" style="stroke:black;stroke-width:2" />
                    Sorry, your browser does not support inline SVG.
                    </svg>

                    <div class="row">
                        
                            <div  class="col-8 d-flex align-items-center mt-1">
                                <p>Total</p>
                            </div>
                            <div style="white-space: pre;" class="d-flex justify-content-end align-items-center col-4 mt-2">
                                <p>120$</p>
                            </div>	
                    
                    </div>
            </div>
            </div>
            <div class="row d-flex justify-content-center">
                    <div class="col-8">
                    <button class="button" type="submit">Pay</button>
                    <div class="outcome">
                    <div class="error"></div>
                    <div class="success">
                        Success! Your Stripe token is <span class="token"></span>
                    </div>
                    </div>
                    </div>
                </div>
                </form>
        </div>
        
    </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>