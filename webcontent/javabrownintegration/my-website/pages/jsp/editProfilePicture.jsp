 <%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>
<jsp:useBean id="userOptions" type="user.UserOptions" scope="session" />

 <script type="text/javascript" src="js/jquery.webcam.js"></script>
 <script type="text/javascript" src="js/jquery.Jcrop.js"></script>
 <script type="text/javascript" src="js/jquery.form.js"></script>
 
 
 <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
  
<div style="padding-left:10px;">

<!-- <iframe name="iframe" id="uploaderIFrame" style="display:inline; width:110px;height:110px;"></iframe> -->

   <table style="border-bottom:solid 1px;">
      <tr>
         <td style="vertical-align:top;horizontal-align:center;border-right:solid 1px; padding-right:5px;">
          <table>
            <tr>
               <td>
                 <div style="overflow:hidden;">
                   <img id="profileImageThumbnail" src="<c:out value="${userOptions.profilePic.url}" />" id="profile_pic" width="100" height="100"></img>
                 </div>
               </td>
            </tr>
            <tr><td><p class="xlink" id="editProfileThumbnail">Edit Thumbnail</p></td></tr>
            <tr><td><p class="xlink" id="uploadNewProfilePic">Upload new picture</p></td></tr>
            <tr><td><p class="xlink" id="removeProfilePic">Remove Your Picture</p></td></tr>


          </table>
         </td>


         <td style="padding:4px;padding-left:10px;">
            <table>
             <tr>
               <td id="control" style="display:none;vertical-align:top;horizontal-align:center;border-color:white;">
                   Select an image file on your computer (4MB max):
                   <br>
                    <form enctype="multipart/form-data" id="uploaderForm" method="post" action="uploader.do"
                         class="profile_pic_upload">
                        <input type="file" name="file"></input>
                        <input type="text" name="raja" value="khan"></input>
                        <input type = "submit" id="upload_btn" value="Upload" onclick="uploadAjax()"></input> 
                        <img id ="loadingBusyIcon" src="icon/ajax-loader3.gif" style="display:none"/>
                    </form>
                   <!-- onclick="ajaxSubmit()" -->
                   
                   <br>

                   <!-- <hr style="border:0;width:100%;height:1px;"> -->

                   <div style="text-align:center;padding-top:1px;border-color:white;">
                       <span>OR</span><br>
		                     <button onclick="accessCamera();">Take a Picture</button>
                   </div>
               </td>

               <td id="canvas" style="vertical-align:top;display:none;border-color:white;">
	            <div>
	              <object height="240" width="320" data="flash/jscam_canvas_only.swf" type="application/x-shockwave-flash" id="webcam-object">
		                    <param value="jscam_canvas_only.swf" name="movie">
		                    <param value="mode=callback&amp;quality=85" name="FlashVars">
                      </object>
                      <br>
                      <Button onclick="closeCamera()">Save</Button><Button onclick="closeCamera()">Cancel</Button>
	            </div>
	        </td>

         <td id="editThubnailView" style="display:inline;vertical-align:top;horizontal-align:center;border-color:white;">
	        <div  style="display:inline;border-color:white;">
	        <div style="overflow:scroll; max-width:600px;max-height:400px;"> 
                <img id="profileImage" src="<c:out value="${userOptions.profilePic.url}" />" id="profile_pic"></img>
            
          </div>
          <hr>
                        <!-- <form action="ImageUploaderServlet" target="iframe" xmlInput> -->
										<form id="croppingForm" method="post" action="ImageUploaderServlet">
										      <input type="hidden" name="fileName" id="fileName" value="image1"/>
										      <input type="hidden" name="x1" id="x1"/>
										      <input type="hidden" name="y1" id="y1"/>
										      <input type="hidden" name="x2" id="x2"/>
										      <input type="hidden" name="y2" id="y2"/>
										      <input type="hidden" name="w" id="w"/>
										      <input type="hidden" name="h" id="h"/>
										      <input type="submit" value="Crop" name="action" onclick="uploadCroppedAjax()"/>
                <img id ="loadingBusyIcon" src="icon/ajax-loader3.gif" />										            
										</form>
	        </div>
	       </td>

            </tr>
           </table>
        </td>

      </tr>
   </table>


<c:forEach items="${userOptions.userPics}" var="pic">
  <c:out value="${pic.id}" />  <c:out value="${pic.name}" />
  <br>
</c:forEach>

  


<script>
  function accessCamera(){
     $('#canvas').css('display','inline');
     $('#control').css('display','none');
     $('#editThubnailView').css('display','none');
  }

  function closeCamera(){
       $('#canvas').css('display','none');
       $('#control').css('display','inline');
       $('#editThubnailView').css('display','none');
  }


  function accessEditThubnailView(){
     $('#canvas').css('display','none');
     $('#control').css('display','none');
     $('#editThubnailView').css('display','inline');

    
     var jcrop_api = $('#profileImage').Jcrop({
	   					onChange: setCoords,//showPreview,
	   					onSelect: setCoords,//showPreview,
	   					aspectRatio: 1
     });
     jcrop_api.setSelect([100,100,300,300]);
     jcrop_api.setOptions({ allowSelect: true, allowMove: true, allowResize: true, aspectRatio: 1 });
     applyProfileImage();
  }

  function showPreview(coords) {
  	if (parseInt(coords.w) > 0)
  	{
  		var rx = 100 / coords.w;
  		var ry = 100 / coords.h;

  		$('#profileImageThumbnail').css({
  			width: Math.round(rx * 500) + 'px',
  			height: Math.round(ry * 370) + 'px',
  			marginLeft: '-' + Math.round(rx * coords.x) + 'px',
  			marginTop: '-' + Math.round(ry * coords.y) + 'px'
  		});
  	}
  }

  function setCoords(c)
  {
        jQuery('#x1').val(c.x);
        jQuery('#y1').val(c.y);
        jQuery('#x2').val(c.x2);
        jQuery('#y2').val(c.y2);
        jQuery('#w').val(c.w);
        jQuery('#h').val(c.h);
  }     
  
  
 
  
  function uploadAjax(){
    //alert('call begin');   
    var options_defined = {
                   beforeSubmit:  preSubmit,   
                   success:       postSubmit,   
                   error:         postSubmit,   
                   type:      'post'         
               }; 
    
    $('#uploaderForm').ajaxForm(options_defined); 
  }

  function uploadCroppedAjax(){
	    var options_defined = {
	                   beforeSubmit:  preSubmit,   
	                   success:       postSubmit,   
	                   error:         postSubmit,   
	                   type:      'post'         
	               }; 
	    
	    $('#croppingForm').ajaxForm(options_defined); 
	 }
  
  
  function postSubmit(responseText, statusText, xhr, $form){
    $("#loadingBusyIcon").css('display','none');
    alert(responseText);
    //$("#profileImageThumbnail").attr('src', responseText);
    applyProfileImage();
  }
  
  function preSubmit(responseText, statusText, xhr, $form){
      $("#loadingBusyIcon").css('display','inline');
  }

  $('#editProfileThumbnail').bind('click', accessEditThubnailView);
  $('#uploadNewProfilePic').bind('click', closeCamera);
  //$('#removeProfilePic').bind('click', alert('Implementation is pending for this !!'));
 

  function applyProfileImage(){

      $.ajax({
						type: "GET",
						url: "searchProfile.do",
						dataType: "xml",
						success: function(xml) {
							//var select = $('#mySelect');
							$(xml).find('contents').each(function(){
				               $(this).find('content').each(function(){
										var id = $(this).find('id').text();
										var imagePath = $(this).find('value').text();
										alert(id + " - " + imagePath);

										if(id == "image1"){
										  $("#profileImageThumbnail").attr('src', imagePath);
										  $("#profileImage").attr('src', imagePath);
										  
										}

									});
								});
							}
				});
  }
   
  
</script>

</div>