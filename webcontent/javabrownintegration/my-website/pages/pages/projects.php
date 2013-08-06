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
	<body>
		<!-- MENU SECTION STARTS HERE -->
		<br/><br/><br/><br/>
		<div class="container-fluid page-container">
			<div class="row-fluid">
			
			    <!-- side-bar content begin -->
				<div class="span3 well">
				
					<h4><u>Ciphers Encryption</u></h4>
					
					<ul class="nav nav-tabs nav-stacked">
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=aes-cipher'>Cipher AES</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=des-cipher'>Cipher DES</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=rabbit-cipher'>Rabbit DES</a></li>
					</ul>
					                    
					<h4><u>Hashers</u></h4>
					
					<ul class="nav nav-tabs nav-stacked">
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=md-5-cryptography'>MD-5 Cryptography</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=sha-1-cryptography'>SHA-1 Cryptography</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=sha-2-cryptography'>SHA-2 Cryptography</a></li>						
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=encoder_decoder'>Encoder/Decoder</a></li>
					</ul>	
					
					<hr/>

				    <h4><u>Converters</u></h4>
				    <ul class="nav nav-tabs nav-stacked">
                        <li style='margin:5px;'><a class='btn' href='services.php?ipage=xml-formatter'>XSLT(XSL Transformer)</a></li>				
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=json-formatter'>XML to JSON Converter</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=json-formatter'>JSON to XML Converter</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=sql-formatter'>Text to Audio Converter</a></li>	
                    </ul>
                    							
					<h4><u>Formatters</u></h4>
				    <ul class="nav nav-tabs nav-stacked">
                        <li style='margin:5px;'><a class='btn' href='services.php?ipage=xml-formatter'>XML Formatter</a></li>				
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=json-formatter'>JSON Formatter</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=css-formatter'>CSS Formatter</a></li>
						<li style='margin:5px;'><a class='btn' href='services.php?ipage=sql-formatter'>SQL Formatter</a></li>	
                    </ul>
               
					
				</div>
				<!-- side-bar content end -->
				
				
				<!-- main content begin -->
				
				<div class="span9 well" id="service-main-contant">
				    
					<p id="service-title"></p> <!-- Dynamiclly filled by services -->
					
					<!-- Invidivual service content begin -->
                    <div id="individual-service-content" class="span12">
						<div class="span11 well div-bg">
						  
					      <h2 class="div-bg1">Free Online Tools For Developers</h2>
						  <hr/>
						  <p class="lead text-info well">We created this service page to help developers by providing them with free online tools. These tools include several formatters, validators, code minifiers, string escapers, encoders and decoders, message digesters, web resources and more.</p>
						  <br/>
						  <center>
						     <img src="http://www.techwench.com/wp-content/uploads/2011/10/Online-Business-Tools.jpg" class="img-polaroid"/>
						  </center>   
						  <br/>
						  <p class="lead text-info well">I will add new tools on a regular basis, so be sure to add this site to your bookmarks.</p>
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
						   if(ipage == 'json-formatter'){
                             $("#service-title").append("<h3>Format your JSON data!!</h3>");
                             $("#individual-service-content").load("service-definations/json-formatter.html");
                           }
                           
						   if(ipage == 'xml-formatter'){
                              $("#service-title").html("<h3>Format your XML data!!</h3>");
                              $("#individual-service-content").load("service-definations/xml-formatter.html");
                           } 
                               
                           if(ipage == 'css-formatter'){
                             $("#service-title").html("<h3>Format your CSS data!!</h3>");
                             $("#individual-service-content").load("service-definations/css-formatter.html");
                           } 
                           
                           if(ipage == 'sql-formatter'){
                             $("#service-title").html("<h3>Format your SQL data!!</h3>");
                             $("#individual-service-content").load("service-definations/sql-formatter.html");
                           } 
                           
                           if(ipage == 'md-5-cryptography' ){
                               $("#service-title").html("<h4>Perform MD5 cryptography!!</h4>");
						  	   $("#individual-service-content").load("service-definations/md5-cryptography.html");
						   }	
						   
						   if(ipage == 'sha-1-cryptography' ){
						       $("#service-title").html("<h4>Perform SHA-1 cryptography!!</h4>");
						  	   $("#individual-service-content").load("service-definations/sha-1-cryptography.html");
						   }
						   if(ipage == 'sha-2-cryptography' ){
						       $("#service-title").html("<h4>Perform SHA-2 cryptography!!</h4>");
						  	   $("#individual-service-content").load("service-definations/sha-2-cryptography.html");
						   }
						   if(ipage == 'aes-cipher' ){
						       $("#service-title").html("<h4>Perform AES Ciper Encryption!!</h4>");
						  	   $("#individual-service-content").load("service-definations/aes-cipher-encryption.html");
						   }
						   if(ipage == 'des-cipher' ){
						       $("#service-title").html("<h4>Perform DES Ciper Encryption!!</h4>");
						  	   $("#individual-service-content").load("service-definations/des-cipher-encryption.html");
						   }	
						   if(ipage == 'rabbit-cipher' ){
						       $("#service-title").html("<h4>Perform Rabbit Ciper Encryption!!</h4>");
						  	   $("#individual-service-content").load("service-definations/rabbit-cipher-encryption.html");
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
		loadMenu('003', '', 'pages/cms-home-page.php');
	</script>
     <?php include 'phps/footer.php';?>
</html>