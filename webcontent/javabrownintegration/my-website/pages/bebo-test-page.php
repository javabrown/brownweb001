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
        
        
        <link rel="stylesheet" href="css/prettify.css"/>
        <link rel="stylesheet" href="css/docs.css"/>
                
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js"></script>
        
        
       
</head>


<style type="text/css">
body{
background:#ccc;
}
#book{
width:auto;
height:800px;
}

#book .turn-page{
background-color:white;
}

#book .cover{
background:#333;
}

#book .cover h1{
color:white;
text-align:center;
font-size:50px;
line-height:500px;
margin:0px;
}

#book .loader{
background-image:url(loader.gif);
width:24px;
height:24px;
display:block;
position:absolute;
top:238px;
left:188px;
}

#book .data{
text-align:center;
font-size:40px;
color:#999;
line-height:500px;
}

#controls{
width:800px;
text-align:center;
margin:20px 0px;
font:30px arial;
}

#controls input, #controls label{
font:30px arial;
}

#book .odd{
background-image:-webkit-linear-gradient(left, #FFF 95%, #ddd 100%);
background-image:-moz-linear-gradient(left, #FFF 95%, #ddd 100%);
background-image:-o-linear-gradient(left, #FFF 95%, #ddd 100%);
background-image:-ms-linear-gradient(left, #FFF 95%, #ddd 100%);
}

#book .even{
background-image:-webkit-linear-gradient(right, #FFF 95%, #ddd 100%);
background-image:-moz-linear-gradient(right, #FFF 95%, #ddd 100%);
background-image:-o-linear-gradient(right, #FFF 95%, #ddd 100%);
background-image:-ms-linear-gradient(right, #FFF 95%, #ddd 100%);
}
</style>
 


<body>
   
<br/>
    
<div class="container shadow5 well">      
  <div class="container-fluid">
    <!-- ===================Container-1-fluid Begin===================== -->
       <div id="book">
         <div class="cover auto-focus"><h1>The Quran</h1></div>
       </div>

       <div id="controls auto-focus" >
           <label for="page-number">Page:</label>
           <input type="text" size="3" id="page-number"> of <span id="number-pages"></span>
       </div>
       
       
    <!-- ===================Container-1-fluid End===================== -->
  </div>
</div>
 
     
</body>
 
  
 <script type="text/javascript">
   // Sample using dynamic pages with turn.js
   
   var numberOfPages = 1000;
   
   
   // Adds the pages that the book will need
   function addPage(page, book) {
   // First check if the page is already in the book
   if (!book.turn('hasPage', page)) {
   // Create an element for this page
   var element = $('<div />', {'class': 'page '+((page%2==0) ? 'odd' : 'even'), 'id': 'page-'+page}).html('<i class="loader"></i>');
   // If not then add the page
   book.turn('addPage', element, page);
   // Let's assum that the data is comming from the server and the request takes 1s.
   setTimeout(function(){
   //element.html('<div class="data">Data for page '+page+'<img src=\"http://www.equranacademy.com/images/stories/para01/01.jpg\"></img></div>');
   element.html('<div class="data"><img src=\"http://www.equranacademy.com/images/stories/para01/0'+page+'.jpg\"></img></div>');

   }, 1000);
   }
   }
   
   $(window).ready(function(){
   $('#book').turn({acceleration: true,
   pages: numberOfPages,
   elevation: 50,
   gradients: !$.isTouch,
   when: {
   turning: function(e, page, view) {
   
   // Gets the range of pages that the book needs right now
   var range = $(this).turn('range', page);
   
   // Check if each page is within the book
   for (page = range[0]; page<=range[1]; page++)
   addPage(page, $(this));
   
   },
   
   turned: function(e, page) {
   $('#page-number').val(page);
   }
   }
   });
   
   $('#number-pages').html(numberOfPages);
   
   $('#page-number').keydown(function(e){
   
   if (e.keyCode==13)
   $('#book').turn('page', $('#page-number').val());
   
   });
   });
   
   $(window).bind('keydown', function(e){
   
   if (e.target && e.target.tagName.toLowerCase()!='input')
   if (e.keyCode==37)
   $('#book').turn('previous');
   else if (e.keyCode==39)
   $('#book').turn('next');
   
   });
   
</script>   
</html>