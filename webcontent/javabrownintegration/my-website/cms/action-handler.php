 <?php
   
   $handlerAction = $_POST['handler-action']; 
   $handlerActionFeed = $_POST['handler-action-feed'];
	 
   if($handlerAction == 'load-contents'){
     loadContent($handlerActionFeed);
   }
   else if($handlerAction == 'save-contents'){
     saveContent($handlerActionFeed);
   }
   else if($handlerAction == 'upload-file'){
     uploadFile($handlerActionFeed);
   }
   else {
     perl($handlerAction, $handlerActionFeed);
   }
   
   function loadContent($fileName)
   {
	$fh = fopen($fileName, 'r');
	$theData = fread($fh, filesize($fileName));
	$theData =  htmlentities($theData);
	$theData = trim($theData);
	//echo "alert($theData)";
	echo  $theData;
    fclose($fh);
   }
   
   function saveContent($fileName){
	$fh = fopen($fileName, 'w') or die("Error: can't open file");
	$stringData = $_POST['content']; 
	//echo "content: $stringData";
	fwrite($fh, $stringData);
	fclose($fh);
	print('saved');
   }
   
   function uploadFile($newFileName){
	 $target = "upload/"; 
	 $target = $target . basename( $_FILES['uploaded']['name']) ; 
	 $ok=1; 
	 $fileSize =  $_FILES['uploaded']['size'];;
	 $fileType = $_FILES['uploaded']['type'];
	 
	 if ($fileSize > 3500) { 
		 $ok=0; 
	 }
	 
	 if ($fileType =="text/php" || $fileType =="application/msword") { 
		 $ok=0; 
	 }
	 
	 if ($ok==0) { 
		Echo "FALSE"; 
	 }
	 else {
		 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)){ 
			echo "TRUE";
		 } 
		 else 
		 { 
			echo "TRUE";
		 } 
	 } 
   }
   
   function perl($handler, $feed){
     //echo ('calling ==> perl action.pl '.$handler.' '.$feed);
	 //echo('<br>');
     echo system('perl action.pl '.$handler.' '.$feed);
	 //echo '<br>done';
   }
  
  ?>