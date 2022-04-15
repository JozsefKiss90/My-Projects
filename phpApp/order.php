<!DOCTYPE html>
<html lang="en" dir="ltr">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<?php
     require('functions.php');
     require('database/session.php');
     $user->addUser($sid);
     $user_arr = $user->getUser($sid);
     if($_SERVER['REQUEST_METHOD'] == "POST"){
       if (isset($_POST['top_sale_submit'])){
           $cart->addToCart($_POST['user_id'], $_POST['item_id']);
       }
   }
     ?>
<?php 

if (count($usercart->getCart($sid))>0)
{

  echo "<link rel='stylesheet' type='text/css' href='css/cart-num.css'>";


}
else
{

  echo "<link rel='stylesheet' type='text/css' href='css/cart-num1.css'>";

}
?>
</head> 
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container-fluid px-4">
        <a style="font-size: 1.5rem;" class="navbar-brand mx-sm-4" href="index.php">
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
            <a href="cart/cart2.php">
                <i class="fas fa-shopping-cart">
                  <?php
                    $num = count($usercart->getCart($sid));
                    if ($num!=0) {
                      echo "<i class='cart-num'><p>$num</p></i>";
                    }
                    else {
                        echo "";
                    } 
                  ?> 
                </i>
              </a> 
            </button>
          </div>

        </div>
      </div>
    </nav>

  <div class=" container-fluid intro-section order-main">
    <div class="gallery bg-filter">
    <?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        
        if ($item['item_id'] == $item_id) :
            ?>
      <div class="gallery-item" >
          <div class="slider">
            <img  src="<?php echo $item['item_image']?>" alt="" >
            <img  src="pics/poll5.jpg" alt="">
          </div>
            <div class="controls">
              <ul> 
                <img class="images selected px-1" src="<?php echo $item['item_image']?>" alt="" >
                <img  class="images px-1" src="pics/poll5.jpg" alt="">
              </ul>
          </div>
          
        </div>
        
    
      <div class="gallery-item-2">
        <div class="gallery-header">
          <h2>Painting Picture</h2>
          <h3>Original Acrylic Painting on Canvas</h3>
          <h3>50x40 cm | 19x15 inch</h3>
          <h5>In stock</h5>
          <h3> <i class="fas fa-euro-sign fa-sm"></i> 99</h3>
          
        </div>

        <div class="info-bar1">
          <div class="info-container1">
            <div class="info-item1">
              Shipping details
            </div>
            <div class="info-click1" style="display: inline-block; margin-left: auto;">
             
              <svg viewBox="-20 -10 110 100" id="more-arrows">
                <polygon  points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
                <polygon  points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
              </svg>
            
              
            </div>
          </div>
          <div class="info-text1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam cumque sequi earum modi eius quos quisquam, aliquam eveniet, fugit est? Voluptatibus, libero eveniet molestiae corporis sint, consequuntur quo culpa aut in eaque non exercitationem cum at nihil perspiciatis repudiandae natus eligendi magnam maxime facere eos aspernatur dicta? Minima, consequuntur.</p>
          </div>
        </div>

  

        <div class="d-flex gx-3">
        <form method="post">
            <input type="hidden" name="item_id" value="<?php echo $item['item_id'];?>">
            <input type="hidden" name="user_id" value="<?php echo $user_arr[0]["user_id"]; ?>">
            <?php
              $cart_arr = $product->getData($table='cart');
              $keys = array_keys(array_column($cart_arr, 'user_id'), $user_arr[0]["user_id"]);
              $key = array_search($user_arr[0]["user_id"], array_column($cart_arr, array_keys($user_arr[0])[0]));
              $arr = [];
              for ($row = 0; $row < count($keys); $row++) {
                array_push($arr, $cart_arr[$keys[$row]] );
              }
              $item_string=implode(', ', array_column($arr, 'item_id'));
              $integerIDs = array_map('intval', explode(',',  $item_string));
              if (in_array($item['item_id'], $integerIDs)) {
                echo '<button type="submit" disabled class="gallery-button">IN THE CART</button>';
              }
              else {
                echo '<button type="submit" name="top_sale_submit" class="gallery-button">ADD TO CART</button>';
              }
            ?>
        </form>
        <a href="cart/cart2.php">
            <button type="submit" class="gallery-button">GO TO CART</button>
            </a>
        </div>
      </div>
      <?php
        endif;
        endforeach;
          ?>
    </div>
  </div> 
  
  <div class=" container-fluid order-media">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid intro-section">
            <div class="bg-filter ">
              <div class="row my-4">
                <div class="col-12">
                  <div class=" d-flex align-items-center justify-content-center  ">
                    <img  class="img-info--media mt-4 mb-1" src="pics/poll4.jpg" alt="">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container-fluid intro-section">
            <div class="bg-filter ">
              <div class="row">
                <div class="col-12">
                  <div class=" d-flex align-items-center justify-content-center  ">
                    <img  class="img-info--media mt-4 mb-1" src="pics/poll5.1.jpg" alt="">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div  style="border-top: 3px solid darkgrey;" class="row d-flex align-items-start justify-content-center order-row py-2">
      <div class="col-10 text-center mb-3">
          <h4 class="mt-2">Painting Picture</h4>
          <p>Original Acrylic Painting on Canvas</p>
          <p>50x40 cm | 19x15 inch | In stock</p>
          <h5> <i class="fas fa-euro-sign fa-sm"></i> 99 </h5>
            <button class="gallery-button-1">ADD TO CART</button>
      </div>
     
      <div class="row d-flex justify-content-center">
        <div  class="info-bar">
          <div class="info-container">
            <div class="info-item">
              Shipping details
            </div>
            <div class="info-click">
             
              <svg viewBox="-20 -10 110 100" id="more-arrows">
                <polygon  points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
                <polygon  points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
              </svg>
      
            </div>
          </div>
          <div class="info-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam cumque sequi earum modi eius quos quisquam, aliquam eveniet, fugit est? Voluptatibus, libero eveniet molestiae corporis sint, consequuntur quo culpa aut in eaque non exercitationem cum at nihil perspiciatis repudiandae natus eligendi magnam maxime facere eos aspernatur dicta? Minima, consequuntur.</p>
          </div>
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
    <script type="text/javascript">
    
  clicked = document.getElementById("more-arrows");

  clicked.addEventListener("click", opened)

  function opened() {
  addclass = document.getElementsByTagName("polygon")[0];
  addclass1 = document.getElementsByTagName("polygon")[1]
  if (addclass.classList.contains('arrow-behind') && addclass1.classList.contains('arrow-front')) {
    addclass.classList.remove('arrow-behind');
    addclass1.classList.remove('arrow-front');
  }
  else {
    addclass.setAttribute("class", "arrow-behind");
    addclass1.setAttribute("class", "arrow-front");
  }
}

    const carousel = document.querySelector('.carousel');
    const slider = document.querySelector('.slider');

    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const indicatorParent = document.querySelector('.controls ul');
    const indicators = document.querySelectorAll('.controls img');

    let direction;
    let sectionIndex = 0;

    function reset() {
      for(var i = 0; i < slider.children.length; i++) {
        slider.children[i].style.opacity = 0;
        slider.children[i].style.zIndex = 0;
      }
    }

    indicators.forEach((indicator, i) => {
      indicator.addEventListener('click', () => {
        reset();
        sectionIndex = i;
        document.querySelector('.controls .selected').classList.remove('selected');
        indicator.classList.add('selected');
        slider.children[sectionIndex].style.zIndex = 2;
        slider.children[sectionIndex].style.opacity = 1;

      });
    });


    const clickevent1 = document.querySelector(".info-click1");
    const activebar1 = document.querySelector(".info-bar1");

    let arr = Array.from(activebar1);

    clickevent1.addEventListener("click", openMenu1);
    arr.forEach(n => n.addEventListener("click", closeMenu1));

    function openMenu1() {
      activebar1.classList.toggle("active1");
    }

    function closeMenu1() {
        activebar1.classList.remove("active1");
    }

    const clickevent = document.querySelector(".info-click");
    const activebar = document.querySelector(".info-bar");

    clickevent.addEventListener("click", openMenu);
    activebar.forEach(n => n.addEventListener("click", closeMenu));

    function openMenu() {
      activebar.classList.toggle("active");
    }

    function closeMenu() {
        activebar.classList.remove("active");
    }


    </script>
  </body>
</html>
