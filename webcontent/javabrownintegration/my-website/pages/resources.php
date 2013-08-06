<!DOCTYPE html>
<html lang="en">
	
	
	<head>
	    <?php include 'phps/header.php';?>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
			padding-top: 60px;
			padding-bottom: 40px;
			}
			.sidebar-nav-fixed {
			padding: 9px 0;
			position:fixed;
			left:20px;
			top:260px;
			width:200px;
			}
			.row-fluid > .span-fixed-sidebar {
			margin-left: 290px;
			}
		</style>
		<link rel="stylesheet" href="css/prettify.css"/>
		<link rel="stylesheet" href="css/docs.css"/>
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/main.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<title>Java Brown Foundation - Projects</title>
     
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="javabrown.com: Repository of JavaBrown Projects - jBrownServices|jBrownCapsule|iPage|Andriod" />
        <meta name="keywords" content="Projects, Repository, jBrownServices, jBrownCapsule, iBarricade, iPage, SpringUI, GIT"/>
        <meta name="author" content="Raja Khan"/>
        <meta http-equiv="refresh" content="1200"/>
        
		<?php include 'phps/menu.php';?>
		<script type='text/javascript' src='js/jbrown-utilities.js'></script>
		<script type='text/javascript' src='js/rkbeautify.js'></script>
		<!-- script type="text/javascript" src="js/repo.min.js"></script -->
		<script type="text/javascript" src="js/repo.js"></script>
		
	</head>
	<style>
		@import url(http://jsfiddle.net/css/result-light.css);
		@import url(http://jsfiddle.net/css/normalize.css);
		@import url(http://twitter.github.com/bootstrap/assets/css/bootstrap.css);
		.box{
		margin: 20px; padding: 15px;
		margin-top:50px;
		//background: #eee;
		//border:1px solid brown;
		height: auto;
		}
		.page-container{
		padding-top:50px;
		}
		.navbar .nav, .navbar .nav > li {
		float:none;
		display:inline-block;
		*display:inline; /* ie7 fix */
		*zoom:1; /* hasLayout ie7 trigger */
		vertical-align: top;
		}
		.navbar-inner {
		text-align:center;
		}
		.div-top-padding{
		padding-top:40px;
		padding-left:20px;
		padding-right:20px;
		}
		
		.page-output{
		  padding-left:20px;
		  background:white;
		  height:auto;
		}
		
		.div-bg1{
	   	  background-image: url(images/resources.png);
	   	  background-size:100px 50px;
          background-repeat:no-repeat;
          background-position:right; 
		  
		}
	</style>
	<body class="brown-body">
		<!-- MENU SECTION STARTS HERE -->
		<br/><br/><br/><br/>
		<div class="container-fluid page-container">
			<div class="row-fluid">
			
			    <!-- side-bar content begin -->
				<div class="span3 well">
				
					<center><h4><u>Open Source Projects</u></h4></center>
					
					<ul class="nav nav-tabs nav-stacked">
					    <center><img src="images/jb-icons.png" class="img-polaroid border-radius" width="200px" height="200px;"/></center>
					    <br/>
						<li style='margin:5px;'><a class='btn' href='resources.php?ipage=jbrownservices'>JBrown Services</a></li>
						<li style='margin:5px;'><a class='btn' href='resources.php?ipage=brown-capsules'>Brown-Capsule</a></li>
						<li style='margin:5px;'><a class='btn' href='resources.php?ipage=brown-capsules'>iPages</a></li>
						 
						
						
						
					</ul>
				</div>
				<!-- side-bar content end -->
				
				
				<!-- main content begin -->
				
				<div class="span9 well" id="service-main-contant">
				    
					<p id="service-title"></p> <!-- Dynamiclly filled by services -->
					
					<!-- Invidivual service content begin -->
                    <div id="individual-service-content" class="span12">
						<div class="span11 well ">
						  
					      <h2 class="div-bg1">JavaBrown Repository and Support</h2>
						  <hr/>
						  <p class="lead text-info well">All repositories of <strong>JavaBrown Services</strong> are live here and has open access to everybody. Within this context, you'll see events pertinent to our projects as well as the status of enhancement and support provided to each and every project.</p>
						  <br/>
						  <center>
						     <img class="transparent1" src="images/book.png" class="img-polaroid"/>
						  </center>   
						  <br/>
						  <p class="lead text-info well">Incase you noticed any issue in any of the our services or need some enhancement or support, please feel free to log post a message to the repository.</p>
						  <br/>
						  
						  <hr/>
						   
                          </p>
                          <br/>
						</div>
                    </div>                    
                    <!-- Invidivual service content END -->
                    <?php showFbLike();?>
				</div>
				<!-- main content end -->
				
                
			</div>
			
                    
		</div>
		
		<script>
						var ipage = getURLParameter('ipage');
			   			 
			   			
						$(document).ready(function () {
						   if(ipage == 'jbrownservices'){
                             $("#service-title").append("<h3>Open Source Repository!!</h3>");
                             $("#individual-service-content").load("resource-definations/jbrownservices.php");
                           }
                           
						   if(ipage == 'brown-capsules'){
                              $("#service-title").append("<h3>Open Source Repository!!</h3>");
                              $("#individual-service-content").load("resource-definations/brown-capsules.php");
                           }
                        });
			           
			
			            function getURLParameter(name) {
			                            return decodeURI(
			                                            (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
			                            );
			            }
			            		
		</script>
		

	</body>
	<footer>
		<div style="display:none">
			<div id="html-formatter">
				postBody
			</div>
		</div>
	</footer>
	<script>
		loadLogoSection($("#header"));
		loadMenu('005', '', 'pages/cms-home-page.php');
	</script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42211582-1', 'javabrown.com');
  ga('send', 'pageview');

</script>
	
    <?php include 'phps/footer.php';?>
</html>