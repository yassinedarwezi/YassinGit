<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!isset($_SESSION)){
    session_start();
  }
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/CartC.php';
$cart1C=new cartC();
$username=$_SESSION["username"]; 
$list=$cart1C->showcarts($username); 
$list1=$cart1C->showcarts($username); 
$list2=$cart1C->showcarts($username); 
$list3=$cart1C->showcarts($username); 
$q='0';
$cq='0';
$t='0';
?>
<!DOCTYPE html>
<!--
    Name: GoodGames - Game Portal / Store and eSports HTML Template
    Version: 1.5.1
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://1.envato.market/goodgames
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2019.
-->
    
<html lang="en">

<!-- Mirrored from html.nkdev.info/goodgames/store-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Checkout</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="assets/css/goodgames.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links">
                <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
            </ul>
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                
                
                <?php include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/view/cartContent.php';?>
                
            </ul>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

<!-- START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                <div class="container">
                    <div class="nk-nav-table">

                        <a href="index.php" class="nk-nav-logo">
                            <img src="assets/images/logo.svg" alt="GoodGames" width="199">
                        </a>

                        <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">

                            <li>
                                <a href="index.php">
                Home
                
            </a>
                            </li>
                            <li  class="active" >
                                <a href="store.php">
                Store
                
            </a>
            <li class=" nk-drop-item">
            <a href="">
                Events
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="events.php">
                All 
                
            </a>
        </li>
        <li class="">
            <a href="expo.php">
                Expo
                
            </a>
        </li>
        <li>
            <a href="convention.php">
                Convention
                
            </a>
        </li>
        <li>
            <a href="tournament.php">
                Tournament
                
            </a>
        </li>
        <li>
            <a href="festival.php">
                Festival
                
            </a>
        </li>
        
        
                    </ul>
        
        </li>
                            <li>
                                <a href="contact.php">
                Contact
                
            </a>

                            </li>
                            <li>
                                <a href="about.php">
                About Us
            
            </a>
                            </li>
                        </ul>
                        <ul class="nk-nav nk-nav-right nk-nav-icons">

                            <li class="single-icon d-lg-none">
                                <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                    <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END: Navbar -->
    

   

</header>

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.php" class="nk-nav-logo">
                <img src="assets/images/logo.svg" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
       
        
        <li><a href="store.php">Store</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="store-checkout.php">Cart</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        <li><span>Checkout</span></li>
        <li><span>Checkout</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">

    <div class="nk-store nk-store-checkout">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Billing</span> Details</span></h3>

        <!-- START: Billing Details -->
        <div class="nk-gap"></div>
        <form id="myform" name="myform" method="POST" action="view/order_submit.php?act=place&id=<?php echo $row['username'] ?>" class="nk-form">
        
            <div class="row vertical-gap">
                <div class="col-lg-6">
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="fname">First Name <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="fname" id="fname" value=" <?php echo $_SESSION['fname'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="lname">Last Name <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="lname" id="lname" value=" <?php echo $_SESSION['lname'] ?>">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <label for="company">Company Name:</label>
                    <input type="text" class="form-control" name="company" id="company" value=" <?php echo $_SESSION['companyname'] ?>">

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="email">Email Address <span class="text-main-1">*</span>:</label>
                            <input type="email" class="form-control required" name="email" id="email" value=" <?php echo $_SESSION['email'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="phone">Phone <span class="text-main-1">*</span>:</label>
                            <input type="tel" class="form-control required" name="phone" id="phone" value=" <?php echo $_SESSION['phone'] ?>">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <label for="country-sel">Country <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="country-sel" value="<?php echo $_SESSION['country'] ?>">
                        <option value="">Select a country...</option>
                        <option value=""><?php echo $_SESSION['country'] ?></option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="address">Address <span class="text-main-1">*</span>:</label>
                    <input type="text" class="form-control required" name="address" id="address" value="<?php echo $_SESSION['address'] ?>">

                    <div class="nk-gap-1"></div>
                    <label for="city">Town / City <span class="text-main-1">*</span>:</label>
                    <input type="text" class="form-control required" name="town" id="town" value=" <?php echo $_SESSION['town'] ?>">

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="state">State / Country <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="state" id="state" value=" <?php echo $_SESSION['state'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="zip">Postcode / ZIP <span class="text-main-1">*</span>:</label>
                            <input type="tel" class="form-control required" name="postcode" id="postcode" value=" <?php echo $_SESSION['postcode'] ?>">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        Ship to different address?
                    </label>
                </div>
            </div>
            <div class="nk-gap-2"></div>
        
            <div class="nk-gap-1"></div>
            <label for="notes">Order Notes:</label>
            <textarea class="form-control" name="notes" id="notes" placeholder="Order Notes" rows="6"></textarea>
        </form>
        <!-- END: Billing Details -->




        <!-- START: Order Products -->
        <div class="nk-gap-3"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Your</span> Order</span></h3>
        <div class="nk-gap"></div>
        <div class="table-responsive">
            <table class="nk-table nk-table-sm">
                <thead class="thead-default">
                    <tr>
                        <th class="nk-product-cart-title">Product</th>
                        <th class="nk-product-cart-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                <?PHP
 

 foreach($list1 as $row)
       
 {
     foreach($list as $row){
        $t=($row['game_price']*$row['game_quantity'])+$t;
echo'                        <tr>
<td class="nk-product-cart-title">
'.$row['game_name'].' &times'.$row['game_quantity'].'
</td>

<td class="nk-product-cart-total">
    € '.$row['game_price']*$row['game_quantity'].'
</td>
</tr>';     
} }?>
                    
                    <tr class="nk-store-cart-totals-subtotal">
                        <td>
                            Subtotal
                        </td>
                        <td>
                            € <?php echo $t; ?>
                        </td>
                    </tr>
                    <tr class="nk-store-cart-totals-shipping">
                        <td>
                            Shipping
                        </td>
                        <td>
                            Free Shipping
                        </td>
                    </tr>
                    <tr class="nk-store-cart-totals-total">
                        <td>
                            Total
                        </td>
                        <td>
                            € <?php echo $t; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Order Products -->

        <div class="nk-gap-2"></div>
        <button type="Submit" form="myform" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Place Order</button>
    </div>
</div>
<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="https://html.nkdev.info/goodgames/php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2018 <a href="https://1.envato.market/nk-profile" target="_blank">nK</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                    <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                    <!-- Additional Social Buttons
                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/bg-top-4.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->


    
</body>

<!-- Mirrored from html.nkdev.info/goodgames/store-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:29 GMT -->
</html>
