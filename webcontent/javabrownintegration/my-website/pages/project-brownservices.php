<!DOCTYPE html>
<!-- [if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!-- [if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!-- [if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!-- [if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->

<?php include 'phps/header.php';?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Java Brown Foundation - JBrownServices API</title>
     
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="javabrown.com: An open source software service provider" />
        <meta name="keywords" content="Restfull webserices, JBrown API, Open Auth API, Geography API, Image API, Utility API"/>
        <meta name="author" content="Raja Khan"/>
        <meta http-equiv="refresh" content="1200"/>
		 


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
           
           
           .div-bg1{
	   	     background-image: url(http://www.west.gr/v12/images/west/stories/web-services.png);
	   	    background-size:100px 50px;
             background-repeat:no-repeat;
             background-position:right; 
		  
		  }
  
        </style>
        
        <link rel="stylesheet" href="css/prettify.css"/>
        <link rel="stylesheet" href="css/docs.css"/>
                
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="js/prettify.js"></script>
        
        <?php include 'phps/menu.php';?>
       
</head>


 


<body>
   <br/><br/><br/><br/>
   <div class="container-fluid ">
      <div class="hero-unit auto-focus" style="background-color:#f3f3f3">
          <h1 class="">JavaBrown, API!</h1>
          <p>The JavaBrown API provides programmatic access to JavaBrown's application and discovery functionality so that developers like you can advertise JavaBrown's products and services to monetize your website.  The JavaBrown API helps you to explore variety of SOA platform like Media, Geo, Mathematics etc.</p>
          <p class=""><a href="#" class="btn btn-primary btn-large div-bg1">Learn more &raquo;</a></p>
      </div>   
            
      <div class="row-fluid ">
         <div class="span3" >
            <!--Sidebar content-->
            <div class="hero-unit well">
              
            
        
		  <h4><u>jBrown Authentication</u></h4>
		  <ul class="nav nav-list nav-tabs nav-stacked">
				<li style='margin:5px;'><a class='btn' href='#service-1'>Register</a></li>
				<li style='margin:5px;'><a class='btn' href='#service-2'>Authenticate</a></li>
		  </ul>
		  
		  <h4><u>jBrown Geography</u></h4>
		  <ul class="nav nav-list nav-tabs nav-stacked">
				<li style='margin:5px;'><a class='btn' href='#service-3'>Country Services</a></li>
				<li style='margin:5px;'><a class='btn' href='#service-4'>State Services</a></li>
				<li style='margin:5px;'><a class='btn' href='#service-5'>City Services</a></li>
		  </ul>				          
      
     
      
      
            </div>
         </div>
         
         <div class="span9">
            <!--Body content-->
            <!-- **************** Documentation -Begin- **************** -->
            <!-- oAuth -->
            <section id="service-1">
              <div class="hero-unit auto-focus" prettyprint linenums> 
                 <p><h4><u>Register</u></h4></p>
                  <p>Register a service user to authenticate and utilize the web services platform.</p>
                  <p>Request Type -: POST</p>
                  <p>Format -: JSON</p>
                  <p>EndPoint -: http://javabrownservices.appspot.com/jbrownservices/api/ws/v1/user/register</p>
                  <br/>
                  <p>Sample Request -:</p>
                  <pre class="prettyprint linenums">
                  
                             {
                                "first_name" : "RAJA",
                                "last_name" : "KHAN",
                                "email" : "getrk@yahoo",
                                "password" : "abcabc"
                             }
				  </pre>
              </div>
            </section>
             
            <section id="service-2">
              <div class="hero-unit">
                 <p><h4><u>Authenticate</u></h4></p>
                  <p>Authenticate a registered user javabrown platform</p>
                  <p>Request Type -: POST</p>
                  <p>Format -: JSON</p>
                  <p>EndPoint -: http://javabrownservices.appspot.com/jbrownservices/api/ws/v1/user/auth</p>
                  <br/>
                  <p>Sample Request -:</p>
                 <pre class="prettyprint linenums">
                  
                             {
                                "token":"aFh0ZByWBlVO2NhMyQlxBBtXN8L+icvZ"
                             }
				 </pre>
              </div>         
           </section>
           
           <!-- GEO -->
           <section id="service-3">
              <div class="hero-unit">
                 <p><h4><u>Geography</u></h4></p>
                  <p>Get all country information</p>
                  <p>Request Type -: POST</p>
                  <p>Format -: GET</p>
                  <p>EndPoint -: http://javabrownservices.appspot.com/ws/countryinfo/{country-code}</p>
                  <br/>
                  <p>Sample Request -:</p>
                 <pre class="prettyprint linenums">
                  
                            http://javabrownservices.appspot.com/ws/countryinfo/us/
				 </pre>
              </div>         
           </section>     
          
           <section id="service-4">
              <div class="hero-unit">
                 <p><h4><u>Geography</u></h4></p>
                  <p>Get all state information in a country</p>
                  <p>Request Type -: POST</p>
                  <p>Format -: GET</p>
                  <p>EndPoint -: http://javabrownservices.appspot.com/ws/countryinfo/{country-code}/{state-code}</p>
                  <br/>
                  <p>Sample Request -:</p>
                 <pre class="prettyprint linenums">
                  
                            http://javabrownservices.appspot.com/ws/countryinfo/us/new york/
				 </pre>
              </div>         
           </section>   
           
           <section id="service-5">
              <div class="hero-unit">
                 <p><h4><u>Geography</u></h4></p>
                  <p>Get cities information in a state for a country</p>
                  <p>Request Type -: GET</p>
                  <p>Format -: JSON</p>
                  <p>EndPoint -: http://javabrownservices.appspot.com/ws/countryinfo/{country-code}/{state-name}/{city-name}</p>
                  <br/>
                  <p>Sample Request -:</p>
                 <pre class="prettyprint linenums">
                  
                            http://javabrownservices.appspot.com/ws/countryinfo/us/new york/white plains/
				 </pre>
              </div>         
           </section>                             
           <!-- **************** Documentation -END- **************** -->
         </div>
         
      </div>
   </div>

</body>
 
 <script>
      !function ($) {
          loadLogoSection($("#header"));
	      loadMenu('002', '', 'pages/cms-home-page.php');
          // carousel demo
          $('#myCarousel').carousel();
          //$('.dropdown-toggle').dropdown();
          
          $('#navbar').scrollspy();
          $('[data-spy="scroll"]').each(function () {
           var $spy = $(this).scrollspy('refresh')
          });
      }(window.jQuery);
      
      
    </script>
    <?php include 'phps/footer.php';?>
</html>