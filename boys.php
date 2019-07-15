<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- internet explorer compatability meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- first mobile meta - responsive design meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Boy's corner</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Slabo+27px" >
        <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
   
    
    <body>
        <div class="logo-img">
            <div class="container">
                <div class="row">
                    <img src="images/boys-page.png" class="img-responsive wow bounceIn">
                </div>
            </div>
        </div>    
            
        <nav class="boys-nav">
            <ul>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="index.php">Home</a></li>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="#myslide">Clothes</a></li>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="#shoes">Shoes</a></li>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="#accessory">Accessories</a></li>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="#toys">Toys</a></li>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <li><a href="#">Contact</a></li>
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
        
        <div class="header text-center">
            <div class="container">
                <h2><i class="fa fa-star-o boys-color"></i> Hello our brave boys <i class="fa fa-star-o boys-color"></i></h2>
                <p class="lead">this is your corner where you find all what you need, is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
        </div>
        
        <!-- start clothes -->
        <div id="myslide" class="dresses boys-clothes carousel slide boys-bg" data-ride="carousel">
            <div class="container">
                <h2 class=""> <i class="fa fa-male" style="margin-right: 5px"></i>Clothes</h2>
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="row item active">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/shirt1.png" class="dress img-responsive">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="dress-details">
                                <h3>Item details</h3>
                                <hr>
                                <p> <i class="fa fa-arrow-right"></i> Is simply dummy text of the printing and typesetting industry.</p>
                                <p> <i class="fa fa-arrow-right"></i> Made from cotton</p>
                                <h4> <i class="fa fa-arrow-right"></i> Price: 30$</h4>
                                <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/shirt2.png" class="dress img-responsive">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="dress-details">
                                <h3>Item details</h3>
                                <hr>
                                <p> <i class="fa fa-arrow-right"></i> Is simply dummy text of the printing and typesetting industry.</p>
                                <p> <i class="fa fa-arrow-right"></i> Made from cotton</p>
                                <h4> <i class="fa fa-arrow-right"></i> Price: 30$</h4>
                                <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/shirt3.png" class="dress img-responsive">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="dress-details">
                                <h3>Item details</h3>
                                <hr>
                                <p> <i class="fa fa-arrow-right"></i> Is simply dummy text of the printing and typesetting industry.</p>
                                <p> <i class="fa fa-arrow-right"></i> Made from cotton</p>
                                <h4> <i class="fa fa-arrow-right"></i> Price: 30$</h4>
                                <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row item">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/shirt4.png" class="dress img-responsive">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="dress-details">
                                <h3>Item details</h3>
                                <hr>
                                <p> <i class="fa fa-arrow-right"></i> Is simply dummy text of the printing and typesetting industry.</p>
                                <p> <i class="fa fa-arrow-right"></i> Made from cotton</p>
                                <h4> <i class="fa fa-arrow-right"></i> Price: 30$</h4>
                                <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Controls -->
                <div class="controls">
                    <a class="left" href="#myslide" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span>Previous</span>
                    </a>

                    <a class="right" href="#myslide" role="button" data-slide="next">
                      <span>Next</span>
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end clothes section -->
        
        <!--start shoes section-->
        <div id="shoes" class="shoes boy-shoes text-center">
            <div class="fluid">
                <div class="container">
                    <h2 style="color: #abccf5">Shoes</h2>
                    <p class="lead" style="border-bottom: 5px dotted #abccf5">Choose your kid shoes from this awesome collection</p>
                    <!-- start carousel -->
                    <div id="myslide1" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="images/shoe6.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/shoe7.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/shoe8.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="images/shoe7.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/shoe8.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/shoe6.png" class="img-responsive center-block">
                                        <h4 class="center-block">Price: 30$</h4>
                                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control carousel-blue" href="#myslide1" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>

                        <a class="right carousel-control carousel-blue" href="#myslide1" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end shoes section-->
        
        <!--start accessories section-->
        <div id="accessory" class="accessory boys-bg boys-accessory text-center">
            <div class="container">
                <h2 class="boys-color">Accessories</h2>
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                <p class="lead">Here is a pretty collection of boy's accessories choose and interest.</p>
                <div class="row text-center">
                    <div class="col-sm-3 col-xs-6 item wow slideInDown">
                        <img src="images/access13.jpg" class="img-responsive center-block">
                        <h4 class="center-block">Price: 30$</h4>
                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                    </div>
                    <div class="col-sm-3 col-xs-6 item wow slideInDown">
                        <img src="images/access14.jpg" class="img-responsive center-block">
                        <h4 class="center-block">Price: 30$</h4>
                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                    </div>
                    <div class="col-sm-3 col-xs-6 item wow slideInDown">
                        <img src="images/access15.jpg" class="img-responsive center-block">
                        <h4 class="center-block">Price: 30$</h4>
                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                    </div>
                    <div class="col-sm-3 col-xs-6 item wow slideInDown">
                        <img src="images/access16.jpg" class="img-responsive center-block">
                        <h4 class="center-block">Price: 30$</h4>
                        <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                    </div>
                </div>
                <a href="#">See more accessories...</a>
            </div>
        </div>
        <!--end accessories section-->
        
        <!--start section toys-->
        <section id="toys" class="toys boys-toys">
            <div class="container">
                <h2><i class="fa fa-star"></i>Toys<i class="fa fa-star"></i></h2>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 toy wow flipInY">
                        <img src="images/toy1.jpg" class="img-responsive center-block">
                        <div class="toy-details text-center">
                            <h3>Kitchen <br> <br><span>Price: 40$</span></h3>
                            <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 toy wow flipInY">
                        <img src="images/toy2.jpg" class="img-responsive center-block">
                        <div class="toy-details  text-center">
                            <h3>Oven <br> <br><span>Price: 40$</span></h3>
                            <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 toy wow flipInY">
                        <img src="images/toy3.jpg" class="img-responsive center-block">
                        <div class="toy-details  text-center">
                            <h3>Telephone <br> <br><span>Price: 40$</span></h3>
                            <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 toy wow flipInY">
                        <img src="images/toy4.jpg" class="img-responsive center-block">
                        <div class="toy-details  text-center">
                            <h3>Motocycle <br> <br><span>Price: 40$</span></h3>
                            <button>Add to cart <i class="fa fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <a href="#">See more toys...</a>
            </div>
        </section>
        <!--end section toys-->
        
        
        <!--start footer-->
        <footer class="boys-footer">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-4 col-xs-6">
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="girls.php">Girl's corner</a></li>
                            <li><a href="boys.php">Boy's corner</a></li>
                            <li><a href="#toys">Toys</a></li>
                            <li><a href="#accessory">Accessories</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-4 col-xs-6">
                        <img src="images/footer1.png" class="img-responsive center-block wow slideInUp">
                    </div>
                    
                    <div class="col-sm-4 col-xs-12">
                        <h2>Waiting u our brave boy</h2>
                        <h3 class="boys-color"><span class="glyphicon glyphicon-map-marker"></span> Address<br>Entag streat, Sharkia, Egypt</h3>
                        <h4 class="">All rights Reserved <br><i class="fa fa-star"></i> Designed by:Rana Elsayed</h4>
                    </div>
                </div>
                

            </div>
            <div class="row">
            </div>
        </footer>
        <!--end footer-->
        
       <script src="js/jquery-3.2.1.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/plugins.js"></script>
       <script src="js/wow.min.js"></script>
       <script>
            new WOW().init();
        </script>
    </body>
</html>


