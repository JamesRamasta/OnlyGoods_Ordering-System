<!DOCTYPE html>
<html>
  <head>
    <title>Only Goods</title>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- ICONS  -->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel='stylesheet' href='hti tps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "style-2.css">
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['user_name'])) {
    ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="images/logo.png" style="width:80px;height:42px;margin-left:20%;" class="logo_enable"></a>
        <ul class="navbar-nav ml-auto">
          <li class="d-lg-none">
              <a href="index.php" class="text d-lg-none">Home</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>
          <li class="d-lg-none">
              <a href="about.php" class="text d-lg-none">About</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="about.php">About</a></li>
          <li class="d-lg-none">
              <a href="products.php" class="text d-lg-none">Products</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="products.php">Products</a></li>
          <li class="d-lg-none">
              <a href="faq.php" class="text d-lg-none">FAQ</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="faq.php">FAQ</a></li>
          <li class="d-lg-none">
              <a href="cart.php" class="text d-lg-none">Cart</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          <li class="d-lg-none">
            <a href="signin.php" class="text d-lg-none">Login</a>
          </li>
          <li class="nav-item d-none d-lg-block"><a href="signin.php"><span class="iconify" data-icon="bx:bx-user-circle" style="color: white; margin-top: 5px;" data-width="50" data-height="40"></span></a></li>
        </ul>
      </div>
    </nav>
  <?php
  } elseif (isset($_SESSION['user_name'])) {
  ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="images/logo.png" style="width:80px;height:42px;margin-left:20%;" class="logo_enable"></a>
        <ul class="navbar-nav ml-auto">
          <li class="d-lg-none">
              <a href="index.php" class="text d-lg-none">Home</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>
          <li class="d-lg-none">
              <a href="about.php" class="text d-lg-none">About</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="about.php">About</a></li>
          <li class="d-lg-none">
              <a href="products.php" class="text d-lg-none">Products</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="products.php">Products</a></li>
          <li class="d-lg-none">
              <a href="faq.php" class="text d-lg-none">FAQ</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="faq.php">FAQ</a></li>
          <li class="d-lg-none">
            <a href="cart.php?customer_ID=<?= $_SESSION['customer_ID']; ?>'" class="text d-lg-none">Cart</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class = "nav-link"><i class="fas fa-shopping-cart" onclick="location.href='cart.php?customer_ID=<?= $_SESSION['customer_ID']; ?>'"></i><span id="cart-item" class="badge badge-danger"></span></a></li>
          <li class="d-lg-none">
            <a href="accountSettings.php" class="text d-lg-none"> Account Settings</a>
            <hr class="d-lg-none" />
          </li>
          <li class="d-lg-none">
            <a href="signout.php" class="text d-lg-none">Logout</a>
          </li>
          <div class="dropdown logo_enable">
            <li class="nav-item" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="admin_signout.php"><span class="iconify" data-icon="bx:bx-user-circle" style="color: white; margin-top: 5px;" data-width="50" data-height="40"></span></a></li>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><a href="myOrder.php">My Orders</a></button>
              <button class="dropdown-item" type="button"><a href="accountSettings.php">Account Settings</a></button>
              <hr />
              <button class="dropdown-item" type="button"><a href="signout.php">Logout</a></button>
            </div>
          </div>
        </ul>
      </div>
    </nav>
  <?php
  }
  ?>
  <!-- Image Slider -->
  <div id="slides" class="image_slider carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
      <li data-target="#slides" data-slide-to="3"></li>
      <li data-target="#slides" data-slide-to="4"></li>
      <li data-target="#slides" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url(images/header/1.jpg);"></div>
      <div class="carousel-item" style="background-image: url(images/header/2.jpg);"></div>
      <div class="carousel-item" style="background-image: url(images/header/3.jpg);"></div>
      <div class="carousel-item" style="background-image: url(images/header/4.jpg);"></div>
      <div class="carousel-item" style="background-image: url(images/header/5.jpg);"></div>
      <div class="carousel-item" style="background-image: url(images/header/6.jpg);"></div>
    </div>
  </div>
  <!-- Floating Image Caption -->
  <div class="floating_caption caption text-center">
    <h1 style="font-family: Abril Fatface, cursive;">Only Goods.</h1>
    <a class="btn btn-outline-light btn-lg" href="products.php" style='font-family:Darker Grotesque, sans-serif;'>Shop</button></a>
  </div>


  <!-- Under Image Text -->
  <div class="under_text padding caption text-center" >
    <p style="color:#56382d; font-family: Abril Fatface, cursive;">Gallery</p>
  </div>
  <div class="image-gallery">
    <div class="image-box">
      <img src="images/DarkChocolateBrownies/1.jpg" alt="DarkChocolateBrownies" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Dark Chocolate Brownies</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/SmoresBars/1.jpg" alt="SmoresBars" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Smores Bars</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChocoGanacheCake/3.jpg" alt="ChocoGanacheCake" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Choco Ganache Cake</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChewyChocolateCrinkles/2.jpg" alt="ChewyChocolateCrinkles" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Chewy Chocolate Crinkles</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChewyCaramelBars/3.jpg" alt="ChewyCaramelBars" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Chewy Caramel Bars</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/BentoBlueberryCheesecake/2.jpg" alt="BentoBlueberryCheesecake" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Bento Blueberry Cheesecake</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/FudgyCheesecakeBrownies/1.jpg" alt="FudgyCheesecakeBrownies" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Fudgy Cheesecake Brownies</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/SmoresBars/3.jpg" alt="SmoresBars" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Smores Bars</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChocoGanacheCake/2.jpg" alt="ChocoGanacheCake" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Choco Ganache Cake</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/DarkChocolateBrownies/2.jpg" alt="DarkChocolateBrownies" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Dark Chocolate Brownies</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChewyChocolateCrinkles/3.jpg" alt="ChewyChocolateCrinkles" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Chewy Chocolate Crinkles</a>
          </span>
        </div>
      </div>
    </div>
    <div class="image-box">
      <img src="images/ChewyCaramelBars/2.jpg" alt="ChewyCaramelBars" />
      <div class="overlay">
        <div class="details">
          <span class="category">
            <a href="#">Chewy Caramel Bars</a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bar -->
  <footer class="container-fluid text-center" id="socials_section">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <h3 style="font-family: Abril Fatface, cursive;">Socials</h3>
        <a href="https://www.facebook.com/onlygoods.mnl/" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/onlygoods.mnl/" target="_blank" class="fa fa-instagram"></a>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </footer>
  <!-------- ADD TO CART FUNCTION SCRIPT -------->


  <script type="text/javascript">
    $(document).ready(function() {

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
</body>

</html>