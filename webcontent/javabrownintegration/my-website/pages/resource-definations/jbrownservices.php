<!-- SHA-2 Encription service defination -->
<div class="well span12">
 <div class="alert alert-info well span11">
   <button class="close" data-dismiss="alert" type="button" onclick="$(this).parent().hide();">×</button>
   <p id="about_me">DEFINE IT</p>
 </div>
<div>

<div class="well span12">
   <div class="tabbable">
      <ul class="nav nav-tabs" id="mytab">
         <li><a href="#tab1" data-toggle="tab">Upgread Request</a></li>
         <li class="active"><a href="#tab2" data-toggle="tab">Latest Update</a></li>
         <li><a href="#tab3" data-toggle="tab">Repository</a></li>
      </ul>
      <div class="tab-content">
         <div id="tab1" class="tab-pane">
               
                  <form class="well span11">
                     <div class="row">
                        <div class="span4" style="padding-left:10px;">
                           <label>First Name</label>
                           <input type="text" class="" placeholder="Your First Name">
                           <label>Last Name</label>
                           <input type="text" class="" placeholder="Your Last Name">
                           <label>Email Address</label>
                           <input type="text" class="" placeholder="Your email address">
                           <label>Subject</label>
                           <select id="subject" name="subject" class="">
                              <option value="na" selected="">Choose One:</option>
                              <option value="service">Enhancement Request</option>
                              <option value="service">Report Existing Service Issue</option>
                              <option value="suggestions">Suggestions</option>
                              <option value="product">Product Support</option>
                           </select>
                        </div>
                        
                        <div class="span8" >
                           <label>Message</label>
                           <textarea name="message" id="message" class="input-xlarge span12" rows="10"></textarea>
                            <button type="submit" class="btn btn-primary pull-right">Send</button>
                        </div>
                       
                     </div>
                  </form>
                  
               
         </div>
         
         <div id="tab2" class="tab-pane active">
            <div class="well span11">
               <div class="github-widget" data-repo="javabrown/jbrownservices"></div>
            </div>
         </div>

         <div id="tab3" class="tab-pane active">
            <div class="well span11">
               <div class="field span11" id="git"></div>
            </div>
         </div>

         
      </div>
   </div>
</div>

<!--<div id="asyncData">
<div id="request-div" style="padding-top:30px;">
   <div class="span11 well">
      <div class="field span11" id="git"></div>
   </div>
</div>
</data> -->

<!-- <script type="text/javascript" src="js/repo.min.js"></script> -->
<script type="text/javascript" src="js/jquery.githubRepoWidget.min.js"></script>
<script>
   function repo()
   {
        $('#git').repo({ user: 'javabrown', name: 'jbrownservices' });
        //alert('done git');
   }
   
      repo();
      var aboutme_text = "JBrownServices is a webservices application. Messaging format are JSON, XML, SOAP ";
      $("#about_me").html(aboutme_text);
      
      $(document).ready(function () {
           //repo();
           //var aboutme_text = "JBrownServices is a webservices application. Messaging format are JSON, XML, SOAP ";
        //$("#about_me").html(aboutme_text);
        
     
      });
</script>