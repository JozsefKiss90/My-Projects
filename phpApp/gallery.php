<!doctype html>
<html lang="en"> 
  <head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
<?php
     require('functions.php')
     ?>
</head>
</head>
  <body  id="bg">

    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container-fluid px-4">
        <a style="font-size: 1.5rem;" class="navbar-brand mx-4" href="index.php">
          Action Painting
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Best Sellers</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Reviews</a>
            </li>
          </ul>
          
          <div class="collapse navbar-collapse justify-content-end mx-2 gap-3">
              <span class="flag-icon flag-icon-hu"></span>
              <span class="flag-icon flag-icon-gb"></span>
            <button type="button" style="border:none;" class="btn-rounded">
              <i class="fas fa-shopping-cart"></i>
          </button>
          </div>
        </div>
      </div>
    </nav>


      <div style="padding-top: 5rem;" class="container-fluid">
        <div class="row display-3 d-flex justify-content-center mt-2">
            <div class="col-10 d-flex justify-content-center ">
              <div class=" pt-3">
                All Paintings
              </div>
            </div>
          </div>
      </div>  


    <div class="container-fluid media-gallery">
      <?php foreach ($product_suffle as $item) { ?>
        <div  class="row d-flex justify-content-center align-items-center ">
          <div class="col-12 d-flex justify-content-center mt-5 row-gallery">
            <div  class="gallery-div">
              <img class="img-gallery mb-3" src=<?php echo $item['item_image'] ?> alt="">
              <p> <?php echo $item['item_name'] ?> <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a class="gallery-link" href=""> View details</a>  </p>
            </div>
          </div>
        </div> 
        <?php } ?>
      </div>

    <div class="container-fluid container-gallery">
      
      <div class="row d-flex justify-content-center align-items-center row-gallery">
        <div class="col-5 d-flex justify-content-center mt-5 mx-3 mx-lg-0">
          <div  class="gallery-div">
            <img class="img-gallery mb-3" src=<?php echo $product_suffle[0]['item_image'] ?> alt="">
            <p><?php echo $product_suffle[0]['item_name'] ?>  <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a href="<?php printf('%s?item_id=%s', 'order.php',  $product_suffle[0]['item_id']); ?>"> View details</a>  </p>
          </div>
        </div>
        <div class="col-5 d-flex justify-content-center  mt-5 mx-3 mx-lg-0 ">
          <div  class="gallery-div ">
            <img class="img-gallery mb-3" src=<?php echo $product_suffle[1]['item_image'] ?> alt="">
            <p><?php echo $product_suffle[1]['item_name'] ?>  <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a href="<?php printf('%s?item_id=%s', 'order.php',  $product_suffle[1]['item_id']); ?>"> View details</a>  </p>
          </div>
          </div>
      </div> 
      <div   class="row d-flex justify-content-center align-items-center row-gallery">
        <div class="col-5 d-flex justify-content-center mt-lg-5 mt-4 mx-3 mx-lg-0">
          <div  class="gallery-div">
            <img class="img-gallery mb-3" src=<?php echo $product_suffle[2]['item_image'] ?> alt="">
            <p><?php echo $product_suffle[2]['item_name'] ?>  <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a href="<?php printf('%s?item_id=%s', 'order.php',  $product_suffle[2]['item_id']); ?>"> View details</a>  </p>
          </div>
        </div>
        <div class="col-5 d-flex justify-content-center mt-lg-5 mt-4 mx-3 mx-lg-0">
          <div  class="gallery-div">
            <img class="img-gallery mb-3" src=<?php echo $product_suffle[3]['item_image'] ?> alt="">
            <p><?php echo $product_suffle[3]['item_name'] ?> <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a class="gallery-link" href=""> View details</a>  </p>
          </div>
          </div>
      </div> 
      <div   class="row d-flex justify-content-center align-items-center row-gallery">
        <div  class="col-5 d-flex justify-content-center mt-lg-5 mt-2 mx-3 mx-lg-0">
          <div  class="gallery-div">
            <img class="img-gallery mb-3" src=<?php echo $product_suffle[4]['item_image'] ?> alt="">
            <p><?php echo $product_suffle[4]['item_name'] ?>  <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a class="gallery-link" href=""> View details</a>  </p>
          </div>
        </div>
        <div class="col-5 d-flex justify-content-center mt-lg-5 mt-2 mx-3 mx-lg-0">
          <div  class="gallery-div">
            <img class="img-gallery mb-3" src="pics/poll8.jpg" alt="">
            <p>No.1  <span style="color: red">&#124; </span>From 100$<span style="color: red"> &#124;</span> In stock <br> <a class="gallery-link" href=""> View details</a> </p>
          </div>
          </div>
      </div> 
    </div>
    <div class="footer-bottom pt-5 pb-5">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12">
            <div class="footer-bottom__copyright">
              &COPY; Copyright 2021 <a href="#">Action Painting
            </div>
          </div>
        </div>
      </div>
    </div>
</body>