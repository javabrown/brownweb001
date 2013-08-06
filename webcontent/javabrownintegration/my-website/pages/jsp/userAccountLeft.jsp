<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>
<jsp:useBean id="userOptions" type="user.UserOptions" scope="session" />
 

<div id="userAccountContent" style="margin-top:10px;margin-left:10px;min-height:780px;">
       			<div class="userAccountColumn" id="userAccountLeft">
                           <img class='xlink' id = "editProfilePictureLink" src="<c:out value="${userOptions.profilePic.url}" />" width="100" height="100"/>
                           <br><a class='xlink' id="userName"><font size="3"> <jsp:getProperty name="userOptions" property="userName" /> </font></a>
                           <hr noshade size="1" width="100%">
                           
                           <c:forEach items="${userOptions.options}" var="option">
			                          <a class='xlink'
			                             id='<c:out value="${option.name}" />'
			                             onclick="loadContent('<jsp:getProperty name="userOptions" property="userName" /> > <c:out value="${option.name}" />','<c:out value="${option.destinationPage}" />'); ">
			                             <c:out value="${option.name}" />
			                          </a>
			                          <br>
			                        </c:forEach>

                          
                          
                          <hr noshade size="1" width="100%">
       			   
                            <c:forEach items="${userOptions.connections}" var="option">
			                          <a class='xlink'
			                             id='<c:out value="${option.name}" />'
			                             onclick="loadContent('<jsp:getProperty name="userOptions" property="userName" /> > <c:out value="${option.name}" />','<c:out value="${option.destinationPage}" />'); ">
			                             <c:out value="${option.name}" />
			                          </a>
			                          <br>
			     </c:forEach>

              
     
                 
                 <hr noshade size="1" width="100%">
               
 
               
       			</div>       
       			
       	 <script>
		 
		  function loadEditProfile(){
		    showActionContainersAjaxCallIndicator();
		    $('#action_container_title').html("Raja Khan > Edit Profile");
		    $('#action_container').load('jsp/editProfileBasics.jsp',
		   	function()
		   	{
		   	 //alert('Load was performed.');
		   	 showFinishActionContainersAjaxCallIndicator();
		   	}
		    );
		    
                    $("#action_container").show();
                    $('#content').hide();		    
		  }
		   
		   
		  function loadEditProfilePicture(){
		    showActionContainersAjaxCallIndicator();
		    $('#action_container_title').html("Raja Khan > Edit Profile Picture");
		    $('#action_container').load('jsp/editProfilePicture.jsp',
		   	function()
		   	{
		   	 //alert('Load was performed.');
		   	 showFinishActionContainersAjaxCallIndicator();
		   	}
		    );
                    $("#action_container").show();
                    $('#content').hide();			    
		   }
		   
		   
		   function loadUserProfile(){
		      showActionContainersAjaxCallIndicator();
		      $('#action_container_title').html("Raja Khan > User Profile");
		      $('#action_container').load('jsp/editProfile.jsp',
		     	function()
		     	{
		     	 //alert('Load was performed.');
		     	 showFinishActionContainersAjaxCallIndicator();
		     	}
		      );
                    $("#action_container").show();
                    $('#content').hide();			      
		   }
		   
		   
		   function loadManagePhotos(){
		                    showActionContainersAjaxCallIndicator();
		                    $('#action_container_title').html("Raja Khan > Manager Photo");
		          	    $('#action_container').load('jsp/yahooImage.jsp',
		          	   	function()
		          	   	{
		          	   	 //alert('Load was performed.');
		          	   	 showFinishActionContainersAjaxCallIndicator();
		          	   	}
		          	    );
                    $("#action_container").show();
                    $('#content').hide();			          	    
		   }
		  
		   function loadContent(actionTitle, destinationPage){
		  		    showActionContainersAjaxCallIndicator();
		  		    $('#action_container_title').html(actionTitle);

		  		    $('#action_container').load(destinationPage,
		  		   	  function()
		  		   	  {
		  		   	   showFinishActionContainersAjaxCallIndicator();
		  		   	  }
		  		    );

			        $("#action_container").show();
		        $('#content').hide();			    
		   }
		   
		       
		  $('#editProfileLink').bind('click', loadEditProfile);
		  $('#userName').bind('click', loadUserProfile);
		  $('#editProfilePictureLink').bind('click', loadEditProfilePicture);
                  $('#managerPhotoLink').bind('click', loadManagePhotos);
      </script>

</div> 