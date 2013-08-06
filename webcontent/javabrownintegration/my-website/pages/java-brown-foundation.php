<!DOCTYPE html>
<html lang="en">
	<?php include 'phps/header.php';?>
	
	<head>
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
		
		<?php include 'phps/menu.php';?>
		<script type='text/javascript' src='js/jbrown-utilities.js'></script>
		<script type='text/javascript' src='js/rkbeautify.js'></script>
		
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
	   	  background-image: url(images/tools.png);
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
 
                    
				  <frame src="https://www.facebook.com/JavaBrownFoundation"></frame> 
				s
                
			</div>
			
            <?php showFbLike();?>     
		</div>

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
		loadMenu('001', '', 'pages/cms-home-page.php');
	</script>
	
    <?php include 'phps/footer.php';?>
</html>