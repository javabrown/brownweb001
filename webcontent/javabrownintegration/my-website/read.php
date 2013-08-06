

<html> 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
 
 <form action="write.php" method="post">
    <textarea id="content" name='content' column="10" row="10"></textarea >
	<br><input type="submit" value="save"></input>
 </form>
 
 <hr><br>
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
			<form  action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
						<td><strong>Single File Upload </strong></td>
						</tr>
						<tr>
						<td>Select file
						<input name="uploaded" type="file" id="ufile" size="50" /></td>
						</tr>
						<tr>
					      <td align="center"><input type="submit" name="Submit" value="Upload" /></td>
						</tr>
					</table>
				</td>
			</form>
			
			<!--<button onclick="alert( $('#form1').serialize()), $.post('upload.php', $('#form1').serialize()), alert('done')">Save</button>-->
		</tr>
	</table>
 <hr>
 
 
 
	  
	  <div id="result"></div>

	<script>
	  /* attach a submit handler to the form */
	  $("#form1").submit(function(event) {

		/* stop form from submitting normally */
		event.preventDefault(); 
			
		/* get some values from elements on the page: */
		var $form = $( this ),
			term = $form.find( 'input[name="s"]' ).val(),
			url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, { s: term },
		  function( data ) {
			  var content = $( data ).text();
			  $( "#result" ).empty().append( content );
		  }
		);
	  });
	</script>


 
<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
$theData =  htmlentities($theData);
echo "<div id='hidden_content' style='display:inline' val='$theData'>$theData</div>";

fclose($fh);
?>

<script>  $("#content").attr('value',  $("#hidden_content").attr('val')); </script>

 


</html>