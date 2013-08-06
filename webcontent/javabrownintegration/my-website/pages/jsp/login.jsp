<div class="loginDiv" style="min-height:500px;">
	  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
	  <script type="text/javascript" src="js/jquery.corner.js"></script>
	  <script type="text/javascript" src="js/jquery.corners.min.js"></script>
          
	  <script type="text/javascript">
	    $(document).ready(function() {
	      $("#form1").validate({
	        rules: {
	          name: "required",// simple rule, converted to {required:true}
	          email: {// compound rule
	          required: true,
	          email: true
	        },
	        url: {
	          url: true
	        },
	        comment: {
	          required: true
	        }
	        },
	        messages: {
	          comment: "Please enter a comment."
	        }
	      });
	    });
        //$('#user').corner();
	    $('#user').bind('click', function()
	                             {
	                               if($('#user').text() == 'New User'){
	                                 $('#signInDiv').hide();
	                                 $('#signUpDiv').show();
	                                 $('#user').text('Existing User');
	                                 $('#user').attr('class','xlink');
	                               }
	                               else{
	                                 $('#signInDiv').show();
	                                 $('#signUpDiv').hide();
	                                 $('#user').text('New User');
	                                 $('#user').attr('class','xlink');
	                               }
	                             }
	                   );

	    $('#user').bind('mouseover', function(){ $('#user').css({'color':'blue', 'cursor':'hand'})  });
	    $('#user').bind('mouseout', function(){ $('#user').css({'color':'black', 'border':'none', 'cursor':'default'})  });
	    $('#user').bind('mousedown', function(){ $('#user').css({'color':'darkblue', 'border':'1px solid white'})  });
	    $('#user').bind('mouseup', function(){ $('#user').css({'color':'blue', 'border':'none'})  });
	    $('#user').attr('class','xlink');

        //$('#user').trigger('click');
        $('#signInDiv').show();
        $('#signUpDiv').hide();
        $('#user').text('New User');
        
        //Working msg:
        $('#txt_email').bind('focus', function(){$('.signInErrorDiv').hide();});
        //
                function doSignIn(){
				  alert('sign in');
		}
	  </script>

	  <style type="text/css">
	    loginDiv.* { font-family: Verdana; font-size: 11px; line-height: 14px; }
	    .submit { margin-left: 150px; margin-top: 10px;}
	    .label1 { display: block; float: left; width: 120px; text-align: right; margin-right: 15px; margin-left: 15px;}
	    .form-row { padding: 5px 0; clear: both; width: 700px; }
	    label1.error { width: 250px; display: block; float: left; color: red; padding-left: 10px; }
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
		               left: 480px;
					   width: 100px;
					   height:20px;
					   font-style:oblique;
					   font-weight: bold;
        }
	  </style>
       <div class="signInErrorDiv"></div>

       <p class="xlink" id="user">Existing User</p>


       <div id="signInDiv" class="xlink">
			  <form id="form1" method="post" onsubmit="return false;">
				  <br>
				  <hr>
				  <div class="WelcomePage_SignUpHeadline">Sign In</div>
				  <!--<div class="WelcomePage_SignUpSubheadline">It's free and anyone can join</div>-->
				  <br>
				  <div class="form-row"><span class="label1">E-Mail *</span><input type="text" name="email" /></div>
				  <div class="form-row"><span class="label1">Password *</span><input type="password" name="password" /></div>
				  <div class="form-row"><input type="hidden" name="serviceName" value="signInService"/></div>
				  <div class="form-row">
				          <input class="submit" type="submit" value="Submit" onClick="onSubmitClick()" />
				  </div>
			  </form>
       </div>
        
       <script>
          function onSubmitClick(){
            alert('hello122');
            $("#form1").submit(function(){
                  alert($("#form1").serialize());
	          $.post( 
		                 "request.do", 
		                 $("#form1").serialize(), 
		                 function(data){ 
		                     alert($(data).text()); 
		                     //loadUserAccountForm();
		                     
		                 } 
                   );  
            });
            alert('hello2');
          }
       </script>
        
      <div class="xlink" id="signUpDiv">
			  <form id="form1" method="post" action="">
				  <br>
				  <hr>
				  <div class="WelcomePage_SignUpHeadline">Sign Up</div>
				  <div class="WelcomePage_SignUpSubheadline">It's free and anyone can join</div>
				  <br>
				  <div class="form-row"><span class="label1">First Name *</span><input type="text" name="name" /></div>
				  <div class="form-row"><span class="label1">Last Name *</span><input type="text" name="name" /></div>
				  <div class="form-row"><span class="label1">E-Mail *</span><input type="text" name="email" /></div>
				  <div class="form-row"><span class="label1">New Password *</span><input type="text" name="email" /></div>
				  <div class="form-row"><span class="label1">I am: *</span><select class="select" name="sex" id="sex"  ><option value="0">Select Sex:</option><option value="1">Female</option><option value="2">Male</option></select></div>

				  <div class="form-row"><span class="label1">Birthday *</span>
					 <select class="" id="birthday_month" name="birthday_month" onchange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, &quot;birthday_day&quot;, &quot;birthday_year&quot;);});">
						<option value="-1">Month:</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Apr</option>
						<option value="5">May</option>
						<option value="6">Jun</option>
						<option value="7">Jul</option>

						<option value="8">Aug</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
						</select> <select name="birthday_day" id="birthday_day"  onchange="" autocomplete="off"><option value="-1">Day:</option><option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>

						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>

						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>

						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>

						<option value="31">31</option>
						</select> <select name="birthday_year" id="birthday_year" onchange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});" autocomplete="off"><option value="-1">Year:</option><option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>

						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>

						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>

						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>

						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>

						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>

						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>

						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
						<option value="1946">1946</option>
						<option value="1945">1945</option>
						<option value="1944">1944</option>
						<option value="1943">1943</option>
						<option value="1942">1942</option>
						<option value="1941">1941</option>

						<option value="1940">1940</option>
						<option value="1939">1939</option>
						<option value="1938">1938</option>
						<option value="1937">1937</option>
						<option value="1936">1936</option>
						<option value="1935">1935</option>
						<option value="1934">1934</option>
						<option value="1933">1933</option>
						<option value="1932">1932</option>

						<option value="1931">1931</option>
						<option value="1930">1930</option>
						<option value="1929">1929</option>
						<option value="1928">1928</option>
						<option value="1927">1927</option>
						<option value="1926">1926</option>
						<option value="1925">1925</option>
						<option value="1924">1924</option>
						<option value="1923">1923</option>

						<option value="1922">1922</option>
						<option value="1921">1921</option>
						<option value="1920">1920</option>
						<option value="1919">1919</option>
						<option value="1918">1918</option>
						<option value="1917">1917</option>
						<option value="1916">1916</option>
						<option value="1915">1915</option>
						<option value="1914">1914</option>

						<option value="1913">1913</option>
						<option value="1912">1912</option>
						<option value="1911">1911</option>
						<option value="1910">1910</option>
						<option value="1909">1909</option>
						<option value="1908">1908</option>
						<option value="1907">1907</option>
						<option value="1906">1906</option>
						<option value="1905">1905</option>

						<option value="1904">1904</option>
						<option value="1903">1903</option>
						<option value="1902">1902</option>
						<option value="1901">1901</option>
						<option value="1900">1900</option>
					</select>
				 </div>


				  <div class="form-row"><input class="submit" type="submit" value="Submit"></div>
			  </form>
	 </div>


</div>