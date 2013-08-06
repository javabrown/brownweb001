<!DOCTYPE html>
<!-- [if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!-- [if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!-- [if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!-- [if gt IE 8]><!--> 
<html class="no-js">
	<!-- <![endif] -->
 
		
	<head>
         <title>Java Brown Foundation - Open source service provider</title>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="javabrown.com: An open source software service provider" />
      <meta name="keywords" content="Java, iOS, Open Source, Software Development, WebServices, JavaBrown, Unix, C++, TSR, Webservices, API, JSON API, SOAP API, xIN API"/>
      <meta name="author" content="Raja Khan"/>
      <meta http-equiv="refresh" content="1200"/>

	  <?php include 'phps/header.php';?>
 
 
      
     

		 
		 
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<style>
			body {
			padding-top: 40px;
			padding-bottom: 10px;
			}
		</style>
		<?php include 'phps/menu.php';?>
		
	</head>
	
	<body class="brown-body">
	 
		<!-- Menu section ended here -->
		 
		<!-- MENU SECTION STARTS HERE -->
		 
		
		<!-- container -begin- -->
		<div class="container-fluid page-container transparent9" style="padding-top:50px;">
		    <!-- row-1 begin -->
			<div class="row-fluid transparent10">
					<?php include 'index-subpages/index-sub-page_slider.php'?>
			</div>
			<!-- row-1 end -->
			
			
			<!-- row-2 begin -->
			 <div class="row-fluid ">
			      <div class="big_caption text2 auto-foucs brown-hover1 well span12 transparent7"><strong>JavaBrown</strong> "an open source service provider"</div>
			 </div>     
			<!-- row-2 end -->
			
			
			<!-- row-3 begin -->
			<div class="row-fluid" >
				<!-- side-bar content end -->
				<div class="span9 well" id="service-main-contant">
					<div class="container-fluid" id="wht-we-do">
					  <?php include 'index-subpages/what-we-do.php'?>
					</div>
					 
				</div>
				
				<!-- side-bar content begin -->
				<div class="span3 well">
					  <?php include 'index-subpages/side-bar-subscriber.php'?>
				</div>
				
			</div>
			<!-- row-3 end -->
			
			
			<!-- row-4 begin -->
			<div class="row-fluid">
				<!-- side-bar content end -->
				<!-- <div class="span9 well" id="service-main-contant">
					<div class="container-fluid" id="wht-we-do">
					  <?php include 'index-subpages/our-recent-project.php'?>
					</div>
				</div> -->
				
				<!-- side-bar content begin -->
				<!-- <div class="span3 well">
				   <label id="rss" class="btn1 btn-large1">rss feed</label>
				   <hr/>
				   
				</div> -->
				
			</div>
			<!-- row-4 end -->			
			
			<?php showFbLike();?>
		</div>
		<!-- container -end- -->
 
	</body>
	 
	<script>
		!function ($) {
		    loadLogoSection($("#header"));
		    loadMenu('001', '', 'pages/cms-home-page.php');
		    // carousel demo
		    $('#myCarousel').carousel();
		    $('.dropdown-toggle').dropdown();
		
		}(window.jQuery);
		
		$(document).ready(function() {
 	        $("#rss").load("phps/rssfeed.php"); // Grab the data on page-load
 	        
	      //  var auto_refresh = setInterval(function(){
		  //        $('#rss').fadeOut('slow').load('phps/rssfeed.php').fadeIn("slow");
	      //  }, 4000); // Adjust this to the time interval you'd like between refreshes in milliseconds
        });
      
	</script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42211582-1', 'http://www.javabrown.com');
  ga('send', 'pageview');

</script>
	
    
	<?php include 'phps/footer.php';?>
</html>