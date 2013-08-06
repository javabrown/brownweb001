<!DOCTYPE html>
<!-- [if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!-- [if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!-- [if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!-- [if gt IE 8]><!--> 
<html class="no-js">
   <!--<![endif]-->
   <?php include 'phps/header.php';?>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
         body {
         padding-top: 130px;
         padding-bottom: 40px;
         }
      </style>
      <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
      <link rel="stylesheet" href="css/main.css"/>
      <?php include 'phps/menu.php';?>
      <!-- <script src="js/cropper-script.js"></script> -->
   </head>
   
   <body>
   
      <div class="container-fluid page-container">
      
         <!-- ROW CONTAINER START -->
         <div class="row-fluid ">
            <div class="span3 well">
               <a href="#" class="thumbnail"  style="padding-right:12px;">
               <span id="profile_img_holder99">
               <img src="http://farm5.staticflickr.com/4053/4642106723_a20bdddf11_z.jpg" width="auto" height="auto" class="img-polaroid"/>
               </span>
               </a>
               <a href="#myModal"  role="button" class="icon-pencil" data-toggle="modal" data-parent="user-profile-photo"></a>
            </div>
            <div class="span9 well">
            <span id="profile_img_holder">
               <img src="http://farm5.staticflickr.com/4053/4642106723_a20bdddf11_z.jpg" width="auto" height="auto" class="img-polaroid"/>
               </span>
            </div>
         </div>
         
         <div class="row-fluid">  <!-- ROW-2 start -->
         
            <div class="span3 well">
               <!--Sidebar content-->
               <span class="badge">Formatters</span>
               <hr/>
               <a class="btn" href="index0.html?ipage=html-formatter">Format XML</a><br/><br/>
               <a class="btn" href="index0.html?ipage=html-formatter">Format HTML</a><br/><br/>
               <a class="btn" href="index0.html?ipage=html-formatter">Format JS</a><br/><br/>
               <a class="divider"></a>
               <hr/>
               <a class="btn" href="index0.html?ipage=encoder">Encoder</a><br/><br/>
               <a class="btn" href="index0.html?ipage=decoder">Decoder</a><br/><br/>
               <ul class="nav nav-tabs nav-stacked">
                  <li><a class="btn" href="index0.html?ipage=html-formatter">Format XML</a>
                  <li>
                  <li><a class="btn" href="index0.html?ipage=html-formatter">Format HTML</a>
                  <li>
                  <li><a class="btn" href="index0.html?ipage=html-formatter">Format JS</a>
                  <li>
               </ul>
            </div>
            
            <div class="span9 well" >
               <div id="main-content" class="span12">
                  <div id="request-div span12">
                     <textarea class="field span12" rows="15" placeholder="Enter a request" id="request-text-area"></textarea>
                  </div>
                  <div class="divider"></div>
                  <div id="row well form-inline span12" class="well">
                     <a class="btn" onclick="process();">Submit</a>
                  </div>
                  <hr/>
               </div>
            </div>
           
         </div> <!-- ROW-2 end -->
         
         
      </div>
      <!-- ROW CONTAINER END -->
      
      
      <script>
         var ipage = getURLParameter('ipage');
         
                     alert(ipage);
         
                     process();
         
                     alert('done');
         
                    
         
         function getURLParameter(name) {
         
                                     return decodeURI(
         
                                                     (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
         
                                     );
         
                     }
         
                    
         
                     function process(){
         
                        var request_val = $('#request-text-area').val();
         
                       
         
                        if(ipage == 'change-profile-pic'){
         
                          alert(ipage+" triggered");
         
                          $('#myModal').modal('show');
         
                                     return;
         
                        }
         
                       
         
                        if(ipage == 'encoder'){
         
                          var processed_val = encodeURI(request_val);
         
                                      
         
                                      $("#request-text-area").val(processed_val);
         
                        }
         
                       
         
                        if(ipage == 'decoder'){
         
                          var processed_val = decodeURI(request_val);
         
                                      
         
                                      $("#request-text-area").val(processed_val);                         
         
                        }
         
                       
         
                        $('.page-container').scrollTo($("#result-text-area"));
         
                     }
         
         
         
      </script>
   </body>
   
   
   <!-- Modal Uploader Begin -->
   <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel">Upload Your Image</h3>
      </div>
      <div class="modal-body">
         <div class="row-fluid">
            <div class="span3 well" >
              <input type="file" id="model_imageLoader" name="model_imageLoader"/>
            </div>
            <div class="span9 well" >
               <canvas id="model_imageCanvas" width="auto" height="auto"></canvas>
               
               <!-- <canvas id="panel" ></canvas> -->
               
            </div>
         </div>
      </div>
      <div class="modal-footer">
         <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
         <button class="btn btn-primary" data-dismiss="modal" onclick="exportUploadedImage('profile_img_holder')">Save changes</button>
      </div>
      
      <script>
         $(document).ready(function(){
         
             var data_parent = "user-profile-photo";
         
                         var model_imageLoader = document.getElementById('model_imageLoader');
                         model_imageLoader.addEventListener('change', handleImage, false);
         
                         var canvas = document.getElementById('model_imageCanvas');
         
                         var ctx = canvas.getContext('2d');
         
         
         
                         function handleImage(e){
         
                                         var reader = new FileReader();
         
                                         reader.onload = function(event){
         
                                                         var img = new Image();
         
                                                         img.onload = function(){
         
                                                                         //ctx.drawImage(img,0,0);
         
                                                                         autoCropByCanvasSize(canvas, img, ctx);
                                                                         initCroper();
         
                                                         }
         
                                                         img.src = event.target.result;
         
                                         }
         
                                         reader.readAsDataURL(e.target.files[0]);    
         
                         }
         
         });
         
         
         
          /**
         
            It will remove the container then add the new image.
         
         */
         
         function exportUploadedImage(container_id_str){
         
            var image = new Image();
         
            var canvas = document.getElementById('model_imageCanvas');
         
            image.src = canvas.toDataURL("image/png");
         
           // $("#"+container_id_str).html("");//empty the container
         
            $("#"+container_id_str).append(image);
         
         }
         
         
         
         function autoCropByCanvasSize(canvas, imageObj, context){
         
                         var sourceX = 0;
         
                         var sourceY = 0;
         
                         var destX = 0;
         
                         var destY = 0;
         
                         var pixelRatio = window.devicePixelRatio;
         
                         if (canvas.width > canvas.height) {
         
                                         var stretchRatio = ( imageObj.width / canvas.width );
         
                                         var sourceWidth = Math.floor(imageObj.width);
         
                                         var sourceHeight = Math.floor(canvas.height*stretchRatio);
         
                                         sourceY = Math.floor((imageObj.height - sourceHeight)/2);
         
                         }
         
                         else {
         
                                         var stretchRatio = ( imageObj.height / canvas.height );
         
                                         var sourceWidth = Math.floor(canvas.width*stretchRatio);
         
                                         var sourceHeight = Math.floor(imageObj.height);
         
                                         sourceX = Math.floor((imageObj.width - sourceWidth)/2);
         
                         }
         
                        
         
                         var destWidth = Math.floor(canvas.width / pixelRatio);
         
                         var destHeight = Math.floor(canvas.height / pixelRatio);                              
         
                         context.scale(pixelRatio, pixelRatio);
         
                         context.drawImage(imageObj, sourceX, sourceY, sourceWidth, sourceHeight, destX, destY, destWidth, destHeight);
         
         }
         
      </script>
   </div>
   <!-- Modal Uploader END -->
   

   
 <script>
      !function ($) {
          loadLogoSection($("#header"));
	      loadMenu('004', '', 'pages/cms-home-page.php');          
       }(window.jQuery); 
 </script>


 
    

        
 <?php include 'phps/footer.php';?>
    
</html>