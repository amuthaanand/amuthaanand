<?php
session_start();
error_reporting(0);
include('includes/config.php');
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="img/new-logo.png" type="image/x-icon" />
        <title>sacdeeil-lighting</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/css/templatemo-style.css">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="266px" height="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
                        <li class="nav-item "><a class="nav-link" href="product.php">Products</a></li>
                        <li class="nav-item active"><a class="nav-link" href="application.php">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Airport lighting</h2>
                    <!-- <p>G name</p> -->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog_main_inner">
                            <div class="blog_main_item">
                                <div class="blog_img">
                                    <img class="img-fluid" src="img/airport-img/1.jpg" alt=""height="350px" width="800px">
                                </div>
                                <div class="blog_text">
                                    <a href="#"><h4>Airport lighting</h4></a>
                                    <div class="blog_author">
                                    </div>
                                    <p>Air travel requires lots of travel right here on the ground. Cree® LED lighting solutions provide bright, even illumination along airport access roads, parking lots, walkways, corridors and concourses, slashing energy consumption and maintenance costs by double digits. Cree’s NanoOptic® technology reduces energy-wasting light spillover and enhances security. Book Cree LED lighting and watch safety levels and energy savings take off.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget add_widget">
                                <div class="r_w_title">
                                    <h3>Street Light</h3>
                                </div>
                                <img class="img-fluid" src="img/airport-img/mohamed-shaffaf-FGK43KM0Dys-unsplash.jpg" alt="">
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row tm-mb-90 tm-gallery">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="img/airport-img/jorgen-berglund-j2OuLxiTw4I-unsplash.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2><img src="img/new-1-logo.png" alt="" wigth="50px"height="50px"></h2>
                        </figcaption>                   
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                    <?php $sql = "SELECT * from product where product_name='Ecno'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?>
                    <a href="product.page.php?show=<?php echo $result->id;?>"><img src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" alt="Image"width="88px" height="70px" class="img-fluid"><?php echo htmlentities($result->product_name);?></a>
                    <?php $sql = "SELECT * from product where product_name='NEMO	'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?> 
                        <a href="product.page.php?show=<?php echo $result->id;?>"><img src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" alt="Image"width="50px" height="70px" class="img-fluid"><?php echo htmlentities($result->product_name);?></a>
                        <?php $sql = "SELECT * from product where product_name='TIZONA	'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?> 
                        <a href="product.page.php?show=<?php echo $result->id;?>"><img src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" alt="Image"width="76px" height="50px" class="img-fluid"><?php echo htmlentities($result->product_name);?></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="img/airport-img/claudio-schwarz-purzlbaum-wIeSjDouzc4-unsplash.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2><img src="img/new-1-logo.png" alt="" wigth="50px"height="50px"></h2>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <center style="padding-left: 106px;">
                            <a href=""><img src="img/UFO.png" alt="Image"width="100px" height="70px" class="img-fluid">UFO</a>
                            <?php $sql = "SELECT * from product where product_name='Ecno'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?>
                    <a href="product.page.php?show=<?php echo $result->id;?>"><img src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" alt="Image"width="88px" height="70px" class="img-fluid"><?php echo htmlentities($result->product_name);?></a>
                        </center>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="img/airport-img/karl-kohler-a80xLtm_tMQ-unsplash.jpg" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2><img src="img/new-1-logo.png" alt="" wigth="50px"height="50px"></h2>
                        </figcaption>                    
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <center style="padding-left: 106px;">
                            <a href=""><img src="img/checkers-1-250w.png" alt="Image"width="43px" height="50px" class="img-fluid">UFO</a>
                            <a href=""><img src="img/ecno.png" alt="Image"width="100px" height="70px" class="img-fluid">Ecno</a>
                        </center>
                    </div>
                </div>     
            </div> <!-- row -->
        <!--================Footer Area =================-->
        <?php include('includes/footer.php');?>
        <!--================End Footer Area =================-->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="js/js/plugins.js"></script>
        <script>
            $(window).on("load", function() {
                $('body').addClass('loaded');
            });
        </script>
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
<?php ?>