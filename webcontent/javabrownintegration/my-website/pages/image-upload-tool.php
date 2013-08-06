<!DOCTYPE html>
<html lang="en">
   <?php include 'phps/header.php';?>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/repo.min.js"></script>
   
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
      .youtube{
        padding-left:10px;
      }
      .youtube1{
        padding-left:20px;
      }
      .youtube2{
        padding:5px;
        padding-top:5px;
      }      
   </style>
   <body class="brown-body">
      <!-- MENU SECTION STARTS HERE -->
      <br/><br/><br/><br/>
      <div class="container-fluid page-container">
         <div class="row-fluid"> <!-- Row-1 start -->
         
            <!-- side-bar content begin -->
            <div class="span6 ">
               <div class="shadow5 auto-focus youtube transparent9">
                  <div class=""><h4><u>Dennis Ritchie: Invention of C</u></h4></div>
                  <iframe width="540" height="360" 
                     src="http://www.youtube.com/embed/umF6SNYaJNw?rel=0" frameborder="0" allowfullscreen></iframe>
               </div>
            </div>
            <!-- side-bar content end -->
            
            <!-- main content begin -->
            <div class="span6 well" id="service-main-contant">
               <div id="main-content" class="span12">
                  <div id="request-div" class="shadow5 auto-focus youtube">
                     <h4><u>Bjarne Stroustrup: Why I Created C++</u></h4>
                     <iframe width="540" height="360"
                        src="http://www.youtube.com/embed/JBjjnqG0BP8?rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
            <!-- main content end -->
            
         </div>  <!-- Row-1 end -->
         
         
         <div class="row-fluid "> <!-- Row-2 start-->
               <!-- ********************************Galary BEGIN***************************************** -->
            
                  <!-- Slider -->
                   
                     <div class="span8 well" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                           <div class="span12 youtube1" id="carousel-bounding-box">
                              <div id="myCarousel" class="carousel slide shadow5">
                                 <!-- Carousel items -->
                                 <div class="carousel-inner">
                                    <div class="active item youtube2" data-slide-number="0">
                                      <iframe width="765" height="400" src="http://www.youtube.com/embed/JBjjnqG0BP8?rel=0" frameborder="0"></iframe>
                                    </div>
                                    <div class="item" data-slide-number="1">
                                      <iframe width="765" height="400" src="http://www.youtube.com/embed/umF6SNYaJNw?rel=0" frameborder="0"></iframe>
                                    </div>
                                    <div class="item" data-slide-number="1">
                                      <iframe width="765" height="400" src="http://www.youtube.com/embed/UF8uR6Z6KLc?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    
                                    <div class="item" data-slide-number="3">
                                       <iframe width="765" height="400" src="http://www.youtube.com/embed/m2c-Tji4h-k?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    
                                    <div class="item" data-slide-number="4"><img src="http://placehold.it/770x300&text=five" /></div>
                                    <div class="item" data-slide-number="5"><img src="http://placehold.it/770x300&text=six" /></div>
                                 </div>
                                 <!-- Carousel nav -->
                                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                 <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                              </div>
                           </div>
                           
                            <div id="git">xxxx
                              <script>
                                 
                                  alert('done');
                                  $('#git').repo({ user: 'h5bp', name: 'html5-boilerplate' });
                              </script>
                            </div>
                        </div>
                     </div>
                
               <!-- ********************************Galary END******************************************* -->
               
               <div class="span4 well">
               </div>
         </div> <!-- Row-2 end -->
         
      </div>
   </body>
   
   <script>
      $(document).ready(function() {
                     $('#myCarousel').carousel({
                         interval: 10000
                     })
      });
            
      loadLogoSection($("#header"));
      loadMenu('005', '', 'pages/cms-home-page.php');
   </script>
   
   <?php BrownUtil::getSiteThemeImage('5'); ?>
   <?php include 'phps/footer.php';?>
</html>