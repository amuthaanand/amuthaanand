<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
  {	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
    $sql ="INSERT INTO enquiry_details(name,email,subject,message)VALUES(:name,:email,:subject,:message)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':subject', $subject, PDO::PARAM_STR);
	$query-> bindParam(':message', $message, PDO::PARAM_STR);
	$query->execute();
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
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="264px" height="60px"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="product.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="application.php">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box" style="position: absolute; display: block; visibility: visible; left: 50px; top: 0px; z-index: 1;">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Flood Light <br />Ecno</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Watt:150w
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <!-- <a class="more_btn" href="#">Discover</a> -->
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="img/ecno.png" alt=""/>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box" style="position: absolute; display: block; visibility: visible; left: 50px; top: 0px; z-index: 1;">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">Bay Light <br />UFO</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Watt:200w
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <!-- <a class="more_btn" href="#">Discover</a> -->
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="img/ufo.png" alt=""/>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box"style="position: absolute; display: block; visibility: visible; left: 50px; top: 0px; z-index: 1;">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','left','15','center']" 
                            data-hoffset="['0','80','80','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['400','400','400','250','180','180']" 
                            data-fontsize="['72','72','72','50','50','30']"
                            data-lineheight="['82','82','82','62','62','42']"
                            data-width="['none']"
                            data-height="none"
                            data-whitespace="nowrape"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">High Mast Light <br />Checkers
                            <br><br>
                            </div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','left','15','center']" 
                                data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['575','575','575','400','320','300']"  
                                data-fontsize="['24','24','24','18','16','16']"
                                data-lineheight="['36','36','36','26','26','26']"
                                data-width="['none','none','none','none','none']"
                                data-height="none"
                                data-whitespace="nowrape"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['left','left','left','left','left','center']">Watt:250w
                            </div>
                            
                            <div class="tp-caption tp-resizeme" 
                                data-x="['left','left','left','left','15','center']" data-hoffset="['0','80','80','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['670','670','670','480','370','350']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <!-- <a class="more_btn" href="#">Discover</a> -->
                            </div>
                            <div class="tp-caption tp-resizeme single_img" 
                            data-x="['right','right','right','right','right','right']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" 
                            data-voffset="['180','180','180','180','0']" 
                            data-fontsize="['65','65','60','40','25']"
                            data-lineheight="['75','75','75','50','35']"
                            data-width="['485','485','485','485','485']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left','left','center']">
                                <img src="img/chekers.png" alt=""/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================Product Area =================-->
        <section class="feature_area" style="padding-top:0px;">
            <div class="container">
                <div class="c_title">
                    <h2>Products</h2>
                </div>
                <div class="row feature_inner">
                    <?php $sql = "SELECT * FROM product where status='1'";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {?>	
                    <div class="col-lg-3 col-sm-7">					
                        <div class="feature_item">
                            <div class="f_icon">
                            <a href="product.page.php?show=<?php echo $result->id;?>">
                            <img  src="dashboard/product_imgs/<?php echo htmlentities($result->image);?>" height="155px" width="95px"/> </a>
                            </div>
                            <br>
                            <p style="padding-bottom: 0px;">Generic Name : <?php echo htmlentities($result->g_name);?></p>
                            <p style="padding-bottom: 0px;"> Product Name : <?php echo htmlentities($result->product_name);?></p>
                            <p style="padding-bottom: 0px;">  Warrenty: <?php echo htmlentities($result->warrenty);?></p>
                        </div>
                    </div>
                    <?php $cnt=$cnt+1; }} ?>
                </div>
            </div>
            <br>
            <br>
            <center>
                <aside class="r_widget tag_widget">
                    <ul>
                        <li><a href="product.php">More info ...</a></li>
                    </ul>
                </aside>
            </center>
        </section>
        <!--================End Product Area =================-->

    <!-- ################################################################# -->
       <!--================Ongoing Projects Area =================-->
       <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <h2>Ongoing Projects</h2>
                </div>
                <div class="row feature_inner">
                <?php $sql = "SELECT * FROM (SELECT * FROM project where project_type='Ongoing Project' and status='1' ORDER BY id DESC LIMIT 3)Var1 ORDER BY id ASC";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {?>	
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="dashboard/project_imgs/<?php echo htmlentities($result->image);?>" height="127px" width="248px"/>
                            </div>
                            <h4><?php echo htmlentities($result->project_name);?></h4>
                        </div>
                    </div>
                    <?php $cnt=$cnt+1; }} ?>
                </div>
            </div>
            <br>
            <br>
        </section>
        <!--================End Ongoing Projects Area =================-->

           <!-- ################################################################# -->

        <!--================Reached Projects Area =================-->  
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <h2>Reached Projects</h2>
                </div><br><br>
                <div class="row feature_inner">
                <?php $sql = "SELECT * FROM (SELECT * FROM project where project_type='Accomplished Project'and status='1' ORDER BY id DESC LIMIT 2)Var1 ORDER BY id ASC";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {?>	
                    <div class="col-lg-6 col-sm-7">
                        <div class="feature_item">
                            <div class="f_icon">
                            <a href="project.page.php?show=<?php echo $result->id;?>">
                            <img src="dashboard/project_imgs/<?php echo htmlentities($result->image);?>" alt=""  height="155px" width="150x"/></a>
                            </div>
                            <h4><?php echo htmlentities($result->project_name);?></h4>
                            <p style="padding-bottom: 0px;"> Location : <?php echo htmlentities($result->location);?></p>
                           
                            <a class="more_btn" href="project.page.php?show=<?php echo $result->id;?>">Read More</a>
                        </div>
                        
                    </div>
                    <?php $cnt=$cnt+1; }} ?>
                    <br/><br/><br>
                </div>
            </div>
            <br>
            <br>
            <center><aside class="r_widget tag_widget" style="color:red">
                                <ul>
                                    <li><a href="project.php">More info ...</a></li>
                                </ul>
                            </aside></center>
            
        </section>
        <!--================End Reached Projects Area =================-->

           <!-- ################################################################# -->
        <!--================The best slider Area =================-->
        <section class="best_3d_area">
            <div class="left_3d">
                <div class="shap_slider_inner owl-carousel">
                    <div class="item">
                        <h4 style="color:black">“They are the best”</h4>
                        <p>Suvedhan Thirumurugan is the Founder and CEO, of Sacdeeil Science LLP, is a budding entrepreneur with 10 years of experience in the field of LED manufacturing. He is skilled with envisioning the future development of LED’s with advanced features and well talented in managing crisis and enables the work process of the company to the next level.</p>
                        <div class="media">
                            <img src="img/ceo-1.png" alt="" width="100px" height="100px"/>
                            <div class="media-body">
                                <h5>Suvedhan</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt=""/>
                            <h6>Discover the features</h6>
                            <h2>We don’t hide, we stand tall in front of challenge</h2>
                        </div>
                        <p>Sacdeeil is one of the leading LED lighting manufactures in India. We started with the understanding, that LED has changed the way people & organizations, evaluate lighting products & projects. We offer a wide range of Outdoor lighting solutions. The company’s diverse portfolio of lighting products, caters to several industries including education, commercial offices, healthcare, hospitality, government, industries, retail, transportation, roadways, bridges, tunnels, sewer and dams. The company is leveraging the latest technologies to help businesses and communities improve efficiency, reduce costs and protect the environment.</p>
                    </div>
                    <div class="shap_mobile">
                        <img src="img/iphone4.png" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!--================End The best slider Area =================-->
                       
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6" style="background-image: url(img/message.jpg)">
                    <br>
                    <br>
                        <form class="contact_us_form row"  method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control"  name="name" placeholder="Name" style="color:red;">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control"  name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control"  name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message"  placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn submit_btn form-control" name="submit" type="submit">Save</button>
								</div>
							</div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt=""/>
                                <h6>Say hello</h6>
                                <h2>Get in touch, send us an e-mail or call us</h2>
                            </div>
                            <p>Sacdeeil-Manufactures of LED light Desiqned & developed from scratch based on 99% of customer demands with cost officient & fulfilling quality </p>
                            <!-- <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p> -->
                            <a href="#"><h5>Call us now</h5></a>
                            <a href="tel:+91 63699 78076 "><h4>+91 63699 78076</h4></a>
                            <a href="mailto:sales.ff@sacdeeil-lighting.com">sales.ff@sacdeeil-lighting.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
        
        <!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt=""/>
                    <div class="bd-callout"style="padding-left: 37px;padding-top: 13px;padding-bottom: 10px;">
                        <h3>Office</h3>
                            <p>No.5, First Cross, Victoria Nagar<br/>Reddiyarpalayam, Pondicherry</p>
                            <h4><a href="tel:+91 79047 05218">India:+91 79047 05218</a> <a href="mailto:sales.nf@sacdeeil-lighting.com">sales.nf@sacdeeil-lighting.com</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->
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
    </body>
</html>
<?php  ?>