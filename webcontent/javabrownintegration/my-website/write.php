<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST['content']; 
echo "content: $stringData";
fwrite($fh, $stringData);
fclose($fh);
print('saved');
?>