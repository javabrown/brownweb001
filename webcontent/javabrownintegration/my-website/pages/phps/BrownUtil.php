<?php

class BrownUtil{
  
  /**
   * Retrive the event based site theme. valid index : [1-5] 
   */
   
  public static function getSiteThemeImage(){ 
	   	$themeXmlFile = "data/site-themes.xml";
	   	
		$xml = simplexml_load_file("$themeXmlFile"); // var_dump($xml);  
		 
		$result = "";
		//$index = intval($theme_index);
		
		foreach ($xml->xpath('/themes/theme') as $theme) {
		   $theme_name =  $theme->name;
		   $valid_from =  $theme->valid_from;
		   $valid_to =  $theme -> valid_to;
		   $image1 =  $theme -> image1;
		   /*$image2 =  $theme -> image2;
		   $image3 =  $theme -> image3;
		   $image4 =  $theme -> image4;
		   $image5 =  $theme -> image5;
		   $image6 =  $theme -> image6;*/
		   
		   //$date1 = DateTime::createFromFormat('j-M-Y', $valid_from .'-'. date("Y")); // concat '-'.year
		   //$date2 = DateTime::createFromFormat('j-M-Y', $valid_to   .'-'. date("Y"));
		   $date1 = $valid_from .'-'. date("Y"); // concat '-'.year
		   $date2 = $valid_to   .'-'. date("Y");
		   
		   $current_date = date('Y-m-d');
		   
		   //echo ($valid_from .'-'. date("Y"))."<br/>";
		   
		   //if(($current_date >= $date1) && ($current_date <= $date2)){echo ($index);
		   
		   if(BrownUtil::check_in_range($date1, $date2, $current_date)){
		        $result = $image1;
				/*switch ($index) {
    				case 1:
       				 	$result = $image1;
       				 	break;
    				case 2:
        				$result = $image2;
        				break;
    				case 3:
        				$result = $image3;
        				break;
    				case 4:
        				$result = $image4;
        				break;  
    				case 5:
        				$result = $image5;
        				break; 
    				case 6:
        				$result = $image6;
        				break;           				       				      				
				}*/
		   }//end of if
		   
		   
		}//end of for loop
		
		if(isset($result)){
		   //echo $result;
		   echo "<script> $('body').css('background-image', 'url($result)');</script>";
		}
		
		echo "";
  }
  
  /**
   * Check a date if it in range.
   */
  public static function check_in_range($start_date, $end_date, $date_from_user){
    // Convert to timestamp
    $start_ts =  strtotime($start_date);
    $end_ts =  strtotime($end_date);
    $user_ts =  strtotime($date_from_user);
	//echo "1-->".$start_ts.", ".$end_ts.", ".$user_ts."<br/>".(($user_ts >= $start_ts) && ($user_ts <= $end_ts));
	 
    // Check that user date is between start & end
    return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
  }
  
  public static function redirect($url){
    header( 'Location: '. $url); 
  }
  
  public static function sendEmail($fname, $lname, $email, $subject, $msg){
     $to = "getrk@yahoo.com";
     $name = $fname." ".$lname;
     $message = "[Message From:-".$name ."] \n". $msg;
     $headers = "From:" . $email;
     // echo "ccccc";
     mail($to,$subject,$message,$headers);
     return 1;
  }
}

?>				