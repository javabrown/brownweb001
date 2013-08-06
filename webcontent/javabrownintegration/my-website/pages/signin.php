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

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        
         
       
</head>


 


<body>
         
        <div class="navbar navbar-fixed-top shadow2">
           
            <div class="navbar-inner auto-focus">
            
               <table class="">
                 <th class="img-circle">
                    <p class="shadow1 auto-focus">
                     <span style="padding-left:10px;"/><img src="http://i302.photobucket.com/albums/nn90/Kmallon89/Coffee.png" width="100" height="100" class=""/>
                    </p>
                 </th> 
                  
                 <th style="padding-left:10px;">
                   <div id="navigation" class="text2 shadow11 auto-focus"></div>
                   <!--p class="shadow11 auto-focus" style="padding-top:10px;padding-buttom:10px;"></ -->
                 </th>
                 
                 <th style="padding-left:10px;">
                      <div class="btn-group btn-group-vertical">
                        <button class="btn" type="button"><i class="icon-user"></i></button>
                        <button class="btn" type="button"><i class="icon-search icon-white"></i></button>
                      </div>
                      
                      <div class="btn-group">
			<a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
			<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			<ul class="dropdown-menu">
			    <li><a href="#"><i class="icon-pencil"></i>Edit</a></li>
			    <li><a href="#"><i class="icon-user"></i>Delete</a></li>
			    <li><a href="#"><i class="icon-ban-circle"></i>Ban</a></li>
			    <li class="divider"></li>
			    <li><a href="#"><i class="i"></i>Make Admin</a></li>
			</ul>
		      </div>
                  </th> 
                </table> 
            </div>
            
            
        </div>

		<!-- Menu section ended here -->


	 
		
		
        
        <br/> <br/> <br/><br/>
        
        
  
        <div class="recent_work_label_bottom"><a>SignIn</a></div>
        
 

        <div class="container-fluid shadow1011">
 
        </div>
     
        <div class="container container-fluid shadow">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" placeholder="Email address" class="input-block-level">
        <input type="password" placeholder="Password" class="input-block-level">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button type="submit" class="btn btn-large btn-primary">Sign in</button>
      </form>

    </div>
        
       
    
</body>

 

 
    <script>
      !function ($) {
          loadLogoSection($("#header"));
	      loadMenu('001', '', 'pages/cms-home-page.php');
          // carousel demo
          $('#myCarousel').carousel();
      
      }(window.jQuery);
      
      
    </script>
    
</html>