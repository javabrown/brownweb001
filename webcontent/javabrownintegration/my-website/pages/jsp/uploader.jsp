<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>&nbsp;</p>
<form action="../UploaderServlet" method="post" enctype="multipart/form-data" name="contentLoader" id="contentLoader">
  <p>Location Name: 
    <input name="loc_name_txt" type="text" id="loc_name_txt" size="30">
  </p>
  <p>Location Detail: </p>
  <p>
    <textarea name="loc_detail_txt" cols="70" id="loc_detail_txt"></textarea>
  </p>
  
  <p>Upload Banner Images:&nbsp;&nbsp; 
    <input name="banner_img_txt" type="file" id="banner_img_txt">
  </p>
  <p>Upload Location Images: 
    <input name="loc_images_txt" type="file" id="loc_images_txt">
  </p>
  
  <p>City: 
    <input name="city_txt" type="text" id="city_txt">
  </p>
  <p>State 
    <input name="state_txt" type="text" id="state_txt">
  </p>
  <p>Country 
    <input name="country_txt" type="text" id="country_txt">
  </p>
  <p>&nbsp; </p>
  <p> 
    <input name="btn_save" type="submit" id="btn_save" value="Save">
    <input name="btn_cancel" type="submit" id="btn_cancel" value="Cancel">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
