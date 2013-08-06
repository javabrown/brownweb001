	function load_level_page_content(targetDiv, pageContentFile){
		   $.ajax({
						type: "GET",
						url: pageContentFile,
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML :'+pageContentFile);
						},						
						success: function(data) {
							var xml;
							if (typeof data == "string") {
							   xml = new ActiveXObject("Microsoft.XMLDOM");
							   xml.async = false;
							   xml.loadXML(data);
							} else {
							   xml = data;
							}
							var projectContent = "";
							$(xml).find('page-content').each(function(){
							        var page_id = $(this).find('page-id').text();
							        var page_name = $(this).find('page-name').text();
									
									$(this).find('page-sliders').each(function(){ // Reading page slider content.
									   $(this).find('page-slider').each(function(){
									     var container_id = $(this).find('container-id').text();
										 var slider_type = $(this).find('slider-type').text();
										 var slider_width = $(this).find('slider-width').text();
										 var slider_height = $(this).find('slider-height').text();
										 
										 var slider_images = [];
										 $(this).find('slider-images').each(function(){
										     $(this).find('image').each(function(){
										       var image_url = $(this).find('url').text();
											   slider_images.push(image_url);
											 });
										 });
										 
										 if(slider_type == '3D-SLIDER'){
										    create3DSlider(''+container_id, slider_width, slider_height, slider_images);
										 }
									   });
									});
							});
						}
		   });
	   }
	   
	    