<?php
 $param1 = $_GET['a'];
 $param2 = $_GET['b'];
 
 $replace_char = array(" ");
 

 if(isset($param1)){
   $param1 = trim($param1);
 }
 
 if(isset($param2)){
   $param2 = trim($param2);
 }
 
 if(!isset($param1) && !isset($param2)){
   $param1 = "JAVA";
   $param2 = "C++";
 }
 
 $q_val = trim($param1);
 
 if(isset($param2)){
   $q_val=$q_val.',+'.$param2;
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

	<head>
	  <?php include 'phps/header.php';?>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Java Brown Foundation - Open source service provider</title>
     
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="javabrown.com: An open source software service provider" />
      <meta name="keywords" content="Java, iOS, Open Source, Software Development, WebServices, JavaBrown, Unix, C++, TSR, Webservices, API, JSON API, SOAP API, xIN API"/>
      <meta name="author" content="Raja Khan"/>
      <meta http-equiv="refresh" content="1200"/>
		 
		<script src="js/vendor/bootstrap/bootstrap-tooltip.js"></script>
		<script src="js/vendor/bootstrap/bootstrap-popover.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
			padding-top: 40px;
			padding-bottom: 10px;
			}
		</style>
		<?php include 'phps/menu.php';?>
		
	</head>
	
   <body class="brown-body">
   		 
        <div class="container-fluid page-container" style="padding-top:80px;">
        	
            <div class="row-fluid">
                <div class="span3 well" >
                    <img src="images/trends-logo.png"/>
                    <br/><hr/>
                    <form id="search-form" action="trends.php" type="GET" class="form-horizontal" style="padding:0px;" index="2">
                        <input type='text' name="a" class='pad text2' placeholder='Enter Search Keyword' width='auto' value="<?php echo $param1?>" required>
                        
                        <center><img src="images/vs.png" width="30%"/></center>
                        <br/>
                        <input type='text' name="b" class='pad text2' placeholder='Enter Search Keyword' width='auto' value="<?php echo $param2?>" required>
                        <hr/>
                        <button type="submit" class="btn">Submit</button>
                        
                    </form>
                     
                </div>
                <div class="span9 well" >

                    <div id="main-content" class="span12">
                    	 <!-- div class="well">
							<a href="#" id="example" class="icon-question-sign" rel="popover" data-content="The numbers on the graph reflect how many searches have been done for a particular term, relative to the total number of searches done on Google over time. They don't represent absolute search volume numbers, because the data is normalized and presented on a scale from 0-100. Each point on the graph is divided by the highest point, or 100. When we don't have enough data, 0 is shown." data-original-title="jBrown Trends"></a>
						</div -->
					
                        <div class="row1 well">
                            <script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q= <?php echo $q_val ?> &cmpt=q&content=1&cid=TIMESERIES_GRAPH_0&export=5&w=700&h=350"></script>
                        	<a href="#" id="example" class="icon-question-sign" rel="popover" data-content="The numbers on the graph reflect how many searches have been done for a particular term, relative to the total number of searches done on Google over time. Each point on the graph is divided by the highest point, or 100. When we don't have enough data, 0 is shown." data-original-title="About jBrown Trends"></a>
							<?php echo "<div class='fb-like' data-href='".$current_url."' data-send='true' data-width='450' data-show-faces='true'></div>"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="row2 well span6">
                        <script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q=<?php echo $param1?>&cmpt=q&content=1&cid=GEO_MAP_0_0&export=5&w=500&h=500"></script>
                    </div>
                    <div class="row3 well span6">
                        <script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q=<?php echo $param2?>&cmpt=q&content=1&cid=GEO_MAP_0_0&export=5&w=500&h=500"></script>
                    </div>           
                </div>
            </div>
        </div>
        <script>
            var ipage = getURLParameter('ipage');
            
                       
            
            function getURLParameter(name) {
            
                                        return decodeURI(
            
                                                        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
            
                                        );
            
                        }
            
                       
            
                        function process(){
            
                           //$('#main-content').html("<center><img src='http://www.nasa.gov/multimedia/videogallery/ajax-loader.gif'/></center>"); //add busy
            
                           var ipage = getURLParameter('ipage');
            
                           if(ipage == 'category-editor'){
            
                             $('#main-content').load('index-sub-page_category-editor.php');
            
                           }
            
                           if(ipage == 'type-editor'){
            
                             $('#main-content').load('index-sub-page_type-editor.php');
            
                           }
            
                           if(ipage == 'content-editor'){
            
                             $('#main-content').load('index-sub-page_content-editor.php');
            
                           }
            
                          
            
                           $('.btn').removeClass('btn-info'); //select selection
            
                           $('#'+ipage).addClass('btn-info');
            
                        }
            
                       
            
                        function bindevent(){
            
                                        $('.add').bind('click', function() {
            
                                                        $('#search-form').append("<input type='text' class='pad' placeholder='Enter Search Keyword' width='auto'><i class='icon-minus-sign delete'></i></input>");
            
                                                        bindevent();
            
                                        });
            
                                       
            
                                        $('.delete').bind('click', function() {
            
                                                        //$('#search-form').remove($(this).parent().attr('name'));
            
                                                        alert($(this).parent().html());
            
                                        });
            
                                        //alert('done');
            
                        }
            
                       
            
            $(document).ready(function() {
            
            			   process();
                           bindevent();
                           loadLogoSection($("#header"));
		                   loadMenu('003', '', 'pages/cms-home-page.php');
            			   $("#example").popover();
            			   
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
	
    </body>
</html>