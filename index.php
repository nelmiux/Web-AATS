<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nelma Perera">
    <title>Welcome to AATS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet">  
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap-dialog.css" rel="stylesheet">

    <!-- Social CSS -->
    <link rel="stylesheet" href="css/contact-buttons.css">

    <link rel="stylesheet" href="css/languages.min.css"/>
    <link href="/images/lang/languages.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->      

    <link rel="shortcut icon" href="logo.png">
</head><!--/head-->

<body>

    <!-- Navigation -->
    <nav id="header" role="banner">  
        <div class="main-nav">
            <div class="container">
                <div class="header-top">
                </div>     
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://aatsparra.com/">
                            <img align="middle" class="img-responsive" src="images/logo.png" alt="logo">
                        </a> 
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right pull-right">     
                            <li class="smoothScroll active"><a href="#home">Home</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#business"><i class="fa fa-fw fa-briefcase"></i> Business</a></li>
                                  <li><a href="#accTax"><i class="fa fa-fw fa-calculator"></i> Accounting &amp; Tax</a></li>
                                  <li><a href="#immigration"><i class="fa fa-fw fa-globe"></i> Immigration</a></li>
                                  <li><a href="#travel"><i class="fa fa-fw fa-plane"></i> Travel Agency</a></li>
                                </ul>
                            </li>             
                            <li class="smoothScroll"><a href="#about">About Us</a></li>                     
                            <li class="smoothScroll"><a href="#contact">Contact Us</a></li>       
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- /.container -->
        </div>
    </nav>

    <!-- Half Page Image Background Carousel Header -->
    <header id="home" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
            <li data-target="#home" data-slide-to="3"></li>
        </ol>

       <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider/bg1.jpg');"></div>
                <div class="sbox carousel-caption text-center">
                    <h2>Providing direct assistance in opening, expanding, and operating 
                        your Business within the City’s rules and regulations.</h2>
                    <a href="#business" class="animated slideinleft second delay btn btn-info">Grow your Business</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider/bg2.jpg');"></div>
                <div class="sbox carousel-caption text-center">
                    <h2>Leading provider of tax preparation services for the South Florida area, 
                        helping to simplify federal, state, and local tax.</h2>
                    <a href="#accTax" class="animated slideinleft second delay btn btn-success">Manage your Money</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider/bg3.jpg');"></div>
                <div class="sbox carousel-caption text-center">
                    <h2>Years of experience aiding low income immigrants with their immigration paperwork.
                        we provide personalized guidance throughout our client’s immigration process.</h2>
                    <a href="#immigration" class="animated slideinleft second delay btn btn-info">Immigration Help</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider/bg4.jpg');"></div>
                <div class="sbox carousel-caption text-center">
                    <h2>Providing the best deal and discounts. We offer worldwide and Cuba tourism packets, flights, car rentals, and cruises.</h2>
                    <a href="#travel" class="animated slideinleft second delay btn btn-success">Travel with Us</a>
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div id="services" class="home-section">
        <div class="container">
            <!-- Services
              ================ -->
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="service-box wow bounceInDown text-center" data-wow-delay="0.1s">
                        <i class="fa fa-briefcase fa-4x"></i> 
                        <h4>BUSINESS</h4>
                        <p>Corporation Creation, Business growning, and more ...</p>
                        <a href="#business" class="btn btn-primary gradient">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="service-box wow bounceInDown text-center" data-wow-delay="0.1s">
                            <i class="fa fa-calculator fa-4x"></i> 
                            <h4>ACCOUNTING  &amp;  TAX</h4>
                            <p>Bookeeping, Quickbooks, Tax Preparation, and more ...</p>
                            <a href="#accTax" class="btn btn-primary gradient">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="service-box wow bounceInDown text-center" data-wow-delay="0.1s">
                            <i class="fa fa-globe fa-4x"></i> 
                            <h4>IMMIGRATION</h4>
                            <p>Citizenship, Residence, Visas, Exp/Imp, and more ...</p>
                            <a href="#immigration" class="btn btn-primary gradient">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="service-box wow bounceInDown text-center" data-wow-delay="0.1s">
                        <i class="fa fa-plane fa-4x"></i> 
                        <h4>TRAVEL  AGENCY</h4>
                        <p>Tourism packets, flights, cars, cruises, and more ...</p>
                        <a href="#travel" class="btn btn-primary gradient">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <section id="business" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="animated slideInLeft"><span>Business</span></h2>
                        <hr>
                        <h4><i>In Construction</i></h4>
                    </div>
                </div>
            </div> 
            <div class="text-center box1 wow bounceInDown">
                <img src="" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!--/#business-->

    <section id="accTax" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="animated slideInLeft"><span>Accounting &amp; Tax</span></h2>
                        <hr>
                        <h4><i>In Construction</i></h4>
                    </div>
                </div>
            </div> 
            <div class="text-center box1 wow bounceInDown">
                <img src="" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!--/#accTax-->

    <section id="immigration" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="animated slideInLeft"><span>Immigration</span></h2>
                        <hr>
                        <h4><i>In Construction</i></h4>
                    </div>
                </div>
            </div> 
            <div class="text-center box1 wow bounceInDown">
                <img src="" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!--/#immigration-->

    <section id="travel" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="animated slideInLeft"><span>Travel Agency</span></h2>
                        <hr>
                        <h4><i>In Construction</i></h4>
                    </div>
                </div>
            </div> 
            <div class="text-center box1 wow bounceInDown">
                <img src="" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <p></p>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!--/#travel-->

    <section id="about" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="animated slideInLeft"><span>About Us</span></h2>
                        <hr>
                        <h4>Welcome to AATS Parra Corp, Thank you for visiting our Internet site.</h4>
                    </div>
                </div>
            </div> 
            <div class="text-center box1 wow bounceInDown">
                <img src="images/about/AATS.jpg" alt="Ad">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Advanced Accounting & Tax Service is a leading provider of tax preparation services for the South Florida area helping to automate and simplify federal, state and local tax compliance. Founded in 2005 and based in Hialeah, Fl, AATS is dedicated to serving the needs of the community and taxpayers. We are professionals with an extensive experience in preparing tax returns for businesses and individuals.</p>
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <ul>
                        <li>Member of 'Latino Tax Professionals Association'</li>
                        <li>Member of 'National Notary Association'</li>
                        <li>Member of 'National Society of Tax Professional'</li>
                        <li>Authorized 'Electronic Service Provider'</li>
                        <li>Registered Tax Return Preparer</li>
                        <li>Latino Tax Professionals Association - AUTHORIZED INSTRUCTOR</li>
                    </ul>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!--/#about-->

    <section id="contact" class="wrapper">
        <div class="section-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="section-heading text-center">
                            <h2 class="animated slideInLeft"><span>Contact Us</span></h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Contact us form -->
                <div class="col-sm-7">
                    <form id="main-contact-form" class="form-horizontal" method="post" action='sendemail.php'>
                        <h4 style="text-align:center; margin-bottom: 35px">Send a message</h4>
                        <div id="ffirst_name" class="form-group">
                            <div class="has-feedback">
                                <label class="control-label col-sm-3" for="first_name" style="color:#FFFFFF">First Name:</label>
                                <div class="input-group margin-bottom-sm col-sm-8">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input type="text" name="first_name" class="form-control" id="first_name" onblur="validateText(name)" placeholder="Enter your First Name (required)" value="<?php echo $first_name;?>">                         
                                    <span id="sucName" class="glyphicon glyphicon-ok form-control-feedback icon" style="color:green; display: none"></span>
                                    <span id="errName" class="glyphicon glyphicon-remove form-control-feedback icon" style="color:red; display: none"></span>
                                </div>
                            </div>
                            <div class="msg">
                            	<span id="first_nameEmp" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> First Name is required</span> 
                            	<span id="first_nameErr" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Only letters, a space, a hyphen or an apostrophe allowed on First Name</span> 
                        	</div>
                        </div>
                        <div id="flast_name" class="form-group">
                            <div class="has-feedback">
                                <label class="control-label col-sm-3" for="last_name" style="color:#FFFFFF">Last Name:</label>
                                <div class="input-group margin-bottom-sm col-sm-8">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input type="text" name="last_name" class="form-control" id="last_name" onblur="validateText(name)" placeholder="Enter your Last Name (required)" value="<?php echo $last_name;?>">        
                                    <span id="sucLastName" class="glyphicon glyphicon-ok form-control-feedback icon" style="color:green; display: none"></span>
                                    <span id="errLastName" class="glyphicon glyphicon-remove form-control-feedback icon" style="color:red; display: none"></span>
                                </div>
                            </div>
                            <div class="msg">
                            	<span id="last_nameEmp" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Last Name is required</span> 
                            	<span id="last_nameErr" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Only letters, a space, a hyphen or an apostrophe allowed on Last Name</span>
                        	</div>
                        </div>
                        <div id="femail" class="form-group">
                            <div class="has-feedback">
                                <label class="control-label col-sm-3" for="email" style="color:#FFFFFF">E-mail:</label>
                                <div class="input-group margin-bottom-sm col-sm-8">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                    <input type="type="text"" name="email" class="form-control" id="email" onblur="validateEmail(name)" placeholder="Enter your Email (required)" value="<?php echo $email;?>">       
                                    <span id="sucEmail" class="glyphicon glyphicon-ok form-control-feedback icon" style="color:green; display: none"></span>
                                    <span id="errEmail" class="glyphicon glyphicon-remove form-control-feedback icon" style="color:red; display: none"></span>
                                </div>
                            </div>
                            <div class="msg">
                            	<span id="emailEmp" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Email is required</span> 
                            	<span id="emailErr" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Invalid email format</span>
                        	</div>
                        </div>
                        <div id="fphone" class="form-group">
                            <div class="has-feedback">
                                <label class="control-label col-sm-3" for="phone" style="color:#FFFFFF">Phone Number:</label>
                                <div class="input-group margin-bottom-sm col-sm-8">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                    <input type="tel" name="phone" class="form-control" id="phone" onblur="validatePhone(name)" placeholder="Ex 9784567890, 978-456-7890" value="<?php echo $phone;?>">
                                    <span id="sucPhone" class="glyphicon glyphicon-ok form-control-feedback icon" style="color:green; display: none"></span>
                                    <span id="errPhone" class="glyphicon glyphicon-remove form-control-feedback icon" style="color:red; display: none"></span>
                                </div>
                            </div>
                            <div class="msg">
                            	<span id="phoneErr" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Invalid phone format</span>
                        	</div>
                        </div>
                        <div id="ftext" class="form-group">
                            <label class="control-label col-sm-3" for="comment" style="color:#FFFFFF">Message:</label>
                            <div class="input-group margin-bottom-sm col-sm-8">
                            	<textarea name="comment" rows="6" type="text" class="form-control" id="comment" placeholder="Enter your Message" value="<?php echo $comment;?>"></textarea>
                            	<input type='submit' id="main" name="main" class="btn btn-primary gradient pull-right" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Right column -->
                <div class="col-sm-5">
                    <!-- Out Address -->
                    <h4 style="margin-bottom: 30px">Our Address</h4>
                    <p style="margin-bottom: 40px">
                        1275 W 47 Place, Suite 105,<br>
                        Hialeah, FL 33012<br>
                        <span style="font-size:20px;font-weight:550">Phone: </span> +1 786 360 3857<br />
                        <span style="font-size:20px;font-weight:550">Fax:  </span> +1 305 647 6116<br />
                        <span style="font-size:20px;font-weight:550">Email: </span><a href="mailto:jaimeparra@aatsparra.com">jaimeparra@aatsparra.com</a>
                    </p>
                    <!-- Google Maps -->
                    <h4 style="margin-bottom: 30px">Google Maps</h4>
                    <div class="map_container">
                        <div id="map" class="map_canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#contact-->

    <!-- Foooter
    ================== -->
    <footer>
        <div class="container">
            <div class="row">
            <!-- Contact Us 
            =================  -->
                <div class="col-sm-4">
                    <div class="headline"><h3>Contact us</h3></div>
                    <div class="content">
                        <p>
                            1275 W 47 Place, Suite 105,<br>
                            Hialeah, FL 33012<br>
                            <span style="font-size:20px;font-weight:550">Phone: </span> +1 786 360 3857<br />
                            <span style="font-size:20px;font-weight:550">Fax:  </span> +1 305 647 6116<br />
                            <span style="font-size:20px;font-weight:550">Email: </span><a href="mailto:jaimeparra@aatsparra.com">jaimeparra@aatsparra.com
                        </p>
                    </div>
                </div>

                    <!-- Social icons 
                    ===================== -->
                <div class="col-sm-4">
                    <div class="headline"><h3>Go Social</h3></div>
                    <div class="content social">
                        <p>Stay in touch with us:</p>
                        <ul>
                            <li><a href="https://www.facebook.com/AATS.PARRA.CORP"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://plus.google.com/109415448677065648607/about"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="https://twitter.com/aatsparra"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/pub/aats-parra-corp/104/633/797"><i class="fa fa-linkedin"></i></a>
                            </li>  
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!-- Subscribe 
                =============== -->
                <div class="col-sm-4">
                    <div class="headline"><h3>Subscribe</h3></div>
                    <div class="content">
                        <p>Enter your e-mail below to subscribe to our free newsletter.</p>
                        <form id="sub_form form" class="form" role="form" method= "post" action="">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group fsemail">
                                        <label class="sr-only" for="subscribe-email">Email address</label>
                                        <input type="email" class="form-control" name="semail" id="semail" onblur="validateEmail(name)" placeholder="Enter your Email" required>
                                        <span id="semailEmp" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Email is required</span> 
                                        <span id="semailErr" class="error" style="display: none;"><i class="fa fa-exclamation-triangle"></i> Invalid email format</span>
                                        <span class="input-group-btn">
                                            <button type="submit" id="sub" name="sub" class="btn btn-default" style="margin:0">OK</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Legal 
    ============= -->
    <div class="legal">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">Copyright &copy; 2015<a target="_blank" href="http://aatsparra.com/"> AATS Parra Corp. </a> | All Rights Reserved.<br><small>Designed &amp; Developed by Nelma Perera</small></div>
            </div>
        </div>
    </div>
    <!--/#footer--> 

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script src="js/wow.min.js"></script>

    <script src="js/jquery.contact-buttons.js"></script>

    <script>
    $.contactButtons({
          effect  : 'slide-on-scroll',
          buttons : {
            'facebook':   { class: 'facebook', use: true, link: 'https://www.facebook.com/AATS.PARRA.CORP', title: 'Follow on Facebook' },
            'google':     { class: 'gplus',    use: true, link: 'https://plus.google.com/109415448677065648607/about', title: 'Visit on Google Plus' },
            'twitter':   { class: 'twitter',      use: true, link: 'https://twitter.com/aatsparra', icon: 'twitter', title: 'Follow on Twitter' },
            'linkedin':   { class: 'linkedin', use: true, link: 'https://www.linkedin.com/pub/aats-parra-corp/104/633/797', title: 'Visit on LinkedIn' },
            'phone':      { class: 'phone separated',    use: true, link: '+17863603857' },
            'email':      { class: 'email',    use: true, link: 'jaimeparra@aatsparra.com' }
          }
        });
    </script>

    <script type="text/javascript" src="js/bootstrap-dialog.js"></script>

    <script src="js/custom.js"></script>

    <script>
        function validateText(y) {
            var r = /[A-Za-z -']$/;
            validate(y, r);
        }
        function validateEmail(y) {
            var r = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            validate(y, r);
        }
        function validatePhone(x) {
            var re = /^((([0-9]{3}))|([0-9]{3}))[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4}$/;
            if (!(document.getElementById(x).value) || re.test(document.getElementById(x).value)) {
                document.getElementById('sucPhone').style.display ='block';
                document.getElementById("f" + x).classList.remove("has-error");
                document.getElementById("f" + x).classList.add("has-success");
                document.getElementById('errPhone').style.display ='none';
                document.getElementById(x + 'Err').style.display = "none";
                return true;
            } else {
                document.getElementById('errPhone').style.display ='block';
                document.getElementById("f" + x).classList.remove("has-success");
                document.getElementById("f" + x).classList.add("has-error");
                document.getElementById('sucPhone').style.display ='none';
                document.getElementById(x + 'Err').style.display = 'block';
                return false; 
            }
        }
        function validate(x, re) {
            if(!(document.getElementById(x).value)) {
                if (x === "first_name") {
                    document.getElementById('errName').style.display ='block';
                    document.getElementById("f" + x).classList.remove("has-success");
                    document.getElementById("f" + x).classList.add("has-error");
                    document.getElementById('sucName').style.display ='none';
                }
                if (x === "last_name") {
                    document.getElementById('errLastName').style.display ='block';
                    document.getElementById("f" + x).classList.remove("has-success");
                    document.getElementById("f" + x).classList.add("has-error");
                    document.getElementById('sucLastName').style.display ='none';
                }
                if (x === "email") {
                    document.getElementById('errEmail').style.display ='block';
                    document.getElementById("f" + x).classList.remove("has-success");
                    document.getElementById("f" + x).classList.add("has-error");
                    document.getElementById('sucEmail').style.display ='none';
                }

                if (x === "semail") {
                    document.getElementById("f" + x).classList.remove("has-success");
                    document.getElementById("f" + x).classList.add("has-error");
                }

                document.getElementById(x + 'Emp').style.display = "block";
                document.getElementById("f" + x).classList.remove("has-success");
                document.getElementById("f" + x).classList.add("has-error");
                document.getElementById(x + 'Err').style.display = "none";
            } else {
                if(re.test(document.getElementById(x).value)) {
                    if (x === "first_name") {
                        document.getElementById('sucName').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-error");
                        document.getElementById("f" + x).classList.add("has-success");
                        document.getElementById('errName').style.display ='none';
                    }
                    if (x === "last_name") {
                        document.getElementById('sucLastName').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-error");
                        document.getElementById("f" + x).classList.add("has-success");
                        document.getElementById('errLastName').style.display ='none';
                    }
                    if (x === "email") {
                        document.getElementById('sucEmail').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-error");
                        document.getElementById("f" + x).classList.add("has-success");
                        document.getElementById('errEmail').style.display ='none';
                    }
                    if (x === "semail") {
                        document.getElementById("f" + x).classList.remove("has-error");
                        document.getElementById("f" + x).classList.add("has-success");
                    }
                    document.getElementById(x + 'Emp').style.display = "none";
                    document.getElementById(x + 'Err').style.display = "none";
                    return true;
                } else {
                    if (x === "first_name") {
                        document.getElementById('errName').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-success");
                        document.getElementById("f" + x).classList.add("has-error");
                        document.getElementById('sucName').style.display ='none';
                    }
                    if (x === "last_name") {
                        document.getElementById('errLastName').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-success");
                        document.getElementById("f" + x).classList.add("has-error");
                        document.getElementById('sucLastName').style.display ='none';
                    }
                    if (x === "email") {
                        document.getElementById('errEmail').style.display ='block';
                        document.getElementById("f" + x).classList.remove("has-success");
                        document.getElementById("f" + x).classList.add("has-error");
                        document.getElementById('sucEmail').style.display ='none';
                    }
                    if (x === "semail") {
                        document.getElementById("f" + x).classList.remove("has-success");
                        document.getElementById("f" + x).classList.add("has-error");
                    }
                    document.getElementById(x + 'Err').style.display = "block";
                    document.getElementById("f" + x).classList.add("has-error");
                    document.getElementById(x + 'Emp').style.display = "none";
                    return false; 
                }
            }
        }
    </script>
    <script>
        var data = {};
        $(document).ready(function() {
            $('input[type="submit"]').on('click', function() {
                var url = 'sendemail.php';
                $.each($('form input, form select, form textarea'), function(i, v) {
                    if (v.type !== 'submit') {
                        data[v.name] = v.value;
                    }
                }); //end each
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(resp) {
                        if (resp.success === 'true') {
                            //successful validation
                            $('form').submit();
                            BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_SUCCESS] = 'Success';
                            BootstrapDialog.show({
                                title: 'Success!!!',
                                message: resp.result,
                                buttons: [{
                                    id: 'btn-ok',   
                                    icon: 'glyphicon glyphicon-check',       
                                    label: 'OK',
                                    cssClass: 'btn-primary', 
                                    autospin: false,
                                    action: function(dialogRef){    
                                        dialogRef.close();
                                    }
                                }]
                            });
                            resp.success = false;
                            return false;
                        } else {
                            var keys = Object.keys(resp);
                            $('input[name="'+keys[0]+'"]').focus();
                            BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DANGER] = 'Error';
                            BootstrapDialog.show({
                                title: 'Warning!!!',
                                message: resp.result,
                                buttons: [{
                                    id: 'btn-ok',   
                                    icon: 'glyphicon glyphicon-edit',       
                                    label: 'OK',
                                    cssClass: 'btn-primary', 
                                    autospin: false,
                                    action: function(dialogRef){    
                                        dialogRef.close();
                                    }
                                }]
                            });
                        }
                        return false;
                    },
                    error: function() {
                        console.log('There was a problem checking the fields');
                    }
                });
                return false;
            });
        });
    </script>
    <script>
        var data = {};
        $(document).ready(function() {
            $('button[type="submit"]').on('click', function() {
                var url = 'sendemail1.php';
                $.each($('form input, form select'), function(i, v) {
                    if (v.type !== 'button') {
                        data[v.name] = v.value;
                    }
                }); //end each
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(resp) {
                        if (resp.success === 'true') {
                            //successful validation
                            $('form').submit();
                            BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_SUCCESS] = 'Success';
                            BootstrapDialog.show({
                                title: 'Success!!!',
                                message: resp.result,
                                buttons: [{
                                    id: 'btn-ok',   
                                    icon: 'glyphicon glyphicon-check',       
                                    label: 'OK',
                                    cssClass: 'btn-primary', 
                                    autospin: false,
                                    action: function(dialogRef){    
                                        dialogRef.close();
                                    }
                                }]
                            });
                            resp.success = false;
                            return false;
                        } else {
                            var keys = Object.keys(resp);
                            $('input[name="'+keys[0]+'"]').focus();
                            BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DANGER] = 'Error';
                            BootstrapDialog.show({
                                title: 'Warning!!!',
                                message: resp.result,
                                buttons: [{
                                    id: 'btn-ok',   
                                    icon: 'glyphicon glyphicon-edit',       
                                    label: 'OK',
                                    cssClass: 'btn-primary', 
                                    autospin: false,
                                    action: function(dialogRef){    
                                        dialogRef.close();
                                    }
                                }]
                            });
                        }
                        return false;
                    },
                    error: function() {
                        console.log('There was a problem checking the fields');
                    }
                });
                return false;
            });
        });
    </script>
    <script type="text/javascript">
        $('a[rel="external"]').attr('target', '_blank');
    </script>

    <script>
        function initMap() {
          var myLatLng = {lat: 25.8653946, lng: -80.3087058};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: ''
          });
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>

    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/scrolltopcontrol.js"></script>


</body>

</html>