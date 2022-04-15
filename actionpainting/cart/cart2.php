<!DOCTYPE html>
<html>
<head> 
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/buttons.css">
    <?php
   require('../database/session.php'); 
   require('../functions.php');
   $user->addUser($sid);
   $user_arr = $user->getUser($sid);
   $userid = $user_arr[0]["user_id"];		
	echo $userid;
   ?>
</head>
<body>
	<main class="page">
		<section class="shopping-cart dark">
			<div class="container">
			   <div class="block-heading">
				 <h2>Shopping Cart</h2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
			   </div>

			   <div  class="content">
				   <div  class="row first-row ">
					<div class="container-fluid">
						<div class="col-12">
							<div class="row d-flex justify-content-center align-items-center">
							   <div class="text-center col-lg-3 col-md-4">
								 Products
							   </div>
						   
								   <div class="text-center col-lg-9 col-md-8">
									   <div class="row">
										   <div  class="col-lg-4 col-md-4">
											   
										   </div>
										   <div class="text-center col-lg-4 col-md-4 d-flex justify-content-center align-items-center">
											   Quantity
										   </div>
										   <div class="col-lg-4 col-md-4 col-price d-flex justify-content-end">
											   Price
										   </div>
									   </div>
								   </div>
							</div>
						</div>
					</div>
					
					   
				   </div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="items">
								<?php
								foreach ($usercart->getCart($sid) as $item) :
								
								$cart = $usercart->getProduct($item['item_id']);
								
								$subTotal[] = array_map(function ($item){ 
							?>
							<div class="container product">
								<div  class="row d-flex justify-content-center align-items-center py-2">
									<div class="col-md-2 col-lg-3">
									
										<img class ="col-image"  src="<?php echo $item['item_image']?>">
									</div>
									<div  class="col-md-10 col-lg-9">
										<div class="info">
											<div class="row">
												<div  class="col-lg-4 col-md-6 ">
													
														<div class="product-info">
															<a href="#">Lorem Ipsum dolor</a>
														</div>
														<div class="product-info-1">
															<div>Display: <span class="value">5 inch</span></div>
															<div>RAM: <span class="value">4GB</span></div>
															<div>Memory: <span class="value">32GB</span></div>
														</div>
														
												</div>
												<div  class="qty col-md-2 col-lg-4 quantity d-flex justify-content-center align-items-center">
												   <div class=" quantity btn-div">
                                                    <button class="qty-up btn-add1" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i></i>+</button>
                                                    <input style="border: 2px solid white; text-align: center;" type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" data-user="<?php echo $userid;?>" class="qty_input quantity" disabled value="1" placeholder="1">
                                                    <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down btn-add1"><i>-</i></button>                                               
                                                </div>
												</div>
												<div class="text-center col-md-4 d-flex justify-content-end align-items-center price">
                                                $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								 return $item['item_price'];

							 },$cart);
							endforeach;
						
						?>
						</div>
					</div>
			</div>
			<div style="background-color:white; border-top:1px solid black" class="container-fluid">
					<div  class="row py-2">
						<div class="col-md-12 col-lg-12 d-flex justify-content-end">
							<div class="summary">
								<div>Summary</div>
                                <div>Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span>$<span class="price" id="deal-price"><?php echo isset($subTotal) ? $usercart->getSum($subTotal) : 0; ?></span> </span> </div>
								<div class="summary-item"><span class="text">Shipping </span><span class="price"> is calculated in Checkout</span></div>
								<button type="button" class="btn btn-primary btn-lg btn-block"><a style="color:white; text-decoration: none;" href="../checkout/test4.php">Checkout</a></button>
							</div>
						</div>
					</div>
				</div>
	   </section>
	   <section>
		   <div class="cart-media">
			   <div class="container-fluid">
				<div class="block-heading">
					<h2>Shopping Cart</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
				  </div>
				<div class="container product">
					<div class="row d-flex justify-content-center align-items-center py-2">
						<div class="col-12 d-flex justify-content-center my-2">
							<img class ="col-image"  src="pics/poll8.jpg">
						</div>
						<div  class="col-12 mx-2">
							<div class="info">
								<div class="row">
									<div class="col-12 d-flex justify-content-center">
										<a style="text-align: justify;" href="#">Lorem Ipsum dolor</a>
									</div>
								</div>
								<div class="row d-flex justify-content-center">
									<div class="col-6 d-flex justify-content-start">
											<div class="product-info">
												<div class="mx-1" style="text-align:justify">Display: <span class="value mx-1"> 5 inch</span></div>
												<div class="mx-1">RAM: <span class="value mx-1">4GB</span></div>
												<div class="mx-1">Memory: <span class="value mx-1">32GB</span></div>
											</div>
						
									</div>
									
								</div>
								<div class="row d-flex justify-content-center mt-2">
									<div  class="col-4 quantity">
										<div class="quantity btn-div mt-1">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn-minus1">-</button>
											<input style="border: 2px solid white; text-align: center;" class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="1" type="number">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn-add1">+</button>
										</div>
									 </div>
								</div>
								<div class="row d-flex justify-content-center">
									<div class="text-center col-3 text-center price mt-2 mb-1">
										<span>$120</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div  class="row">
						<div style="border-top: 2px solid black;" class="col-12 d-flex justify-content-center">
							<div class="summary mt-2">
								<div>Summary</div>
								<div class="summary-item"><span class="text">Subtotal: </span><span class="price">$360</span></div>
								<div class="summary-item"><span class="text">Shipping </span><span class="price"> is calculated in Checkout</span></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
							<button type="button" class="btn btn-primary btn-lg btn-block mt-2 media-btn">Checkout</button>
					</div>
					</div>
				</div>
			   </div>
		   </div>
	   </section>
	</main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="total2.js"></script>
</body>
</html>
