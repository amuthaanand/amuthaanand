<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['show']))
	{
		$editid=$_GET['show'];
	}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/new-logo.png" type="image/x-icon" />
        <title>sacdeeil-lighting</title>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
    </head>
    <body>
    <?php
		$sql = "SELECT * from product where id = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$editid,PDO::PARAM_INT);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;?>
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="266px" height="60px"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
                        <li class="nav-item active"><a class="nav-link" href="product.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="application.php">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text" style="padding-bottom:40px">
                    <h2><?php echo htmlentities($result->product_name);?></h2>
                    <p style="padding-top:10px"><?php echo htmlentities($result->g_name);?></p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100"  style="padding-top:40px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog_main_inner">
                            <div class="blog_main_item">
                                <div class="blog_text">
                                    <div class="blog_img">
                                    <div class="container">
                                            <span onclick="this.parentElement.style.display='none'" class="closebtn" height="465px" width="815px"></span>
                                            <center><img class="img-fluid" style="max-width:65%;height:350px" id="expandedImg" src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" /></center>
                                            <!-- <img src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" alt="" height="465px" width="815px" /> -->
                                            <div id="imgtext"></div>
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                    <center>
                                        <!-- <a><h3><?php echo htmlentities($result->product_name);?></h3></a>
                                        <div class="blog_author">
                                            <a><?php echo htmlentities($result->g_name);?></a>
                                            <a><?php echo htmlentities($result->model_name);?></a>
                                        </div> -->
                                    </center>
                                    <!--================Image Slide =================-->
                                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                            <div class="MultiCarousel-inner">
                                                <?php $sql = "SELECT * FROM product_images  where sample_id = :editid"; 
                                                    $query = $dbh -> prepare($sql);
                                                    $query->bindParam(':editid',$editid,PDO::PARAM_INT);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0)
                                                    {
                                                    foreach($results as $result)
                                                {?>
                                                    <div style="width: 120px; float: left;" class="item">
                                                       <center> <img  src="dashboard/project_imgs/<?php echo htmlentities($result->image);?>" alt=""  height="120px" width="65px" onclick="myFunction(this);"/></center>
                                                    </div>
                                                <?php $cnt=$cnt+1; }} ?>
                                            </div>
                                            <button class="btn btn-primary leftLst"><</button>
                                            <button class="btn btn-primary rightLst">></button>
                                        </div>
                                    <!--================End Image Slide =================-->
                                    <!--================ File Show  =================-->
                                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                            <div class="MultiCarousel-inner">
                                                <?php  $sql = "SELECT * from product_file_upload where sample_id = :editid";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':editid',$editid,PDO::PARAM_INT);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            { 
                                            foreach($results as $result)
                                            {?>	
                                                    <div class="item">
                                                    <center>
                                                    <a class="item"  href="dashboard/project_imgs/<?php echo htmlentities($result->image);?>" target="_blank"><h4 style="padding-left: 30px; padding-top: 14px; color:#0abaef;"><?php echo htmlentities($result->watt);?></h4></a>
                                                    </center>
                                                    </div>
                                                <?php $cnt=$cnt+1; }} ?>
                                            </div>
                                            <button class="btn btn-primary leftLst"><</button>
                                            <button class="btn btn-primary rightLst">></button>
                                        </div>
                                     <!--================ File Show  =================-->
                                    <br>
                                    <?php
                        $sql = "SELECT * from product where id = :editid";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':editid',$editid,PDO::PARAM_INT);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?>
                                    <div class="blog_text_text">
                                    <a><h4><?php echo htmlentities($result->title);?></h4></a>
                                    <p><?php echo htmlentities($result->description);?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $sql = "SELECT * from product where id = :editid";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':editid',$editid,PDO::PARAM_INT);
                        $query->execute();
                        $result=$query->fetch(PDO::FETCH_OBJ);
                        $cnt=1;?>
                    <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Life Time : </h3>
                                </div>
                                <p>Life Span : <?php echo $result->life_span;?> Hours</p>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Housing & Finish : </h3>
                                </div>
                                <p>Material : <?php echo $result->material;?></p>
                                <p>Make of Lens : <?php echo $result->lens;?></p>
                                <p>Water Protection : <?php echo $result->water_protection;?></p>
                                <p>LED Make : <?php echo $result->led_make;?></p>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Test Reports :</h3>
                                </div>
                                <p>LM-79 : <?php echo $result->lm_79;?></p>
                                <p>LM-80 : <?php echo $result->lm_80;?></p>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Dimensions :</h3>
                                </div>
                                <p>Weight : <?php echo $result->weight;?></p>
                                <p>Item Length : <?php echo $result->item_length;?> mm</p>
                                <p>Item Width : <?php echo $result->item_width;?> mm</p>
                                <p>Item Height : <?php echo $result->item_height;?> mm</p>
                            </aside>
                            <aside class="r_widget quote_widget">
                                <div class="r_w_title">
                                    <h3>Operating Conditions :</h3>
                                    <p>Working Temperature : <?php echo $result->working_temp;?> °C </p>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                       <div class="col-lg-5">
                            <div class="blog_right_sidebar">
                                <aside class="r_widget categories_widget">
                                    <div class="r_w_title" style="padding-top: 35px;">
                                        <h3>Electrical Information : </h3>
                                    </div>
                                    <p>Input Voltage : <?php echo $result->input_voltage;?> V</p>
                                    <p>Output Voltage : <?php echo $result->output_voltage;?></p>
                                    <p>Output Current : <?php echo $result->output_current;?> V</p>
                                    <p>Series : <?php echo $result->series;?></p>
                                    <p>Parallel : <?php echo $result->parallel;?></p>
                                    <p>Power Factor : <?php echo $result->power_factor;?> I</p>
                                    <p>Surge Protection : <?php echo $result->sure_portection_level;?> KV</p>
                                    <p>Number og LED : <?php echo $result->number_of_led;?></p>
                                    <p>LED Type : <?php echo $result->led_type;?></p>
                                </aside> 
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title" style="padding-top: 35px;">
                                    <h3>Performance : </h3>
                                </div>
                                <p>Total Lumens : <?php echo $result->total_lumens;?></p>
                                <p>Total Power : <?php echo $result->total_power;?> W</p>
                                <p>Lumens Output LED : <?php echo $result->lumen_output;?></p>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Optical Information : </h3>
                                </div>
                                <p>LED CCT : <?php echo $result->cct;?> K</p>
                                <p>CRI : <?php echo $result->cri;?></p>
                            </aside>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Application : </h3>
                                </div>
                                <?php  
                                            $sql = "SELECT * from product_application where sample_id = :editid";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':editid',$editid,PDO::PARAM_INT);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {?>	
                                <p><?php echo strtoupper($result->application);?></p>
                                <?php $cnt=$cnt+1; }} ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
        <!--================End Blog Main Area =================-->
        <?php include('includes/footer.php');?>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/theme.js"></script>
        <script src="js/1.min.js"></script>
        <script src="js/min.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>
<?php ?>