<div class="loginDiv" style="min-height:780px;">
	  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/jquery.corners.min.js"></script>
          <script type="text/javascript" src="js/rkgallery.js"></script>
        
       
         <style>
       
         div#userAccountContainer {
         	margin: 0;
         	padding: 0;
         	width:20px;
         	position:relative;
          }
       
         div#userAccountContainer { <!-- define common style for user account -->
         		color: #333;
         		<!-- background-color: #fff; -->
         		font-family: "Arial", "Helvetica", sans-serif;
         		font-size: .85em;
         		text-align: center;
         		 
          }
       
         div#userAccountContainer {
         	width: 600px;
         	margin: 0 auto;
         	text-align: left;
         }
       
         div#userAccountHeader {
       
         }
       
       
         div#userAccountContent {
       
         }
       
         div#userAccountCenter {
           margin: 0 0 0 140px;
         }
       
       
       
         div.userAccountColumn {
           width: 130px;
         }
       
         div#userAccountLeft {
           float: left;
         }
       
       
         div#userAccountFooter {
           clear: both;
         }
       
       
       
         <!-- containr allignment begin -->
         div#userAccountContainer {
       	margin: 20px inherit;
         }
       
         div#userAccountHeader {
       		padding: 20px;
       		<!-- background-color: #f5f5f5; -->
         }
       
         div#userAccountContent {
       		margin: 10px 0;
         }
       
         div#userAccountCenter {
       			padding: 20px;
         }
       
         div.userAccountColumn {
       			padding: 20px 0px;
       			text-indent: 20px;
       			<!-- background-color: #f5f5f5; -->
         }
         div#userAccountLeft {
         }
         div#right {
         }
       
       
         div#userAccountFooter {
       		margin: 10px 0;
       		padding: 20px;
       		<!-- background-color: #f5f5f5; -->
         }
         
          .xlink
	  {
	      cursor:pointer;
	      cursor:hand;
	  }

       
         </style>
       
       
       
       	<div id="userAccountContainer">
       
       
       		<!--<div id="userAccountHeader">

       		</div>-->
       
       
       		<div id="userAccountContent">
       			<div class="userAccountColumn" id="userAccountLeft">
                           <img src="images/ICON.jpg" width="100" height="100"/>
                           <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink' id="userName"><font size="3">Raja Khan</font></a>
                           <hr noshade size="1" width="90%">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink' id="editProfileLink">Edit My Profile</a>
                           <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink' id="messagesLink">Messages</a>
                           <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink'>Photos</a>
                           <hr noshade size="1" width="90%">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink'>Friends</a>
                           <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink'>Groups</a>
                           <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink'>Apps</a>
                           <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a class='xlink'>Leaks</a>
       			
       			</div>
       
       			<div id="userAccountCenter">                           
                         <!--  <script> loadEditProfile(); </script> -->
       		       </div>
       
       		       <div id="userAccountFooter">
       			 footer <a href="http://twe.nty3.com/">twentythree</a> <a href="information.html">info</a>
       		       </div>  
       
       	</div> <!-- end div#container -->
       
       
       <script>
 
          function loadEditProfile(){
       	    $('#userAccountCenter').load('jsp/editProfileBasics.jsp',
       	   	function()
       	   	{
       	   	 //alert('Load was performed.');
       	   	}
       	    );
           }
           
           function loadUserProfile(){
	          	    $('#userAccountCenter').load('jsp/editProfile.jsp',
	          	   	function()
	          	   	{
	          	   	 //alert('Load was performed.');
	          	   	}
	          	    );
           }
           
                
 	  $('#editProfileLink').bind('click', loadEditProfile);
 	 
 	  $('#userName').bind('click', loadUserProfile);
       </script>
       
       
       

</div>