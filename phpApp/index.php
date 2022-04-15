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
    <?php
    require('database/session.php');
    require('functions.php'); 
    ?>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
<!-- <?php

    if (count($usercart->getCart($sid))>0)
    {
      echo "<link rel='stylesheet' type='text/css' href='css/cart-num.css'>";
    }
    else
    {
      echo "<link rel='stylesheet' type='text/css' href='css/cart-num1.css'>";
    }
?>>       -->

</head>
  <body> 

    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container-fluid px-4">
        <a style="font-size: 1.5rem;" class="navbar-brand mx-sm-4" href="#">
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
            <a href="cart/cart.php">
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
    
  
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container-fluid intro-section">
                  <div class="bg-filter ">
                    <div class="row my-sm-4 my-0 intro-padding">
                  
                      <div  class="col-12 col-sm-6 mb-sm-3 media-div">
                      <div  class="col-media ">
                        <h1  class="col-10 display-2 mx-lg-5  ">
                          <span class="display-2--intro py-sm-3 py-1">Welcome to <br> Action Painting</span>
                          <span class="display-2--intro-media mb-2 ">Welcome to  <br> Action Painting</span>
                          <div class=" d-flex align-items-center justify-content-center  ">
                            <img  class="img-info--media mt-4 mb-1" src="pics/poll4.jpg" alt="">
                            </div>
                        <span class="display-2--description lh-base mt-sm-0 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur dolore vel at sunt totam similique! Corporis nulla distinctio repellendus!</span>

                        </h1>
                      </div>
                    
                      <div class="media-btn ">
                      <a href="gallery.php"> 
                        <button type="button" class="rounded-pill btn-rounded-2 mb-4 mx-lg-5 mx-2">
                          Go to shop
                          <span>
                            <i class="fas fa-arrow-right"></i>
                          </span>
                        </button>
                        </a>
                      </div>
                        
                      </div>
                      <div class="col-sm-6 d-flex justify-content-center pb-sm-4">
                        <img class="img-info" src="pics/poll4.jpg" alt="">
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container-fluid intro-section-II">
                  <div class="bg-filter ">
                    <div class="row my-sm-4 my-0 intro-padding">
                  
                      <div  class="col-12 col-sm-6 mb-sm-3 media-div">
                      <div  class="col-media ">
                        <h1  class="col-10 display-2 mx-lg-5  ">
                          <span class="display-2--intro py-sm-3 py-1">Welcome to <br> Action Painting</span>
                          <span class="display-2--intro-media mb-2 ">Welcome to  <br> Action Painting</span>
                          <div class=" d-flex align-items-center justify-content-center  ">
                            <img  class="img-info--media mt-4 mb-1" src="pics/poll8.2.jpg" alt="">
                            </div>
                        <span class="display-2--description lh-base mt-sm-0 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur dolore vel at sunt totam similique! Corporis nulla distinctio repellendus!</span>

                        </h1>
                      </div>
                    
                      <div class="media-btn ">
                      <a href="gallery.php"> 
                        <button type="button" class="rounded-pill btn-rounded-2 mb-4 mx-lg-5 mx-2">
                          Go to shop
                          <span>
                            <i class="fas fa-arrow-right"></i>
                          </span>
                        </button>
                        </a>
                      </div>
                        
                      </div>
                      <div class="col-sm-6 d-flex justify-content-center pb-sm-4">
                        <img class="img-info" src="pics/poll8.jpg" alt="">
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container-fluid intro-section-III">
                  <div class="bg-filter ">
                    <div class="row my-sm-4 my-0 intro-padding">
                  
                      <div  class="col-12 col-sm-6 mb-sm-3 media-div">
                      <div  class="col-media ">
                        <h1  class="col-10 display-2 mx-lg-5 mx-0 ">
                        <span class="display-2--intro py-sm-3 py-1">Welcome to <br> Action Painting</span>
                          <span class="display-2--intro-media mb-2 ">Welcome to  <br> Action Painting</span>
                          <div class=" d-flex align-items-center justify-content-center  ">
                            <img  class="img-info--media mt-4 mb-1" src="pics/poll5.1.jpg" alt="">
                            </div>
                        <span class="display-2--description lh-base mt-sm-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequuntur dolore vel at sunt totam similique! Corporis nulla distinctio repellendus!</span>

                        </h1>
                      </div>
                    
                      <div class="media-btn ">
                      <a href="gallery.php"> 
                        <button type="button" class="rounded-pill btn-rounded-2 mb-4 mx-lg-5 mx-2">
                          Go to shop
                          <span>
                            <i class="fas fa-arrow-right"></i>
                          </span>
                        </button>
                        </a>
                      </div>
                        
                      </div>
                      <div class="col-sm-6 d-flex justify-content-center pb-sm-4">
                        <img class="img-info" src="pics/poll5.jpg" alt="">
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>


      <div class="container-fluid container-scroll">
        <div  class="row row-scroll-2 gx-5 px-4;">
          <div class="col col-scroll">
            
            <path d="M275,200 v-150"
      fill="yellow" stroke="blue" stroke-width="3" />
      
            <p  class="p-scroll mx-sm-5">
              <span > <svg height="35" width="5">
                <line x1="0" y1="0" x2="0" y2="35" style="stroke:rgb(255,0,0);stroke-width:6"/>
              </svg></span> In stock items
            </p>
          </div>
        </div>
        <div class="row row-scroll d-flex flex-nowrap align-items-center row-scroll gx-5; ">
          <?php foreach ($product_suffle as $item) { ?>
          <div  class="col col-scroll">
            <img class="img-scroll" src=<?php echo $item['item_image'] ?> alt="">
            <p style="margin-top:20px">No. 1 <span style="color: red">&#124;</span> From 100$ <span style="color: red">&#124;</span>
             <a href="<?php printf('%s?item_id=%s', 'order.php',  $item['item_id']); ?>">View</a>
            </p>
          </div>
          <?php } ?>
        </div>
        <div class="row align-items-center row-scroll-3 gx-5 pb-4 px-lg-5">
          <div class="col col-scroll">
            <a href="gallery.php">
              <p  stlye="font-size: 1rem; font-family: 'Poppins', sans-serif;
            color: white;">
              Go to gallery <i class='fas fa-angle-right' style='display:inline-block;
              vertical-align: -5px; font-size:28px; color:red;'></i>
            </p> 
            </a>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row display-3  d-flex justify-content-center row-about">
          <div class="col-10 d-flex justify-content-center mt-sm-0 mt-1">
            <div style="border-top: 3px solid red;" class=" mt-1 mt-sm-0 pt-sm-3 pt-0">
              About Action Painting
            </div>
          </div>
        </div> 
        <div class="row justify-content-center align-items-center row-about-2">
          <div  class="col-sm-10 col-lg-5 col-12 d-flex justify-content-center mt-sm-0 mt-1 border-right mb-sm-4 about-text">
            <p class="p-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, molestias! Dolorem tenetur repellendus soluta ipsum veniam error asperiores voluptate amet quas hic maiores dolorum ea blanditiis excepturi nam voluptatum impedit praesentium, fugit perferendis velit nisi iure atque. Architecto minus adipisci reiciendis necessitatibus ad, dolores, commodi, cupiditate repellendus ducimus obcaecati dolorum!</p>
          </div>
          <div class="col-md-5 col-12 d-flex align-items-start media-about-1">
            <img src="pics/pollock.jpg" alt="" class="poll-pic">
          </div>
        </div> 
        <div   class="row justify-content-center align-items-center media-about pt-2">
          <div class="col-md-8 col-10 mb-1 mt-0 d-flex  justify-content-center">
            <img  src="pics/pollock.jpg" alt="" class="poll-pic-1">
          </div>
        </div>
      </div>
      
      <div class="container-fluid">
        <div  class="row d-flex justify-content-center row-footer">
          <div style= "text-align: center;" class="col-3 pt-md-3 pt-lg-2 pt-3 footer-col">
            <div class="d-flex justify-content-center footer-svg">
              <svg height="20" width="130">
                <line x1="0" y1="0" x2="130" y2="0" style="stroke:rgb(255,0,0);stroke-width:3" />
              </svg>
            </div>
            <h5 class="text-capitalize fw-bold footer-text pb-2">Quick links</h5>
            <ul class="list-inline campany-list p-footer">
              <li><a href="#"> Home</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Faq</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-3 pt-md-3 pt-lg-2 pt-3 footer-col">
            <div class="d-flex justify-content-center footer-svg-1">
              <svg height="20" width="190">
                <line x1="0" y1="0" x2="190" y2="0" style="stroke:rgb(255,0,0);stroke-width:3" />
              </svg>
            </div>
            <h5 style="text-align: center" class="text-capitalize fw-bold footer-text pb-sm-2">Join the newsletter</h5>
            <p style="text-align: justify;"  class="p-footer mx-lg-5 mx-md-3">Sign up to our Art Club and get first notice on all new drops and unique giveaways.</p>
            <div class="d-flex justify-content-center pb-sm-4 pb-1">
              <input type="email" placeholder="Enter your email address" id="inputEmail" class="shadow form-control footer-form form-1">
              <input type="email" placeholder="Email address" id="inputEmail" class="shadow form-control footer-form form-2">
            </div>
            <div class="d-flex justify-content-center mt-sm-0 mt-2">
              <button class="btn-2"><i>Subscribe</i></button>
            </div>
          </div>
          <div  class="col-3 pt-md-3 pt-lg-2 pt-3 footer-col">
            <div class="d-flex justify-content-center footer-svg">
              <svg height="20" width="130">
                <line x1="0" y1="0" x2="130" y2="0" style="stroke:rgb(255,0,0);stroke-width:3" />
              </svg>
            </div>
            <h5 style="text-align: center;" class="text-capitalize fw-bold footer-text pb-sm-2 h5-media ">Follow us</h5>
            <p class="p-footer-1"> Check us out on social media:</p>
            <div class=" d-flex justify-content-center">
              <a href="#"><i class="fab fa-facebook icon px-sm-2 px-1"></i></a>
              <a href="#"><i class="fab fa-twitter icon px-sm-2 px-1"></i></a>
              <a href="#"><i class="fab fa-instagram icon px-sm-2 px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom pt-5 pb-5">
        <div class="container">
          <div class="row text-center text-white">
            <div class="col-12">
              <div class="footer-bottom__copyright">
                &COPY; Copyright 2021 <a href="#">Action Painting</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
      
      <!-- BACK TO TOP BUTTON  -->
     <!-- <a href="#" class="shadow btn-primary rounded-circle back-to-top"> -->
       <!--  <i class="fas fa-chevron-up"></i>-->
     <!--  </a> -->
      

  
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    
    <script>
      const slider = document.querySelector('.row-scroll');
      let isDown = false;
      let startX;
      let scrollLeft;

      slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
      });
      slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
      });
      slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
      });
      slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1.5; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
      });
  </script>

  </body>
</html>