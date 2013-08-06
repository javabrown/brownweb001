 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
 
 <?php

$doc = new DOMDocument();
$doc->load( 'content-files.xml' );

$contentFiles = $doc->getElementsByTagName( "content-file" );
   echo "<form name='content-form' id='content-form' action='action-handler.php' method='post'>";
   echo "<input type='hidden' name='handler-action' id='handler-action' value='load-contents'/>";
   echo "<input type='hidden' name='handler-action-feed' class='handler-action-feed' value=''/>";
   echo "Select Template : <select id=''>";
   foreach( $contentFiles as $contentFile )
	{
	  $names = $contentFile->getElementsByTagName( "name" );
	  $name = $names->item(0)->nodeValue;
	  
	  $descs= $contentFile->getElementsByTagName( "desc" );
	  $desc= $descs->item(0)->nodeValue;
	  
	  echo " <b>$name - $desc \n</b><br>";
	  echo "<option name='$name' value='$name' onclick='$(\".btn_save\").hide();$(\".handler-action-feed\").val(\"$name\");return;'>$name --> ($desc)  </option>";
	}
   echo "</select>";
   echo "<input type='submit' value='open'/>";
   echo "</form>";
?>
 

 <form id='btn_save_submit' action='action-handler.php'  method="post">
    <br/><textarea id="content" name='content' style="width: 859px; height: 278px;"></textarea >
	    <br/><input type='hidden' name='handler-action' class='handler-action' value='save-contents'/>
	<br/><input type='hidden' name='handler-action-feed' class='handler-action-feed' id='handler-action-feed' value=''/>
	<br>
	<p class="btn_save"> <input type="submit" class="btn_save" id="btn_save_submit" value="save" style="display:none"><span id="save_status" class="btn_save"></span></input></p>
 
 </form>
 
 
 
	  
 

	<script>
	
	//function post(formName, resultRenderer){ alert('post called' +$(formName).attr( 'action' ) + $(formName).serialize()); 
	//   var url = $(formName).attr( 'action' );
	//   var data = $(formName).serialize();
	   
	//   /*$.post( url, $(formName).serialize(),
	//		  function( data ) {
	//			  var content = $( data ).text();   alert("result ="+content);
	//			  $(resultRenderer).empty().append( content );
	//		  }
	//		);*/
	//
	//	$.ajax({
	//	  type: 'POST',
	//	  url: url,
	//	  data: data,
	//	  success: success,
	//	  dataType: "xml"
	//	});	
	//}
	
	//function success(data){ 
	//	var content = $( data ).text();   alert("result ="+content);
	//	$(resultRenderer).html( content );	
	//}
	
	  
 

		  $("#content-form").submit(function(event) {
		   
            $("#content").html("");
			/* stop form from submitting normally */
			 event.preventDefault(); 
				
			/* get some values from elements on the page: */
			 var $form = $( this ),
				term = $form.serialize(),
				url = $form.attr( 'action' );
			 //alert(term);
			 $.post( url,  term  ,
					   function( data ) { 
					     $("#content").html(data);
						 $(".btn_save").show();
						 $("#save_status").html("");
					   }
			 );
		  }); 

		  $("#btn_save_submit").submit(function(event) {

			/* stop form from submitting normally */
			 event.preventDefault(); 
				
			/* get some values from elements on the page: */
			 var $form = $( this ),
				term = $form.serialize(),
				url = $form.attr( 'action' );
			 //alert(term);
			 $.post( url,  term  ,
					   function( data ) { 
					     $("#save_status").html( data);
						 $("#btn_save").show();
					   }
			 );
		  }); 
		  
	</script>
 