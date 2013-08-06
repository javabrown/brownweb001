<?php
	 
 	//if(!extension_loaded("soap")){
 	//  dl("php_soap.dll");
 	//}
 	
	 
 	function doHello($yourName){
 	 echo '-==>==>'.$yourName;
 	 
 	  return "Hello, ".$yourName;
 	}
	
 	ini_set("soap.wsdl_cache_enabled","0");
 	$server = new SoapServer("hello.wsdl");
	   
 	$server->addFunction("doHello");
 	$server->handle();
?>