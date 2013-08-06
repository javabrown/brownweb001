       
       <style type="text/css">
       	    loginDiv.* { font-family: Verdana; font-size: 11px; line-height: 14px; }
       	    .submit { margin-left: 150px; margin-top: 10px;}
       	    .label1 { display: block; float: left; width: 120px; text-align: right; margin-right: 15px; margin-left: 15px;}
       	    .label2 { display: block; float: left; width: 150px; text-align: right; margin-right: 15px; margin-left: 10px;}
       	    .form-row { padding: 5px 0; clear: both; width: 700px; }
       	    label1.error { width: 280px; display: block; float: left; color: red; padding-left: 10px; }
       	    input[type=text], textarea { width: 250px; float: left; }
       	    textarea { height: 50px; }
       
       		.WelcomePage_SignUpSubheadline {
       		    margin-left: 60px;
       			color:#203360;
       			font-size:20px !important;
       			line-height:29px;
       			padding-top:1px;
       			word-spacing:-1px;
       		}
       
       		.WelcomePage_SignUpHeadline {
       		    margin-left: 60px;
       			color:#203360;
       			font-size:20px !important;
       			font-weight:bold !important;
       			line-height:29px;
       			word-spacing:-1px;
               }
       
               .WelcomePage_SignUpHeadline, .WelcomePage_SignUpSubheadline{
       			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       			font-size: 5px;
       			color: #333333;
               }
       
               #menubar_container {
       			background-color:#3B5998;
       			display:block;
       			margin:0;
       			padding:0;
       			position:relative;
       			z-index:100;
               }
       
               .signInErrorDiv {
                      position:absolute;
                      color:red;
                      left: 70px;
                      #top: 120px;
       
               }
       
       
               #user {
       		               position:absolute;
                              margin-left: 60px;
                              text-align:center;
                              text-shadow: red;
       		               left: 200px;
       					   width: 220px;
       					   height:20px;
       					   font-style:oblique;
       					   font-weight: bold;
               }
	  </style>
	  
	  

       <div id="signInDiv">
			  <form id="form1" method="post" onsubmit="return false;">
				  <div class="WelcomePage_SignUpHeadline">Sign In</div>
				  <!--<div class="WelcomePage_SignUpSubheadline">It's free and anyone can join</div>-->
				  <br>
				  <div class="form-row"><span class="label1">E-Mail *</span><input type="text" name="email" /></div>
				  <div class="form-row"><span class="label1">Password *</span><input type="password" name="password" /></div>
				  <div class="form-row"><input type="hidden" name="serviceName" value="signInService"/></div>
				  <div class="form-row">
				          <input class="submit" type="submit" value="SignIn" onClick="onSubmitClick0()" />
				  </div>
			  </form>
			  
			  <br/><br/>
			  <hr width="80%" style="height:1px;border:0.5px dotted black;"/>
			  <div class="form-row">
			     <div class="label2">New User *</div>
			     <div id="signUpLink0" class="xlink" 
			        onmouseover="setColor('blue')"
			        onmouseout="setColor('black')"
			        onclick="loadSignOutPage()"
			        style="position:relative;top:-3px;">
			       <font size="2"><u>SignUp Its Free.</u></font>
			     </div>
			  </div>
			  
			  
       </div>
         
       <script>
          
          
          function setColor(colorValue){
            //alert(colorValue);
            $('#signUpLink0').css('color', colorValue);
          }
       
          function onSubmitClick(){
            //alert('hello122');
            $("#form1").submit(function(){
                  alert($("#form1").serialize());
	          $.post( 
		             "request.do", 
		             $("#form1").serialize(), 
		             function(data){ 
		                 alert($(data).text()+"ddd"); 
		                 //loadUserAccountForm();
		                 
		             } 
                   );  
            });
             
          }

          function onSubmitClick0(){
              alert('calling sessionHandler.do');
              $("#form1").submit(function(){
                    alert($("#form1").serialize());
  	          $.get( 
  		             "sessionHandler.do", 
  		             $("#form1").serialize(), 
  		             function(data){ 
  		                 //alert(data); 
  		                 //$('#action_container').html(data);
  		                  $('#leftColumn').html(data);
  		                  alert('called');
  		             } 
                  );  
              });
               
          }
          
          
          function loadSignOutPage(){
	  	    showActionContainersAjaxCallIndicator();
	  	    $('#action_container_title').html("Login > New User");
	  	    $('#action_container').load('jsp/signUp.jsp',
	  	   	function()
	  	   	{
	  	   	 //alert('Load was performed.');
	  	   	 showFinishActionContainersAjaxCallIndicator();
	  	   	}
	  	    );
	  	    
	           $("#action_container").show();
	           $('#content').hide();		    
	  }
		  
       </script>