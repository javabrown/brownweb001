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
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js"></script>

        <?php include 'phps/menu.php';?>
       
</head>


 


<body class="brown-body">
   <br/><br/><br/>
  
 
    
    
     
    <div class="container well transparent9">
    
        <div class="navbar">
          <div class="navbar-inner transparent9">
             <a class="brand" href="#"><i class="icon-book"></i></a>
             <!-- template dropdown begin -->


             <div class="brand btn-group">
               <?php  
                 $xml=simplexml_load_file("admin/admin-php/templates-definitation.xml");
               
                 echo
                     "<a class='btn dropdown-toggle' data-toggle='dropdown' href='#'>".
                     "<span id='template-dropdown-selected-id'>".$xml->template[0]->references[0]->reference[0]->name."</span>".
                     "<span class='caret'></span></a>";
                ?>
               
                <ul class="dropdown-menu" id="template-dropdown">
                
                 <?php   
                   $i = 1;
                   $default_ct = $xml->template[0]->references[0]->reference[0]->name; //populate content menu if no ct selected
                   
                   foreach($xml->template[0]->references[0]->reference as $child){
                     $contentType = $child->name;
                     $embedref = $child->embedref;
                     $li_id = "li_".$i;
                    
                     echo "<li class='brownclass-0 text2' id='".$li_id."'><a class='a0 ' href='blog-new.php?ct=". $contentType ."' >".$contentType."</a></li>";  
                     $i++;
                   }
                ?>
                </ul>
                <script>$('.dropdown-toggle').dropdown();/*alert('hello');*/</script>
             </div>
             
             <!-- template dropdown end -->
             
             <ul class="nav" id="templateTypes"  style="padding-top:8px;"> 
             
             <?php
               $selected_content_type = $_GET['ct'];
               $selected_templete = $_GET['templete'];
               
               if(is_null($selected_content_type)){
                 $selected_content_type = $default_ct;
               }
               
               $selected_embeded_ref = '';
               $default_embeded_ref = $xml->template[0]->references[0]->reference[0]->embedref;
               
               foreach($xml->template[0]->references[0]->reference as $child){
                    $contentType = $child->name;
                    $embededRef = $child->embedref; 
                    
                    if($contentType == $selected_content_type){
                      $selected_embeded_ref = $embededRef;
                      break;
                    }
                    $i++;
               }
                   
               
               $xml_nested_content = NULL;
               
               if(is_null($selected_embeded_ref)){
                 $selected_embeded_ref = $default_embeded_ref;
               }
               
              
               if(!is_null($selected_embeded_ref)){
                 $template_xml = simplexml_load_file("admin/admin-php/".$selected_embeded_ref);
                 
                 $default_templete = $template_xml->contents[0]->attributes()->type;
                 
                 if(is_null($selected_templete)){
                    $selected_templete = $default_templete;
                 }
                 
                 foreach($template_xml->contents as $child0){
                    $type = $child0->attributes()->type;
                    
                    $active = '';
                      
                    if($selected_templete == $type){
                      $active = 'active';
                      $xml_nested_content = $child0;
                    }
                    
                	echo "<li class='brownclass-0 ".$active."'><a href='blog-new.php?ct=".$selected_content_type."&templete=". $type ."'>".$type."</a></li>";
                 }
               }
               
               //echo "done";
                
             ?>
             </ul>
             
          </div>
       </div>
       
 
    </div>
    

    <!-- ******************* CONTACT US FORM BEGIN ********************** -->
    <div class="container shadow5 well ">
            <div class="span2 well">
                <ul class='ul0' id='contentNames' style="width:auto;list-style-type: none;padding: 2px;margin: 0px;">
                    <?php
                       if(!is_null($xml_nested_content)){
                         foreach($xml_nested_content->content as $contenttypes){
                           $template_content_name = $contenttypes->name;
                           $template_content_display_name = $contenttypes->display_name;
                           $template_content_embedref = $contenttypes->embedref;
                           if(!is_null($template_content_display_name)){
                             $template_content_display_name = $template_content_name;
                           }
                           
                           echo "<li class='tutorial-li auto-focus'><a class='btn' href='blog-new.php?ct=".$selected_content_type."&templete=". $selected_templete ."&t_c_name=".$template_content_name ."' >".$template_content_display_name."</a></li>"; 
                         }
                       }
                    ?>  
                </ul>
            </div>
          
            <div class="span8 well">
                <div class='ul0 auto-focus prettyprint' id='left'>
                   <?php
                     $t_c_name = $_GET['t_c_name'];
                     
                     if(!is_null($xml_nested_content)){
                        $template_content_embedref =  $xml_nested_content->content[0]->embedref;
                        
                        foreach($xml_nested_content->content as $contenttypes){
                           if($contenttypes->name == $t_c_name){
                             $template_content_embedref = $contenttypes->embedref;
                           }
                        }
                     }    
                     
                     if(is_null($template_content_embedref)){
                        $template_content_embedref = $template_content_embedref;
                     }
                     
                     $homepage = file_get_contents("admin/admin-php/".$template_content_embedref);
                     echo $homepage;
                      
                   ?>
                </div>
                
                <hr/>
                <div class="well" id="comment-area">
                
                     <?php 
                       $current_url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //echo $current_url; 
                   	   echo "<div class='fb-like' data-href='".$current_url."' data-send='true' data-width='450' data-show-faces='true'></div>";
                   	   echo "<div class='fb-comments' data-href='".$current_url."' data-width='730' data-num-posts='10'></div>";
                    ?>
                    
                    
                    <script>
                     // alert(location);
                    </script>
                </div>
            </div>
            
            
            </div>
    </div>
    <!-- ******************* CONTACT US FORM END ********************** -->
    
     
 
  

</body>
 
 <script>
      !function ($) {
          loadLogoSection($("#header"));
	      loadMenu('004', '', 'pages/cms-home-page.php');          
       }(window.jQuery); 
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