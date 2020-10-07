<?php 
session_start(); 
include("Model.php");

?>
<?php 
if(isset($_POST['BTNLogin']) && isset($_GET['loginCommander']) && $_GET['loginCommander']==1)
 {
 
if( Client::login($_POST['EmailLogin'],$_POST['MotdePasseLogin']) ==1)
 {

    $_SEESION["user"] = $_POST['EmailLogin'] ; 
header("location:Commander.php?user=".$_SEESION["user"]); 
}
}
?>
<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MOBI-Boutique - Inscription</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">-->
    <script src='vendor/font-awesome/css/a076d05399.js'></script>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="logo/MOBISML.PNG" type="image/x-icon">
  
    <!-- Tweaks for older IEs--><!--[if lt IE 9] TEST DHIA HANNACHI>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contactez-nous sur +216 51 110 112 ou support@mobi-sm.tn.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                 <!--<ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>-->
                <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fas fa-sign-in-alt"></i><span class="d-none d-md-inline-block">Se connecter</span></a><a href="login.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">S'inscrire</span></a></div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/mobiiism"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="mailto:support@mobi-sm.tn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Connectez-vous</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <?php
            if(isset($_POST['BTNLogin'])){
                if( Client::login($_POST['EmailLogin'],$_POST['MotdePasseLogin']) ==1)
                echo "<div role='alert' class='alert alert-success alert-dismissible'>
                <button type='button' data-dismiss='alert' class='close'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>Login avec success <3.
              </div>"; 
                else
                echo "<div role='alert' class='alert alert-danger alert-dismissible'>
                <button type='button' data-dismiss='alert' class='close'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>Veuillez vérifier votre login et votre mot de passe.
              </div>"; 
            } 
            ?>
              <form method="POST">
                <div class="form-group">
                  <input id="email_modal" type="text"  name="EmailLogin" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" name="MotdePasseLogin" placeholder="Mot de passe" class="form-control">
                </div>
                <p class="text-center">
                  <button name="BTNLogin" class="btn btn-template-outlined"><i class="fas fa-sign-in-alt"></i> S'identifier</button>
                </p>
              </form>
              <p class="text-center text-muted">Pas encore inscrit !</p>
              <p class="text-center text-muted"><a href="login.php"><strong> S'inscrire maintenant </strong></a> ! C'est facile et fait en 1 minute et vous donne accès à des réductions spéciales et bien plus encore !</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="boutique.php" class="navbar-brand home"><img src="logo/mobism.png" draggable="false" alt="MobiSM logo" class="d-none d-md-inline-block"><img src="logo/mobism.png" draggable="false" alt="MOBISM logo" class="d-inline-block d-md-none"><span class="sr-only">Mobi-Boutique - aller à la page d'accueile</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown "><a href="boutique.php" >Accueil </a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                            <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                            <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                            <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">À propos de nous</a></li>
                            
                            <li class="nav-item"><a href="services.html" class="nav-link">Prestations de service</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="packages.html" class="nav-link">Paquets</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5>Home</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="index-2.html" class="nav-link">Option 1: Default Page</a></li>
                            <li class="nav-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                            <li class="nav-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                            <li class="nav-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                            <li class="nav-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                          </ul>
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                            <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                          <h5>User pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="customer-register.html" class="nav-link">Register / login</a></li>
                            <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                            <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                            <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                            <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Shop</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                            <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                            <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                            <li class="nav-item"><a href="shop-detail.html" class="nav-link">Product detail</a></li>
                          </ul>
                          <h5>Shop - order process</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-basket.html" class="nav-link">Shopping cart</a></li>
                            <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - step 1</a></li>
                            <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - step 2</a></li>
                            <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - step 3</a></li>
                            <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - step 4</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Contact</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="contact2.html" class="nav-link">Contact - version 2</a></li>
                            <li class="nav-item"><a href="contact3.html" class="nav-link">Contact - version 3</a></li>
                          </ul>
                          <h5>Pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                            <li class="nav-item"><a href="text-left.html" class="nav-link">Text page - left sidebar</a></li>
                            <li class="nav-item"><a href="text-full.html" class="nav-link">Text page - full width</a></li>
                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                            <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          </ul>
                          <h5>Blog</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing big</a></li>
                            <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog listing medium</a></li>
                            <li class="nav-item"><a href="blog-small.html" class="nav-link">Blog listing small</a></li>
                            <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog Post</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="contact.php"  >Contact </a>
                  
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
    
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Nouveau compte / Connexion</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="boutique.php">Accueil</a></li>
                <li class="breadcrumb-item active">Nouveau compte / Connexion</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Nouveau compte</h2>
                <p class="lead">Pas encore notre client enregistré?</p>
                <p>Avec l'enregistrement avec nous, un nouveau monde de développement, des remises fantastiques et bien plus encore s'ouvre à vous! L'ensemble du processus ne vous prendra pas plus d'une minute!</p>
                <p class="text-muted">Si vous avez des questions, n'hésitez pas à <a href="contact.html">Nous contacter</a>, notre centre de service client travaille pour vous 24h / 24 et 7j / 7.</p>
                <hr>
                <form method="POST">
                  <div class="form-group">
                    <label for="name-login">Name</label>
                    <input id="name-login" type="text" name="BTNLogin" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email-login">Email</label>
                    <input id="email-login" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password-login">Password</label>
                    <input id="password-login" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> S'inscrire</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Connectez-vous</h2>
                <p class="lead">Déjà notre client?</p>
                <p class="text-muted"></p>
                <hr>
                <?php
            if(isset($_POST['BTNLogin'])){
                if( Client::login($_POST['EmailLogin'],$_POST['MotdePasseLogin']) ==1)
                echo "<div role='alert' class='alert alert-success alert-dismissible'>
                <button type='button' data-dismiss='alert' class='close'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>Login avec success <3.
              </div>"; 
                else
                echo "<div role='alert' class='alert alert-danger alert-dismissible'>
                <button type='button' data-dismiss='alert' class='close'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>Veuillez vérifier votre login et votre mot de passe.
              </div>"; 
            } 
            ?>
                <form method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" name="EmailLogin" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="MotdePasseLogin" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="BTNLogin" class="btn btn-template-outlined"><i class="fas fa-sign-in-alt"></i> S'identifier</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">À propos de nous</h4>
              <p>Nous sommes une équipe de développeurs avec un ensemble diversifié de compétences.<br>
              Aider nos clients à effectuer une transaction en douceur dans le monde des affaires en ligne.<br>
              créer des sites Web et des applications Web.
              </p>
             
             
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              
             
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Mont-plaisir 1073 Tunis.</strong><br>rue 8002, a l'espace de Tunis <br>bureau n*2-4 2e étage Mont-plaisir 1073 Tunis <br><strong>Tunis-Tunisie</strong></br></p><a href="contact.html" class="btn btn-template-main">Aller à la page contact</a>
              <hr class="d-block d-lg-none">
            </div>
            
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; <script> document.write(new Date().getFullYear()); </script>. <img src="logo/logoshort.png" width="50px"></p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Powered by <img src="logo/logoshort.png" width="50px"></p>
                
              </div>
            </div>
          </div>
        </div>
      </footer>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
  </body>

</html>