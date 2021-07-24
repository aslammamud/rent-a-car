<?php
require 'connection.inc.php';
require 'functions.inc.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en-US" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en-US"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <!-- Favicon and Apple Icons -->

    <?php include'all-style.php'; ?>
    <?php include'all-scripts.php'; ?>
  
    <title><?php
	if(isset($title)){
		echo $title;
	}else{
		echo 'HASIB TRAVELS &#8211; Make Trips Better';
	}
	?>
	</title>
	
    </head>
<body class="home page-template page-template-one-page page-template-one-page-php page page-id-4 sidebar-active"  id="top" data-spy="scroll" data-target=".navbar" data-offset="260">
    
    <!-- Header start -->
    <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="nav-scroll large">
        <div class="row container box">
            <div class="col-md-4">
                <!-- Logo start -->
                <div class="brand">
                    <h1><a class="scroll-to" href="index.php"><img class="img-responsive"  src="images/site-logo.png" alt="Hasib Travels."></a></h1>
                </div>
                <!-- Logo end -->
            </div>
            <div class="col-md-8">
                <div class="pull-right">
                    <div class="header-info pull-right">
                        <div class="contact pull-left" style="color: white">Contact: +880 1711-980876</div>
						<div class=" pull-right">
                            <div class="email pull-left ml-2" style="color: white; margin-left:10px;"><a style="color: white;" href="login"><u>admin</u></a></div>
                        </div>
                        <div class=" pull-right">
                            <div class="email pull-left" style="color: white"> Email: mdhasiburrahmanusa@gmail.com</div>
                        </div>
						
                        <!-- Language Switch end -->
                    </div>
                </div>
                <span class="clearfix"></span>
                <!-- start navigation -->
                <nav class="navbar navbar-default" role="navigation" id="main-navbar">
                    <div class="container-fluid">
                        <!-- Toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand scroll-to" href="index.php"><img class="img-responsive"  src="https://www.demo.pixelitlimited.com/car-rental/wp-content/uploads/2021/03/logox-1.png" alt="Hasib Travels."></a>
                            
                        </div>
                        <!-- Collect the nav links, for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- Nav-Links start -->
                            <ul id="menu-main-menu" class="nav navbar-nav navbar-right">
                            <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-on"><a class="scroll-to" title="Home" href="index.php#home" >Home</a></li>

                            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Services" href="index.php#services" >Services</a></li>
                            <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Reviwes" href="index.php#reviwes" >Reviwes</a></li>
                            <li id="menu-item-299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Why Us" href="index.php#why-us" >Why Us</a></li>
                            <li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Pricing" href="index.php#pricing" >Pricing</a></li>
                            <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Contact" href="index.php#contact" >Contact</a></li>
                            <li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item- dropdown"><a class="dropdown-toggle" title="Profile" href="#" data-toggle="dropdown" aria-haspopup="true" >More <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-no"><a class="scroll-to" title="About Us" href="about-us.php" >About Us</a></li>
                                
                                <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-no"><a class="scroll-to" title="Payment Option" href="payment.php" >Payment Option</a></li>
                                <li id="menu-item-461" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-"><a class="scroll-to" title="Our Fleet" href="our-fleet.php" >Our Fleet</a></li>
                                <li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-no"><a class="scroll-to" title="Drivers Info" href="drivers-info.php" >Drivers Info</a></li>
                                <li id="menu-item-350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-no"><a class="scroll-to" title="Privacy" href="privacy.php">Privacy</a></li>
                            </ul>
                        </li>
                    </ul>                            </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
    </div>
</header>
<!-- Header end -->

