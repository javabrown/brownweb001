   /*function init(targetDiv){
		$.ajax({
						type: "GET",
						url: "data/init.xml",
						dataType: "xml",
						success: function(xml) {
							var innerHtml = "<meta http-equiv='Content-type' content='text/html; charset=utf-8' />";
							 
							$(xml).find('site-control').each(function(){
							   var title = $(this).find('title').text();
							   var copyright = $(this).find('title').text();
							   innerHtml = innerHtml +"<title>"+title+"</title>";
							   
							   $(this).find('css').each(function(){
							       $(this).find('content').each(function(){
									  var cssName = $(this).find('name').text();
									  innerHtml = innerHtml + "<link rel='stylesheet' href='"+ cssName +"' type='text/css' media='all' />";
								   });
							   });
							   
							   $(this).find('js').each(function(){
							       $(this).find('content').each(function(){
									  var jsName = $(this).find('name').text();
									  innerHtml = innerHtml + "<script type='text/javascript' src='"+ jsName +"'></script>";
								   });
							   });
							   
							});
							alert(innerHtml);
							$(targetDiv).html(innerHtml);
						}
		});
	}*/
	
	
	
    function ajaxLoad(targetDiv, serverUrl){
	   $.ajax({
						type: "GET",
						url: serverUrl,
						timeout:8000,
						dataType: "text/html",
						crossDomain: true,
						success: function(response) {
							alert("response = " + response);
							$(targetDiv).html(response);
						},
						error:function(response){
						  alert('error'+response);
						}
		});
	}

	function loadDependencies(){
	    //alert('dependency');
		$.ajax({
				type: "GET",
				url: "data/site-dependency.xml",
				dataType: ($.browser.msie) ? "text" : "xml",
				error: function(data){
				  alert('Error occurred loading the XML');
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
					var innerHtml = "";
					 
					$(xml).find('site-dependency').each(function(){
					   $(this).find('script').each(function(){
						var script_name = $(this).find('name').text();
						//alert(script_name);
						 $.getScript(script_name, function(data, textStatus, jqxhr) {
						   console.log(data); //data returned
						   console.log(textStatus); //success
						   console.log(jqxhr.status); //200
						 });
					   });
					});
				}
		});
		
		//alert('load dependencies done');
	}
	

   function init(){
		$.ajax({
						type: "GET",
						url: "data/init.xml",
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							var innerHtml = "<meta http-equiv='Content-type' content='text/html; charset=utf-8' />";
							 
							$(xml).find('site-control').each(function(){
							   var title = $(this).find('title').text();
							   var copyright = $(this).find('copyright').text();
							   innerHtml = innerHtml +"<title>"+title+"</title>";
							   
							   $('.copy').html(copyright);
							   $('title').html(title);
							});
						}
		});
		
		
			hs.graphicsDir = 'css/graphics/';
			hs.align = 'center';
			hs.transitions = ['expand', 'crossfade'];
			hs.fadeInOut = true;
			hs.dimmingOpacity = 0.8;
			hs.wrapperClassName = 'borderless floating-caption';
			hs.captionEval = 'this.thumb.alt';
			hs.marginLeft = 100; // make room for the thumbstrip
			hs.marginBottom = 80 // make room for the controls and the floating caption
			hs.numberPosition = 'caption';
			hs.lang.number = '%1/%2';

			// Add the slideshow providing the controlbar and the thumbstrip
			hs.addSlideshow({
				//slideshowGroup: 'group1',
				interval: 5000,
				repeat: false,
				useControls: true,
				overlayOptions: {
					className: 'text-controls',
					position: 'bottom center',
					relativeTo: 'viewport',
					offsetX: 50,
					offsetY: -5

				},
				thumbstrip: {
					position: 'middle left',
					mode: 'vertical',
					relativeTo: 'viewport'
				}
			});

			// Add the simple close button
			hs.registerOverlay({
				html: '<div class="closebutton" onclick="return hs.close(this)" title="Close"></div>',
				position: 'top right',
				fade: 2 // fading the semi-transparent overlay looks bad in IE
			});
	}
	
	function loadLogoSection(targetDiv){
		$.ajax({
						type: "GET",
						url: "data/logo-and-right-panel.xml",
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							var innerHtml = "";
							 
							$(xml).find('contents').each(function(){
							   $(this).find('content').each(function(){
									var logoImage = $(this).find('logo-image').text();
                                    var name = $(this).find('name').text();
									var width= $(this).find('width').text();
									var height= $(this).find('height').text();										
									innerHtml = innerHtml+
										"<h1 id='logo' style='background: url("+logoImage+") no-repeat 0 0; width: "+ width +"px; height: "+ height +"px; position: absolute; top:10;left:10;button:10;'>"+
										  "<a href='#' class='notext'>RK</a>"+
										"</h1>"+
										"<div class='socials right'>"+
										"	<ul>";
										
									$(this).find('corner-options').each(function(){
									  $(this).find('option').each(function(){
										   var optionClass = $(this).find('optionClass').text();
										   var name = $(this).find('name').text();
										   var ref = $(this).find('ref').text();
										 
										   //innerHtml = innerHtml +
											//   "	    <li class='"+optionClass+"'><a href='"+ ref +"' class='twit'>"+name+"</a></li>";
										   innerHtml = innerHtml +
											   "	    <li class='"+optionClass+"'>"+ref+"</li>";	
										   
											   
									  });
									});
									
									innerHtml = innerHtml +
										"	</ul>"+
										"</div>"+
										"<div class='cl'>&nbsp;</div>";
			
								});
							});
							 //alert(innerHtml);
							
							//$(targetDiv).html(innerHtml); *RK TEMP COMMENTED THIS TO ALLOW MANUAL PAGE CONTENT ON HEADER SECTION
							$(targetDiv).load("pages/header.php");
						}
						
						
		});
	}
	

	function loadhomeslider2(targetDiv){
		    $.ajax({
						type: "GET",
						url: "data/home-page-slider.xml",
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							var htm = "";
							var count = 0;
							 
							$(xml).find('contents').each(function(){
							   $(this).find('content').each(function(){
									var image = $(this).find('image').text();
									var text = $(this).find('text').text();
                                    var name = $(this).find('name').text();
									var width= $(this).find('width').text();
									var height= $(this).find('height').text();										
									htm = htm+
										"<a id='a1' target='_blank'>"+
													"	<img  height='"+ height +"' width='"+ width +"' src='"+ image +"' alt='--' />"+
													"	<span>"+
													"		<b>"+name+"</b><br />"+ text +"</span>"+
													"</a>";										
									count++;
								});
							});
							
							//htm = "<div id='gamesHolder'><div id='games'>"+htm+"</div></div>";
						    //alert(htm);
							$(targetDiv).html(htm);
							$('#games').coinslider({ hoverPause: false });
						}
		});
	}
	
	
	function loadhomeslider1(targetDiv){
		$.ajax({
						type: "GET",
						url: "data/home-page-slider.xml",
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							var ulText = "";
							var count = 0;
							 
							$(xml).find('contents').each(function(){
							   $(this).find('content').each(function(){
									var image = $(this).find('image').text();
									var text = $(this).find('text').text();
                                    var name = $(this).find('name').text();
									var width= $(this).find('width').text();
									var height= $(this).find('height').text();										
									ulText = ulText+										
										"<li class='slider2Image'>"+
										   "<img border='1' height='"+ height +"' width='"+ width +"' src='"+ image + "' />"+
										   "<span class='top0'><strong>"+ name +"</strong><br />"+ text +".</span>"+
										"</li>"										
									count++;
								});
							});
							ulText = "<ul id='slider2Content'>"+ulText+"</ul>";
						 
							$(targetDiv).html(ulText);
							$(targetDiv).s3Slider({
								timeOut: 5000 
							}); 
						}
		});
	}
	
	function loadhomeslider(targetDiv){
		$.ajax({
						type: "GET",
						url: "data/home-page-slider.xml",
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							//var select = $('#mySelect');
							var ulText = "";
							var count = 0;
							 
							$(xml).find('contents').each(function(){
							   $(this).find('content').each(function(){
									var image = $(this).find('image').text();
									var text = $(this).find('text').text();
                                    var name = $(this).find('name').text();
									var width= $(this).find('width').text();
									var height= $(this).find('height').text();										
									ulText = ulText+
										"<li>"+
											"<div class='item'>"+
												"<div class='text'>"+
													"<h3><em>"+text+"</em></h3>"+
													"<h2><em>"+name+"</em></h2>"+
												"</div>"+
												"<img src='"+image+"' alt='' width='" +width +"' height='" +height +"'/>"+
											"</div>"+
										"</li>";
									count++;
								});
							});
							ulText = "<ul>"+ulText+"</ul>"
							
							var nav ="<div class='slider-nav'>";
							for(var i=0; i < count; i++){
							  nav += "<a href='#' class='left notext'>"+ i +"</a>";
							}
							nav+="<div class='cl'>&nbsp;</div> </div>"
							//alert(ulText + nav);
							//$(targetDiv).html("");
							$(targetDiv).html(ulText + nav);
							initSlider();
						}
		});
	}
	
	
	    function loadhighlight(targetDiv, contentId){
		  var ref;
		  if(contentId == 0){
		    ref = "data/welcome-note.xml"
		  }
		  else{
		     ref = "data/service-note.xml"
		  }
		  
		  $.ajax({
						type: "GET",
						url: ref,
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML');
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
							var welcomeText = "";
							 
							$(xml).find('contents').each(function(){
							   $(this).find('content').each(function(){
									var text = $(this).find('text').text();
                                    var name = $(this).find('name').text();
									var width= $(this).find('width').text();
									var height= $(this).find('height').text();
									 
									welcomeText = welcomeText+ "  <h3>"+name+"</h3>";
									welcomeText = welcomeText+ "<div class='highslide-gallery' style='width: 600px; margin: auto'>";

								    $(this).find('images').each(function(){
									   $(this).find('image').each(function(){
									       var imageName = $(this).find('image-name').text();
									       var imageUrl = $(this).find('image-url').text();
										   var status =  $(this).find('status').text();
										   
										   var style="display:normal;padding:15px;"
										   if(status != 'ACTIVE'){
										     style = "display:none;padding:15px;"
										   }
										   
										   welcomeText = welcomeText + 
										    "<a class='highslide' href='"+imageUrl+"' onclick='return hs.expand(this)' style='"+style+"'>"+
											  "<img class='right' src='"+ imageUrl +"' width='110' height='110' alt='"+imageName+"'/>"+
										    "</a>";
											//alert(welcomeText);
									   });
									});
									welcomeText = welcomeText+ "</div>";
									welcomeText = welcomeText +
										"  <p>"+text+"</p>"+
										"  <a href='#' class='more'>Find out more</a>";
								});
							});
							 
							$(targetDiv).html(welcomeText);
						}
		  });
	}
		
	
	function loadProjectContent(targetDiv, contentFile){
		   $.ajax({
						type: "GET",
						url: contentFile,
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML :'+contentFile);
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
							 $(xml).find('project-content').each(function(){
							        var title = $(this).find('title').text();
									projectContent = projectContent+"<h3>"+title+"</h3>";
									
									$(this).find('contents').each(function(){
									   $(this).find('content').each(function(){
									        var id = $(this).find('id').text();
											var category = $(this).find('category').text();
											var text = $(this).find('text').text();
											var name = $(this).find('name').text();
											var width= $(this).find('width').text();
											var height= $(this).find('height').text();
											var img_slider = 
											    "<div class='carousel main1 shadow-99'>"+
												"    <a href='#' class='prev'></a>"+
												"    <div class='jCarouselLite1' id='"+id+"'>"+
												"        <ul>";											
											$(this).find('images').each(function(){
											   $(this).find('image').each(function(){
											        var url = $(this).find('url').text();
													var ref = $(this).find('ref').text();
													img_slider = img_slider+
   													    "<li>"+
														"  <a href='"+url+"' class='preview' title='--'>"+
														"    <img src='"+url+"' alt='' left='10' width='"+width+"' height='"+height+"' class='img01' alt='gallery thumbnail'/>"+
														"  </a>"+	
                                                        "</li>";														
											   });
											});
											
                                            var downloadLink =  "";
											$(this).find('downloads').each(function(){
											   var hasDownloads = $(this).find('hasDownloads').text();
											   if(hasDownloads != undefined && hasDownloads.toUpperCase() == 'TRUE'){
												   $(this).find('download').each(function(){
														var downloadName = $(this).find('downloadName').text();
														var downloadUrl = $(this).find('downloadUrl').text();
														downloadLink = downloadLink + "<a class='more right' href='"+downloadUrl+"' target='_blank'>Download</a>";														
												   });
											   }
											});
											
                                            
											var selectionMenuId = "";
											var parameter = "";
											var destination =  "";
											$(this).find('action-map').each(function(){
											  selectionMenuId = $(this).find('selectionMenuId').text();
								              parameter =  $(this).find('parameter').text();
											  destination =  $(this).find('destination').text();
											});											
											
											
											img_slider = img_slider+
												"       </ul>"+
												"   </div>"+
												"   <a href='#' class='next'></a>"+
												"    <div class='clear'></div>"+   
												"</div>"+
												"<script>$('#"+id+"').jCarouselLite({	auto: 2800,	speed: 2500, vertical: true, visible: 1	});</script>";	
												
											/*var img_slider = 
												"<div class='carousel main'>"+
												"    <a href='#' class='prev'></a>"+
												"    <div class='jCarouselLite1'>"+
												"        <ul>"+ 
												"            <li>"+
												"			  <a href='http://newyork.timeout.com/restaurants-bars/restaurants/125456/neerob'>"+
												"			   <img src='http://www.neerob.com/_/rsrc/1318221453841/Home/time_out_new_york.gif' alt=''  left='10' width='"+width+"' height='"+height+"'/>"+
												"			  </a>"+
												"			</li>"+
												"            <li>"+
												"			  <a href='http://www.nytimes.com/2011/10/05/dining/reviews/neerob-in-the-bronx-nyc-restaurant-review.html'>"+
												"			   <img src='http://www.ethnic-spicy-food-and-more.com/images/jamaicanshrimp.jpg' alt='' left='10' width='"+width+"' height='"+height+"'/>"+
												"			  </a>"+
												"		</li>"+					
												"       </ul>"+
												"   </div>"+
												"   <a href='#' class='next'></a>"+
												"    <div class='clear'></div>"+   
												"</div>"+
                                                "<script>$('.jCarouselLite1').jCarouselLite({	auto: 2800,	speed: 2500, vertical: true, visible: 1	}); alert('done');</script>";												
											  */
											projectContent = projectContent+
														"<div class='item'>"+
														"	<div class='image left shadow-99'>"+
														      img_slider+
														"	</div>"+
														"	<div class='text left'>"+
														"		<h4>"+name+"</h4>"+
														"		<p>"+text+"</p>"+
														"		<a href='#' onclick='loadMenu(\""+selectionMenuId+"\", \""+parameter+"\", \""+destination+"\");return false;' class='more'>Find out more</a>"+
														     downloadLink  +														
														"	</div>"+ 
														"	<div class='cl'>&nbsp;</div>"+
														"</div>";
														
										});
									});
							 });

							$(targetDiv).html(projectContent);
							imagePreview();
							//alert('done');
						}
		   });
	   }
	      
	   
	   function doIt(component){
	     $(component).html('<hr>hello boss<hr>');
	   }


	   
       function loadMenu(selectedMenuId, options, destination){
	        var isJustPageLoaded = false;
	        if(isEmpty(selectedMenuId)){
			  selectedMenuId = "001";//home page
			  options = "DEFAULT";
			  //destination = "pages/home.dat";
			  destination = "pages/cms-home-page.dat";
			  isJustPageLoaded = true;
			  //renderMenuAndNevigationBarWithMenuItemXml();
			}
			applyMenuContent(selectedMenuId, options, destination);
			 
			renderMenuAndNevigationBarWithMenuItemXml(selectedMenuId, options, destination);
			 
			executeCustomParams(); // execute blind url.
        }
 
        function renderMenuAndNevigationBarWithMenuItemXml(selectedMenuId, options, destination){
       		    $.ajax({
								type: "GET",
								url: "data/menu.xml",
								dataType: ($.browser.msie) ? "text" : "xml",
								error: function(data){
								  alert('Error occurred loading the XML');
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
									var menu = "<ul>";

									$(xml).find('menu').each(function(){
									   $(this).find('menuItem').each(function(){
									        var id = $(this).find('id').text();
											var name = $(this).find('name').text();
											var ref = $(this).find('ref').text();
											var selection = $(this).find('selection').text();
											
											var bootstrap_icon = $(this).find('icon').text();
											
											if(!isEmpty(selectedMenuId) && selectedMenuId == id){
											  selection ='active'
											}
											else{
											  if(!isEmpty(selectedMenuId)){
											    selection ='inactive';
											  }
											}
										    
											var parameter = "";
											var destination =  "";
											$(this).find('action-map').each(function(){
											  //selectionMenuId = $(this).find('selectionMenuId').text();
								              parameter =  $(this).find('parameter').text();
											  destination =  $(this).find('destination').text();
											});												
											
											//menu = menu+ "<li id='"+id+"'><a href='#' onClick='loadMenu(\""+id+"\",\""+parameter+"\",\""+destination+"\");return false;' class='"+selection+"'>"+name+"</a></li>";
											menu = menu+ "<li id='"+id+"'><a href='"+ref+"' class='"+selection+" menu' onclick='effectOnClick(this);' onmouseover='effectOnMouseOver(this)' onmouseout='effectOnMouseOut()'><i class='"+bootstrap_icon+"'></i>"+name+" </a></li>";
													 
										});      

									});
									menu = menu+" </ul><div class='cl'>&nbsp;</div>";
									 
									$('#navigation').html(menu);
                                    $('.footer-nav').html(menu);
								}
				});	  

       }

    
      function effectOnClick(menu){
      	   //alert(menu);
	   $('.menu').removeClass('menu_div_bg');
	   $('.menu').removeClass('selected');
	   $(menu).addClass('menu_div_bg');
	   $(menu).addClass('selected');
      }
	
      function effectOnMouseOver(menu){
      	   //alert(menu);
	   $('.menu').removeClass('menu_div_bg');
	   $(menu).addClass('menu_div_bg');
      }
    
      function effectOnMouseOut(){
      	   //alert(menu);
	   $('.menu').removeClass('menu_div_bg');
	   $('.selected').addClass('menu_div_bg');
      }
    
 
       
       function loadGoogleMap(rendererComponent, title){
	      var map_canvas= "<div id='map_canvas' style='width: "+$(rendererComponent).width()+"px; height: 250px'></div>";
		 // $("#mapText").html(title);
		  $(rendererComponent).html(map_canvas);
		  if (GBrowserIsCompatible()) {
			var map = new GMap2(document.getElementById("map_canvas"))
			map.setCenter(new GLatLng(40.8362083, -73.8547637), 16); 
			//map.setMapType(G_HYBRID_MAP);
            map.setUIToDefault();
			map.addControl(new GSmallMapControl());
			map.addControl(new GMapTypeControl());
			
			map.panTo(new GLatLng(40.8362083, -73.8547637), 16);
		  }
	   }
 
       function applyMenuContent(selectedMenuId, options, destination){
		   
		   var previousSelectedMenuId = $('#site-main-content').attr('contentSelectionId');
		   //alert('previousContentId-'+previousContentId);
		   if(previousSelectedMenuId > 0 && previousSelectedMenuId == selectedMenuId){
		     return;
		   }
		   else{
		     $('#site-main-content').html("<center><hr/><br/><br/><img src='http://mentalized.net/activity-indicators/indicators/ilcu/roller.gif'/></center>");
		     $('#site-main-content').attr('contentSelectionId', ''+selectedMenuId);
		     $('#site-main-content').load(destination, function(data) {
		       //$('#site-main-content').html(data);
			   $('#site-main-content').show("slow");
		     });
		   }
		 
	   }
	
	   function hide(component, flag){
	       alert('hide is called'+ $(component).html());
	      if(flag){
		    $(component).hide();
		  }
	      else{
		    $(component).show();
		  }
	   }
	   
	   function isEmpty(str) {
			return (!str || 0 === str.length);
	   }

	   
	   function imagePreview () {
					/* CONFIG */
						
						xOffset = 10;
						yOffset = 30;
						
						// these 2 variable determine popup's distance from the cursor
						// you might want to adjust to get the right result
						
					/* END CONFIG */
					$("a.preview").hover(function(e){
						this.t = this.title;
						this.title = "";	
						var c = (this.t != "") ? "<br/>" + this.t : "";
						$("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");								 
						$("#preview")
							.css("top",(e.pageY - xOffset) + "px")
							.css("left",(e.pageX + yOffset) + "px")
							.fadeIn("fast");						
					},
					function(){
						this.title = this.t;	
						$("#preview").remove();
					});	
					$("a.preview").mousemove(function(e){
						$("#preview")
							.css("top",(e.pageY - xOffset) + "px")
							.css("left",(e.pageX + yOffset) + "px");
					});			
	    }
		
		function download(){
		     alert('download');
			 e.preventDefault();  //stop the browser from following
			 $('#action-frame').attr('src','pages/food-images/sample-5.jpg');
			 alert('downloaded');
		}

	   	/*
		  Create 3D slider for any kind of component like textbox, image, button...
		  >sliderId : id of the 3-d slider. example: defaultCube
		  >widthValue: width of 3-d slider  example: 300
		  >heightValue: height of 3-d slider. example: 120
		  >arrayOfImageNames: array of image path. 
		  > arrayOfText1 : array of text.
		  > arrayOfText2 : array of text.
		*/
		function create3DSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
			var image_names = arrayOfImageNames;
			
			var content = "";
			for(var i=0; i<image_names.length; i++){
			   var image = "<img src='"+ image_names[i] +"' href='http://www.yahoo.com' alt='slands' title='Islands'/>";
			   content = content + image;
			}
			
			var image_content = "";
			$("#"+sliderContainerId).attr('style', "width: "+ widthValue +"px; height: "+ heightValue +"px;");
 
	        
			var html = $("#"+sliderContainerId).html(content);
			if($.browser.msie){
					$("#"+sliderContainerId).imagecube({direction : 'random',
												  beforeRotate: function(current, next){ if(html == undefined){alert('undefined');$("#"+sliderContainerId).html(content);} },  
												  afterRotate: function(current, next) { }  
					}); 
			}else{
				    $.getScript("", function(data, textStatus, jqxhr) {
					   console.log(data); //data returned
					   console.log(textStatus); //success
					   console.log(jqxhr.status); //200
					   console.log('Load was performed.');
						
					   $("#"+sliderContainerId).imagecube({direction : 'random',
													  beforeRotate: function(current, next){ if(html == undefined){alert('undefined');$("#"+sliderContainerId).html(content);} },  
													  afterRotate: function(current, next) { }  
						}); 
				    });	
			}
			 

										
		  
			//$("#"+sliderContainerId).imagecube('start');
		}

		function createCoinSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var htm = "";
				var count = 0;
				
				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }

					  htm = htm+
								"<a id='a1' href='http://www.javabrown.com/' target='_blank'>"+
											"	<img  height='"+ heightValue +"' width='"+ widthValue +"' src='"+ image_names[i] +"' alt='--' />"+
											"	<span>"+
											"		<b>"+name+"</b><br />"+ text +"</span>"+
											"</a>";		
				}
				
				$('#'+sliderContainerId).coinslider({ hoverPause: false });
		}
		
		function createShadowSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var ulText = "";
				var count = 0;
				
				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }
					  
					  ulText = ulText+										
										"<li class='slider2Image shahow'>"+
										   "<img border='1' height='"+ heightValue +"' width='"+ widthValue +"' src='"+ image_names[i] + "' />"+
										   "<span class='top0'><strong>"+ name +"</strong><br />"+ text +".</span>"+
										"</li>"	
				}
				ulText = "<ul id='"+ sliderContainerId +"'>"+ulText+"</ul>";
				
				$("#"+sliderContainerId).html(ulText);
			    $("#"+sliderContainerId).s3Slider({timeOut: 5000}); 
		}
		
		function createGaleriaSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var divText = "";
				var count = 0;
		        var galleria_id = 'galleria-'+sliderContainerId;
				divText = "<div id="+galleria_id+" style='height:"+ heightValue +"px; width="+widthValue+"px'>";

				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }
					  
					  divText = divText+	
							  "<a href='"+ image_names[i] +"'>" +
								"<img data-title='" + name + "' data-description='"+ text +"' src='"+ image_names[i] +"' />"+
							  "</a>";
				}
				var id = sliderContainerId + "-" + image_names.length;
				divText = divText +"</div>";
				
				$("#"+sliderContainerId).html(divText);
			    $('#'+galleria_id).die();
				$('#galleria-parent-element').html('');
			    Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
				Galleria.configure({
					lightbox: true,
					fullscreenCrop:true
				});
                Galleria.run('#'+galleria_id);
				
		}

		function createHighSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var divText = "";
			    var elementHeight = 100;
				var elementWidth = 100;
				divText = "<div class='highslide-gallery' style='height:auto;padding:30px;padding-right:130px;width="+widthValue+"px'>";
						  
				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }
					  
					  divText = divText+
							  "<a class='highslide' href='"+ image_names[i] +"' onclick='return hs.expand(this)' style='display:normal;padding:15px;'>"+
								 "<img class='shadow2-99' src='"+ image_names[i] +"' alt='" + name + "' height='"+elementHeight+"' width='"+elementWidth+"' />"+
							  "</a>";							  
							  
				}
				divText = divText +"</div>";
				$("#"+sliderContainerId).html(divText);
		}
		
		function createCycleSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var divText = "";

				var slide_id = 'slideshow-' + sliderContainerId;
				
				divText = "<div id='"+ slide_id +"'>";
						  
				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }
				
					  divText = divText+							  
							  "<a href='#'>"+
				                 "<img src='"+ image_names[i]+"' alt='icon' width='"+widthValue+"' height='"+heightValue+"' border='"+0+"' />"+
 			                  "</a>"
				}
				
				divText = divText +"</div>";
				$("#"+sliderContainerId).html(divText);
				$('#'+slide_id).cycle({
								fx:     'fade', /* fade,scrollUp,shuffle, */
								speed:  'slow',
								timeout: 3000,
								pager:  '#slider_nav'
				});
		}

		function createPanoramaSlider(sliderContainerId, widthValue, heightValue, arrayOfImageNames, arrayOfText1, arrayOfText2){
            	var image_names = arrayOfImageNames;
				var ulText = "";
			    var elementHeight = 100;
				var elementWidth = 100;
				var panorama_id = 'panorama-' + sliderContainerId;
				ulText = "<ul id='"+panorama_id+"'>";
						  
				for(var i=0; i<image_names.length; i++){
					  var name = "--";
					  var text = "--";
					  if(arrayOfText1 != undefined){
						name = arrayOfText1[i];
					  }
					  
					  if(arrayOfText2 != undefined){
						text = arrayOfText2[i];
					  }
					  
					  ulText = ulText+							  
							  "<li>"+
						        "<a href=''><img src='"+ image_names[i] +"' alt='" + name + "' title='" + text + "'/></a>"+
					          "</li>";
				}
				ulText = ulText +"</ul>";
				$("#"+sliderContainerId).html(ulText);
			    
				$('ul#'+panorama_id).animatedinnerfade({
							speed: 2000,
							timeout: 10000,
							type: 'sequence',
							containerheight: '498px',
							containerwidth: 'auto',
							animationSpeed: 15000,
							animationtype: 'slide',
							//bgFrame: 'img/frame.gif',
							controlBox: 'none',
							controlBoxClass: 'mycontrolboxclass',
							controlButtonsPath: 'img',
							displayTitle: 'yes'
				});				
		}
		
		function createFixedHiddenPageMenu(fixed_xml){
					var ul_text = "<ul id='hidden-navigation'>"
					 
						$(fixed_xml).find('menuItem').each(function(){
								var id = $(this).find('id').text();
								var name = $(this).find('name').text();
								var ref = $(this).find('ref').text();
							 										
								ul_text += "<li class='lic'><a href='#'><img src='"+ref+"' width='98' height='70'/></a></li>";	 
						});
					 
					ul_text += "</ul>";
					
					$("#hidden-navigation-container").html(ul_text);
					
					$(function() {
						$('#hidden-navigation a').stop().animate({'marginLeft':'-85px'},1000);

						$('#hidden-navigation > .lic').hover(
							function () {
								$('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
							},
							function () {
								$('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
							}
						);
					});
		}
		
		/*
		  apply page level content to a page.
		  there should be a page-content-xxx.xml for each page
		  Script will select each page content and apply to the defined conatiner-id
		*/
		function load_level_page_content(pageContentFile){
			   $.ajax({
							type: "GET",
							url: pageContentFile,
							dataType: ($.browser.msie) ? "text" : "xml",
							error: function(data){
							  alert('Error occurred loading the XML (File not found) :'+pageContentFile);
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
										var default_page_height = $(this).find('default-page-height').text();
										var fixed_page_hidden_menu = createFixedHiddenPageMenu($(this).find('fixed-menu'));
										
										$("#internal-page-container").attr("style","height:"+default_page_height+"px;");
										
										$(this).find('page-sliders').each(function(){ // rendering page slider content.
										   $(this).find('page-slider').each(function(){
											 var container_id = $(this).find('container-id').text();
											 var slider_type = $(this).find('slider-type').text();
											 var slider_width = $(this).find('slider-width').text();
											 var slider_height = $(this).find('slider-height').text();
											 
											 var slider_images = [];
											 var text1 = [];
											 var text2 = [];
											 $(this).find('slider-images').each(function(){
												 $(this).find('image').each(function(){
												   var image_url = $(this).find('url').text();
												   var txt1 = $(this).find('text1').text();
												   var txt2 = $(this).find('text2').text();
												   if(image_url != undefined && slider_images != undefined){
												     slider_images.push(image_url);
												   }
												   
												   if(txt1 != undefined && text1 != undefined){
												     text1.push(txt1);
												   }
												   
												   if(txt2 != undefined && text2 != undefined){
												     text2.push(txt2);
												   }
												   
												 });
											 });
											 
											 if(slider_type == '3D-SLIDER'){
												create3DSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }
											 if(slider_type == 'COIN-SLIDER'){
											    createCoinSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }
											 if(slider_type == 'GALERIA-SLIDER'){
											    createGaleriaSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }
											 if(slider_type == 'HIGH-SLIDER'){
											    createHighSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }
											 if(slider_type == 'CYCLE-SLIDER'){
											   createCycleSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }
											 
											 if(slider_type == 'PANORAMA-SLIDER'){
											   createPanoramaSlider(''+container_id, slider_width, slider_height, slider_images, text1, text2);
											 }											 
											 
										   });
										});
										
										$(this).find('page-text-contents').each(function(){ // rendering text content.
										   $(this).find('text-content').each(function(){
											 var container_id = $(this).find('container-id').text();
											 var linked_content = $(this).find('linked-content').text();
											 embed_exteren_content(linked_content, container_id);
											 //$('#'+container_id).html(text_content);
										   });
										});
										
										
										$(xml).find('htm-contents').each(function(){
										   $(this).find('htm-content').each(function(){
											  container_id = $(this).find('container-id').text();
											  text = $(this).find('caption').text();
											  htm = $(this).find('htm').text();
											  $("#"+container_id).html(htm);
											  $("#"+container_id+"_text").html(text); // rt it will guess
										   });
										});
										
								});
							}
			   });
		   }
		   
		   function embed_exteren_content(contentFile, render_component_id){ 
	  		   $.ajax({
						type: "GET",
						url: contentFile,
						dataType: ($.browser.msie) ? "text" : "xml",
						error: function(data){
						  alert('Error occurred loading the XML :'+contentFile);
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
							    projectContent = $(this).find('content').text();
							});
							//alert($("#"+render_component_id).html());

							$("#"+render_component_id).html(projectContent);
							//alert('embed done');
						}
		        });
	        } 
			
			function open(urlParam){
			          //location.href = $("#productlist option:selected").val();
					  var url = location.protocol + '//' + location.host + location.pathname;
					  //alert(url);
					  //location.href = url;
					  location.hash = url + "?"+urlParam;
			}
			
            function urlReset(){
			          //location.href = $("#productlist option:selected").val();
					  var url = location.protocol + '//' + location.host + location.pathname;
					  //alert(url);
					  //location.href = url;
					  location.hash = url;
					  location.href  = url;
			}
			
			//function hasCustomParam(){
			//    var param = ($.urlParam('param1'));   
			//	if(param != undefined && param != ''){
			//		applyMenuContent("", "", param);
			//	}
			//}
			
            function executeCustomParams(){
					  var url = location.protocol + '//' + location.host + location.pathname;

					  $.urlParam = function(name){
							var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
							
							if(results != null && results.length > 0){
							 return results[1] || 0;
							}
					  }
						 
					  var param = ($.urlParam('param1'));   
					  if(param != undefined && param != ''){
						applyMenuContent("", "", param);
					  }
					  //urlReset();
			}
			
			function getBrownCMSContent(templateEmbedref, targetId){
								    $("#"+targetId).html("<div><img src='pages/images/busy-indicator.gif'/></div>");
								    var ref = "admin/admin-php/" + templateEmbedref;
									$("#"+targetId).load(ref);
			}

        
         						