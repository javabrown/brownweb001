<?php
 	try{
 	  $sClient = new SoapClient('http://www.javabrown.com/test/wsdl/hello_server.php?wsdl');

 	  $params = "Raja";
 	  $response = $sClient->doHello($params);
 
       //$response=$sClient->doHello('ddd');
 
	   //echo  $response;
 	   var_dump($response);
 	   
 	   
 	} catch(SoapFault $e){
 	  echo($e->getMessage());
 	}
?>