<head id='rk-head' class="init">
    <title>Java Brown Foundation - Open source service provider</title>
     
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/jbrown_css_bunch.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/box-menu.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width">
   <!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script> -->
    
     <script src="js/jquery-1.10.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/rk-util.js"></script>
    <script type="text/javascript" src="js/turnjs.js"></script>
     
 <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>   
 <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-scrollspy.js"/>
 <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
 <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-carousel.js"></script>
 <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-modal.js"></script> 
 <script src="http://twitter.github.io/bootstrap/assets/js/bootstrap-popover.js"></script>
 <script src="http://jasny.github.io/bootstrap/assets/js/bootstrap-fileupload.js"></script>
 <script type="text/javascript" src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>
 <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>     
 <link rel="icon" type="image/ico" href="images/brown-logo.png">
    <!-- <script>loadDependencies();</script> -->
    
     <!-- facebook app -id begin -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=191755937618715";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!-- facebook app -id end -->
  
  
</head>

<?php 
	 
	    function showFbLike(){
           $current_url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //echo $current_url; 
           echo "<div class='fb-like' data-href='".$current_url."' data-send='true' data-width='450' data-show-faces='true'></div>";
        }
        
        function showFbComment(){
          echo "<div class='fb-comments' data-href='".$current_url."' data-width='730' data-num-posts='10'></div>";
        }
?>