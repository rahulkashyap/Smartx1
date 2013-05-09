<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop no-websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity no-cssanimations csscolumns cssgradients no-cssreflections csstransforms no-csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" dir="ltr" lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>Empire CONSULTANT</title>
<link rel="stylesheet" id="responsive-style-css" href="css/style.css" type="text/css" media="all">
<link href="css/jquery.onebyone.css" rel="stylesheet" type="text/css">
<link href="css/example1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/animate.css"> 
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.6.4.min.js"></script>
<script src="js/jquery.onebyone.js"></script>              
<script src="js/jquery.touchwipe.js"></script> 
<script type="text/javascript" src="js/responsive-modernizr.js"></script>
<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />

<meta name="generator" content="WordPress 3.4.2">
<!-- We need this for debugging -->
<!-- Responsive 1.8.0.1 -->
<style type="text/css" media="print">

#wpadminbar {
	display: none;
}
	.fluid-width-video-wrapper {
		width: 100%;
		position: relative;
		padding: 0;
		}
	.fluid-width-video-wrapper iframe,
	.fluid-width-video-wrapper object,
	.fluid-width-video-wrapper embed {
		position: absolute;                       
		top: 0;                                   
		left: 0;                                  
		width: 100%;                              
		height: 100%; 
		}                         				 	                                      
</style>
<script type="text/javascript" charset="utf-8">	
	 $(document).ready(function() { 
		
        $('#banner').oneByOne({
			className: 'oneByOne1',	             
			easeType: 'random',
			slideShow: true
		});  

		$('li').last().css('background', 'none');		
	 });
   	
	 
    </script> 
</head>
<body>
<?php
@session_start();
include("classes/db.php"); 
include("classes/portfolio.php");
$obj=new portfolio();
$uid=$_SESSION['uid'];
$datas=$obj->view($uid);
?>


<div id="container">
  <div id="header">
	<div class="header_inner">
    	<div id="logo"><a href="#"><img src="images/logo.png" /></a> </div>
    	<div class="header_right">
            <ul class="menu l_tinynav1">
      			<li class="active"><a title="Home" href="#">Home</a></li>
      			<li><a href="#">About</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">CONTACT</a></li>
    		</ul>
    		
        </div>
        <div class="clear"></div>
        <select class="tinynav tinynav1">
      			<option selected="selected" value="http://localhost/wordpress/">Home</option>
      			<option value="http://localhost/wordpress/?page_id=2">Sample Page</option>
    	</select>
  	</div>
    <!-- end of #logo -->
    
  </div>
  <!-- end of #header -->
  <div id="wrapper">
  	<div id="featured" class="grid col-940">
    	<!--<img src="images/slider_img.jpg" alt="">-->
        	<div id="banner">  				
		<div class="oneByOne_item">     
			<img src="images/slider_img.jpg" />
		</div>
		</div>
	</div>
    <div class="small_resolution_banner"><img src="images/image_slider_img2.jpg" alt=""></div>
    <!-- end of #featured -->
  </div>
  <!-- end of #wrapper --> 
  <div class="clear"></div>
</div>
<!-- end of #container -->
<div class="bottom_outer">
	<div id="container1">
    	<div class="bottm_content_outer">
  			<div class="bottm_content">
        		<div class="bottom_left">
                	<h1>WELCOME TO EMPIRE CONSTRUCTION</h1>
                    <p>Empire’s success is constructed on quality, effiency, ethics, and best in class customer service. For over 30 years, we have been working with property management companies, construction managers, homeowners associations, brokerage firms, school districts, and churches providing comprehensive construction services.</p>
                    <p>Empire offers comprehensive Service that exceeds expectations.
Licensed, bonded and insured.</p>
					<h2>888.296.2078</h2>
                    <h3>License #973962</h3>
                </div>
                <div class="bottom_right">
                    <div class="recent_boxs">
                      <h2>RECENT PROJECTS</h2>
                      <!--<div class="recent_project_arrows">
                            <a href="#"><img src="images/recent_project_prev_arrow.png" alt=""></a>
                            <a href="#"><img src="images/recent_project_next_arrow.png" alt=""></a>
                        </div>-->
                      <div class="clear"></div>
                     <!--slider section-->
                    <div class="recent_projects_box">
                        <div id="slider_container_1">

  <div id="SliderName">
    <?php  foreach($datas as $data ) { 
	   if(!empty($data['title'])){?>
	  			
                <a href="#1">
 <img src="http://localhost/chris/upload/thumb/<?php echo $data['image']; ?>" title="Description from Image Title" />
				</a>
  
  
  <div class="SliderNameDescription" style="display:none;">
              <strong class="titles"> <?php echo  $data['title']; ?></strong><br />
              <strong class="desc"> <?php echo  $data['description']; ?></strong><br />
  </div>  
 
<?php } 
	    }?>

				<div class="c"></div>
				<div id="SliderNameNavigation"></div>
				<div class="c"></div>

				<script type="text/javascript">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 269, height: 208, effects: 'demo01',
					display: {
						pause: true, // slider pauses on mouseover
						//autoplay: 3000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 100, width: 250, position: 'bottom'}, // image description box settings
						loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});

				</script>

				<div class="c"></div>
			</div>
                     </div> 
                      <!--<div class="recent_projects_box">
                        <div class="recent_caption">
                            <h3>Astea International</h3>
                            <p>Commercial Office, Tenant Improvement<br />
    8 Hughes<br />
    Irvine, Ca 92618<br />
    8,804 square feet</p>
                        </div>
                        <div class="recent_projects_img">
                            <img src="images/recent_project_img.gif" alt="">
                        </div>
                      </div>-->
                     <!--end of section--> 
                    </div>
              	</div>
                <div class="clear"></div>
        	</div>
    	</div>
  </div>
	<!-- end of #container -->
    <div id="footer">
    	<div class="footer-inner1">
    		<div class="footer-inner">
        		<div class="footer_left">
                	<ul>
                    	<li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clear"></div>
                    <p>Empire Construction is a national contractor committed to increasing value for business and communities. 
We deliver projects that exceed our customers' expectations and meet the highest standards of quality and safety.</p>
                </div>
                <div class="footer_right">
                	<div class="footer_socails">
               	    	<a href="#"><img src="images/fb_icon.png" alt=""></a>
                        <a href="#"><img src="images/twitter_icon.png" alt=""></a>
                        <a href="#"><img src="images/in_icon.png" alt=""></a>
                        <a href="#"><img src="images/youtube_icon.png" alt=""></a>
                        <a href="#"><img src="images/mail_icon.png" alt=""></a>
                    </div>
              	</div>
                <div class="clear"></div>
        	</div>
        </div>
    </div>
    <!-- end #footer --> 
</div>
<!-- end of #container1 -->

<script type="text/javascript" src="responsive_files/admin-bar.js"></script> 
<script type="text/javascript" src="responsive_files/responsive-scripts.js"></script> 
<script type="text/javascript" src="responsive_files/responsive-plugins.js"></script> 
<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, '' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>

</body>
</html>