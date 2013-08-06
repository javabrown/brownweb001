<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>
<jsp:useBean id="userOptions" type="user.UserOptions" scope="session"/>
 
 <div>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
       <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js" type="text/javascript"></script>

     
	
	<script>
	$(function() {
		$( ".userImages1" ).sortable({
			revert: true
		});
	});
	</script>
         

       <style>	
         .userImageList {
                        #border: 3px solid black; 
                        list-style-type: none; 
                        margin: 0; padding: 0; margin-bottom: 0px; margin-left:-30px; width:450px}
	 .userImages1 li{display: inline-block; padding:0px; margin-left: 0px; margin-top: 1px; margin-right: 15px; margin-bottom: 0px; }
       </style>
       
       <style>
              	  .imageHolder{
       	              #border:solid;
       	              margin-top: 0px;
       	              background-color:#b0c4de;
       	              height: 65px; 
       	              width: 80px; 
                 }
        </style>
        
        <!-- Close Icon -->
        <style>
       	  .cross{
       		  display:block;
       		  color:#555555;
       		  #font-weight:regular;
       		  
       		  #line-height:10px;
       		  margin-bottom:-12px;
       		  margin-left:58px;
       		  text-decoration:none;
       		  width:20px;
       		  height:12px;
       	  }
       	  .cross:hover{
       		  color:blue;
       		  background:url(http://static.ak.fbcdn.net/rsrc.php/za/r/1Be-brvKO2y.png) no-repeat 10px -32px
                 }
                 
       	  .cross {
       	    background:url(http://static.ak.fbcdn.net/rsrc.php/za/r/1Be-brvKO2y.png) no-repeat 10px -21px;
       	    text-indent:25px;
       	    display:block;
                 }
           
           
 
       </style>
       
       <!--<div class="userImageList">
	      <ul class="userImages1">
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(images/ICON.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(images/ICON.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		<br>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
		
		<li class="ui-state-default"> <div class="imageHolder" style="background-image:url(pics/100CANON/1.jpg);"><a href="#" class="cross"></a></div> </li>
	      </ul>
	      <hr noshade size="1" width="100%">
       </div> -->
        
     
       
       
  
           
<div class="userImageList">   
  <ul class="userImages1">
   <c:forEach items="${userOptions.userPics}" var="option">
 	  <li class="ui-state-default"> <div class="imageHolder" style="background-image:url(<c:out value="${option.url}" />);"><a href="#" class="cross"></a></div> </li>
 	  
   </c:forEach>
   </ul>
</div> 	
        
 
       
       <!-- Edit Icon -->
       <style>
       	  .edit{
       		  display:block;
       		  color:#555555;
       		  #font-weight:regular;
       		  
       		  #line-height:10px;
       		  margin-bottom:-12px;
       		  margin-left:378px;
       		  text-decoration:none;
       		  width:60px;
       		  height:12px;
       	  }
       	  .edit:hover{
       		  color:blue;
       		  background:url(http://static.ak.fbcdn.net/rsrc.php/za/r/1Be-brvKO2y.png) no-repeat 10px -32px
                 }
                 
       	  .edit {
       	    background:url(http://static.ak.fbcdn.net/rsrc.php/za/r/1Be-brvKO2y.png) no-repeat 10px -21px;
       	    text-indent:25px;
       	    display:block;
                 }
                 
                 .header{
                   border:solid;
                   width:413px;
                   height:20px;
                   margin-top: 1px;
                   background-color:#D8D8D8;
                   border: 1px #F2F2F2 solid;
                 }
                 
       </style>
      
 
       
        <br>
       
       <style>
         .abc li{display: inline-block;
       </style>
        
       <div class="workInfo"
         <div class="header" >
            <a href="#" class="edit"></a>&nbsp;&nbsp;Education and Work
         </div>
          
        <hr noshade size="1" width="98%">

	 <table class="">
	  <tbody>
	   <tr>
	    <th class="label">Share Your Experiences</th>
	      <td class="">
		   <ul class="abc">
		    <li class="uiListVerticalItemBorder">
			  <div class="">
			     <div class="">
				<a href="#">
				  <span class="">
				    <img src="http://www.facebook.com/images/icons/workIcon32.png" class="iconImage">
				  </span>
				</a>
				<div class="">
				  <a href="#">Add Your Work Experience</a>
				</div>
			     </div>
			  </div>
		    </li>

		    <li class="">
			<div class="">
			 <div class="">
			   <a href="" class="">
			     <span class="">
			       <img src="http://www.facebook.com/images/icons/eduIcon32.png" class="iconImage">
			     </span>
			   </a>
			   <div class="">
			      <a href="#">Add Your School Info</a>
			   </div>
			 </div>
			</div>
		    </li>
		  </ul>
	     </td>
	  </tr>
	 </tbody>
        </table>
       </div>
       
       
       
       
       <div class="workInfo"
                <div class="header" >
                   <a href="#" class="edit"></a>&nbsp;&nbsp;Philosophy
                </div>
                <hr noshade size="1" width="98%">
               
       	 <table class="">
       	  <tbody>
       	   <tr>
       	    <th class="label">Political Views</th>
       	      <td class="">
       		   <ul class="abc">
       		    <li class="uiListVerticalItemBorder">
       			  <div class="">
       			     <div class="">
       				<a href="#">
       				  <span class="">
       				    <img src="http://static.ak.fbcdn.net/rsrc.php/yS/r/SakaC0tDjfm.png" class="iconImage">
       				  </span>
       				</a>
       				<div class="">
       				  <a href="#">Freedom of speech is important.</a>
       				</div>
       			     </div>
       			  </div>
       		    </li>
       		  </ul>
       	     </td>
       	  </tr>
       	 </tbody>
               </table>
       </div>
       
       
              <div class="workInfo"
                       <div class="header" >
                          <a href="#" class="edit"></a>&nbsp;&nbsp;Philosophy
                       </div>
                       <hr noshade size="1" width="98%">
                      
              	 <table class="">
              	  <tbody>
              	   <tr>
              	    <th class="label">Political Views</th>
              	      <td class="">
              		   <ul class="abc">
              		    <li class="uiListVerticalItemBorder">
              			  <div class="">
              			     <div class="">
              				<a href="#">
              				  <span class="">
              				    <img src="http://static.ak.fbcdn.net/rsrc.php/yS/r/SakaC0tDjfm.png" class="iconImage">
              				  </span>
              				</a>
              				<div class="">
              				  <a href="#">Freedom of speech is important.</a>
              				</div>
              			     </div>
              			  </div>
              		    </li>
              		  </ul>
              	     </td>
              	  </tr>
              	 </tbody>
                      </table>
              </div>
 
       
       
</div>