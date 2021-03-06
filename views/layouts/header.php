<!DOCTYPE HTML>
<html>
  <head>
  <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

 <!-- Animate.css -->
  <link rel="stylesheet" href="../../template/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../../template/css/icomoon.css">
  <!-- Ion Icon Fonts-->
  <link rel="stylesheet" href="../../template/css/ionicons.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../../template/css/bootstrap.min.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../../template/css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="../../template/css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="../../template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../template/css/owl.theme.default.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="../../template/css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="../../template/fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="../../template/css/style.css">

  </head>
  <body>

  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-md-9">
              <div id="colorlib-logo"><a href="/">Footwear</a></div>
            </div>
            <div class="col-sm-5 col-md-3">
                  <form action="#" class="search-wrap">
                     <div class="form-group">
                        <input type="search" class="form-control search" placeholder="Search">
                        <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                     </div>
                  </form>
               </div>
             </div>
          <div class="row">
            <div class="col-sm-12 text-left menu-1">
              <ul>
                <li class="active"><a href="/">Главная</a></li>
                <li class="has-dropdown">
                  <a href="/men">Мужские</a></li>
                <li><a href="/woman">Женские</a></li>
                <li><a href="/about">О магазине</a></li>
                <li><a href="/contact">Контакты</a></li>
                <!-- <li class="cart"><a href="/register">Регистрация</a></li> -->
               <?php if (User::isGuest()){ ?>
                <li class="cart"><a href="/user/login">Вход</a></li>
              <?php }else{?>
                <li class="cart"><a href="/user/logout">Выход</a></li>
                <li class="cart"><a href="/cabinet">Аккаунт</a></li>
              <?php }?>
                <li class="cart"><a href="/cart" id="cart-count"><i class="icon-shopping-cart"></i>Корзина <?php echo Cart::countItems();?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="sale">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
              <div class="row">
                <div class="owl-carousel2">
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>