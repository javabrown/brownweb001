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
   echo "<input type='submit' value='Define'/>";
   echo "</form>";
?>
 
<br/>

 <form  action="action-handler.php" method="post" enctype="multipart/form-data" id="btn_save_submit">
 	     <input type='hidden' name='handler-action' class='handler-action' value='upload-file'/>
	     <label>Name</label>         : <input type='text' name='handler-action-feed' class='handler-action-feed' id='handler-action-feed' value=''/><br/>
		 Select file  : <input name="uploaded" type="file" id="ufile" size="50" /><br/>
		 Description  : <input name="desc" type="text" id="ufile" size="50" /><br/>
		 <input type="submit" name="Submit" value="Save" />
         <p class="btn_save"> <input type="submit" class="btn_save" id="btn_save_submit" value="Save" style="display:none"><span id="save_status" class="btn_save"></span></input></p>		 
</form>


 <form  action="action-handler.php" method="post">
 	     <input type='hidden' name='handler-action' class='handler-action' value='read'/>
	     <input type='text' name='handler-action-feed' class='handler-action-feed' id='handler-action-feed' value='content-files.xml'/>
		 <input type='submit' value='pl'/>
 </form>
 
<script>
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
	
 