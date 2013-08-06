<?php 
 $target = "upload/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 $fileSize =  $_FILES['uploaded']['size'];;
 $fileType = $_FILES['uploaded']['type'];
 
 
 //This is our size condition 
 if ($fileSize > 3500) 
 { 
	 //echo "Your file is too large.<br>"; 
	 $ok=0; 
 }
 
 //This is our limit file type condition 
 if ($fileType =="text/php" || $fileType =="application/msword") 
 { 
	// echo "No PHP/DOC files<br>"; 
	 $ok=0; 
 }
 
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) 
 { 
	Echo "FALSE"; 
 }
 
 //If everything is ok we try to upload it 
 else 
 {
	 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
	 { 
		//echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded"; 
		echo "TRUE";
	 } 
	 else 
	 { 
		echo "TRUE";//"Sorry, there was a problem uploading your file."; 
	 } 
 } 
 ?> 