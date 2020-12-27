<?php session_start(); ?> <!--先開啟session-->
<?php
//首先在這裡寫好相關的呼叫程式碼
function checksignin(){ //確認是否有登入
  if(empty($_SESSION["username"])){ //如果沒有登入則顯示這行html 若顯示會員名稱
      echo '<li class="nav-item"><a href="login.html">Sign In</a></li>';
  }else{  //有登入會員的位置
    //要區分使用者是顧客還是店家
    if($_SESSION["identity"]==1){
      echo'<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">'.$_SESSION["username"].'你好</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="create_product.php">我的賣場</a></li>
                  <li class="nav-item"><a class="nav-link" href="membership.php">會員中心</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                </ul>
              </li>';
    }else{
      echo'<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">'.$_SESSION["username"].'你好</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="membership.php">會員中心</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                </ul>
              </li>';
    }
    // echo $_SESSION["username"]."你好";
  }
}
//然後再下面呼叫相關函式就可以了
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coffee Mood</title>
	<link rel="icon" href="img/Logo4.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/Logo3.png" alt="" width="200px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">About</a>
                <!-- <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul> -->
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Product</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">coffee bean 咖啡豆</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">coffee bean 咖啡</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">customized coffee 客製咖啡</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">More Partners</a>
                <!-- <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul> -->
              </li>
            </ul>
            <ul class="nav-shop">
              <?php checksignin(); ?>
              <!-- <li class="nav-item"><a href="login.html">Sign In</a></li> -->
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <!-- 購物車數字需要從資料庫裡面撈取 -->
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <!-- <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li> -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>