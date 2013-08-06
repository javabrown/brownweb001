// JavaScript Document

function validimi_kontakti(){

	shkurt = document.contact_form;
	
	if(shkurt.name.value=="Name"  || shkurt.name.value=="" || shkurt.name.value==null) {	
		alert("Please write your name!"); 
		shkurt.name.focus();
		return false;
	}
	
	if(shkurt.email.value=="E-Mail"  || shkurt.email.value==null  || shkurt.email.value=="") {	
		alert("Please write your e-mail address!"); 
		shkurt.email.focus();
		return false;

	}
	
	if(shkurt.message.value=="Message" || shkurt.message.value==null  || shkurt.message.value=="") {	
		alert("Please write your message!"); 
		shkurt.message.focus();
		return false;
	}}
	
function project_twitter(){
		var tweeti_aktiv = $('.p_tweeti_aktiv');
		var tweeti_tjeter;
		if (tweeti_aktiv.next().length == 0) tweeti_tjeter = $(".tweet_list li").eq(0); else tweeti_tjeter = tweeti_aktiv.next();
		var tweeti_tjeter_index = tweeti_tjeter.index();
		$('.tweeti_mbrapa').removeClass('tweeti_mbrapa').css('opacity','0');
		tweeti_aktiv.addClass('tweeti_mbrapa').removeClass('p_tweeti_aktiv');
		$('.tweet_list li:eq('+tweeti_tjeter_index+')').removeClass('tweeti_mbrapa').addClass('p_tweeti_aktiv').animate({opacity:'1'},500);
		$('.tweeti_mbrapa').animate({opacity:'0'},500);}

function footer_twitter(){
		var tweeti_aktiv = $('.f_tweeti_aktiv');
		var tweeti_tjeter;
		if (tweeti_aktiv.next().length == 0) tweeti_tjeter = $(".tweet_footer_list li").eq(0); else tweeti_tjeter = tweeti_aktiv.next();
		var tweeti_tjeter_index = tweeti_tjeter.index();
		$('.f_tweeti_mbrapa').removeClass('tweeti_mbrapa').css('opacity','0');
		tweeti_aktiv.addClass('f_tweeti_mbrapa').removeClass('f_tweeti_aktiv');
		$('.tweet_footer_list li:eq('+tweeti_tjeter_index+')').removeClass('f_tweeti_mbrapa').addClass('f_tweeti_aktiv').animate({opacity:'1'},500);
		$('.f_tweeti_mbrapa').animate({opacity:'0'},500);}
		
function rahato_imigjat_balline(){
	$('.bg_image').each(function() {
		
		var heighti = $(this).parent().height();
		var widthi = $(this).parent().width();
		///alert(heighti+' '+widthi);
		var img = new Image();
		img.src = $(this).attr("src");
		//alert(img.src);
		
		var canvasWidth = parseInt(widthi);
		var canvasHeight = parseInt(heighti);

		var minRatio = canvasWidth / img.width;
		var newImgWidth = minRatio * img.width;
		var newImgHeight = minRatio * img.height;
		$(this).css('width',newImgWidth+'px');
		if(newImgHeight > 600) $(this).css('height',newImgHeight+'px');
		
		var newImgX = (canvasWidth - newImgWidth) / 2;
		var newImgY = (canvasHeight - newImgHeight) / 2;
		
		if(newImgY < 0) $(this).css('top',newImgY+'px');
		$(this).css('left',newImgX+'px');
		
		});
}

var slider_auto_var;
var slideri_timer = 8000;
var vija_timer = slideri_timer - 300;
var obj_3_exit = slideri_timer - 500;
var obj_1_exit = slideri_timer - 800;
var obj_2_exit = slideri_timer - 1000;
var obj_4_exit = slideri_timer - 200;


function slider_auto() {
		
		var slidi_aktiv = $('.slidi_aktiv');
		var slidi_tjeter;
		if (slidi_aktiv.next().length == 0) slidi_tjeter = $("#home_slider ul li").eq(0); else slidi_tjeter = slidi_aktiv.next();
			$('.slidi_mbrapa').removeClass('slidi_mbrapa').animate({opacity:'0'},0);
			var slidi_tjeter_index = slidi_tjeter.index();
			slidi_aktiv.addClass('slidi_mbrapa').removeClass('slidi_aktiv');
			$('#top_borderi_kuq').animate({width:'100%'},vija_timer);
			$('#home_slider ul li:eq('+slidi_tjeter_index+')').removeClass('slidi_mbrapa').addClass('slidi_aktiv').stop(true,true).animate({opacity:'1'},800,function(){
				$('#top_borderi_kuq').animate({width:'0%'},0);
				$(this).find('.slide_1_obj_1').removeClass("daljamajtas_obj1").addClass('hyrjamajtas_obj1').delay(obj_1_exit).queue(function(next){
					$(this).removeClass("hyrjamajtas_obj1").addClass('daljamajtas_obj1');
					next();
				});
				
				$(this).find('.slide_1_obj_2').removeClass("daljamajtas_obj2").addClass('hyrjamajtas_obj2').delay(obj_2_exit).queue(function(next){
					$(this).removeClass("hyrjamajtas_obj2").addClass('daljamajtas_obj2');
					next();
				});
				
				$(this).find('.slide_1_obj_3').removeClass("daljamajtas_obj3").addClass('hyrjamajtas_obj3').delay(obj_3_exit).queue(function(next){
					$(this).removeClass("hyrjamajtas_obj3").addClass('daljamajtas_obj3');
					next();
				});
				
				$(this).find('.slideri_read_stores').removeClass("daljamajtas_obj3").addClass('hyrjamajtas_obj3').delay(obj_3_exit).queue(function(next){
					$(this).removeClass("hyrjamajtas_obj3").addClass('daljamajtas_obj3');
					next();
				});
				
			});
			}
		

var hapi = 1;
function stafi_auto() {
	
	var total_li = $('.staff_box ul li').size();
	var total_hapa = total_li / 4;
	total_hapa = Math.round(total_hapa);
	total_hapa = total_hapa-1;
	
	if(hapi < total_hapa ) {
		var margin_top = hapi * 165;
		$('.staff_box ul').animate({marginTop:'-'+margin_top+'px'},400);
		hapi++;
	} else {
		hapi = 1;
		$('.staff_box ul').animate({marginTop:'0px'},400);
	}	
}
$(function(){
	
	staffi_auto_var = setInterval(stafi_auto,5000);
	
	$('#staff_shigjeta_bottom').live('click',function(){
		clearInterval(staffi_auto_var);
		var total_li = $('.staff_box ul li').size();
		var total_hapa = total_li / 4;
		total_hapa = Math.round(total_hapa);
		total_hapa = total_hapa-1;
		
		if(hapi < total_hapa ) {
			$('.staff_box ul').animate({marginTop:'-=165px'},400);
			hapi++;
		}
	});
	
	$('#staff_shigjeta_top').live('click',function(){
		clearInterval(staffi_auto_var);
		
		if(hapi > 1 ) {
			--hapi;
			//var margin_top = hapi * 165;
			$('.staff_box ul').animate({marginTop:'+=165px'},400);
			//alert(hapi+' '+margin_top);
		}
	});
	
	$('.staff_box').live('mouseenter',function(){
		clearInterval(staffi_auto_var);
	});
	
	$('.staff_box').live('mouseleave',function(){
		staffi_auto_var = setInterval(stafi_auto,5000);
	});

	setInterval(rahato_imigjat_balline,1);
	slider_auto();
	slider_auto_var = setInterval(slider_auto,slideri_timer);
	
	$('.top_borderi_kuq').animate({width:'100%'},5000);
	
	$('#n_b_next').live('click',function(){
		if($("#n_b_aktivi").next('a').length > 0) {
			$('.news_balline_foto_mbajtesi ul').animate({marginLeft:'-=285px'},400);
			$('.news_balline_lajmi_mbajtesi ul').animate({marginLeft:'-=285px'},700);
			$("#n_b_aktivi").next('a').attr('id','n_b_aktivi').prev('a').attr('id','');
		} else {
			$('.news_balline_foto_mbajtesi ul').animate({marginLeft:'0px'},400);
			$('.news_balline_lajmi_mbajtesi ul').animate({marginLeft:'0'},700);
			$('.news_balline_navi_in div a').attr('id','');
			$('.news_balline_navi_in div a:first').attr('id','n_b_aktivi');
		}
	});
	
	$('#n_b_prev').live('click',function(){
		if($("#n_b_aktivi").prev('a').length > 0) {
			$('.news_balline_foto_mbajtesi ul').animate({marginLeft:'+=285px'},400);
			$('.news_balline_lajmi_mbajtesi ul').animate({marginLeft:'+=285px'},700);
			$("#n_b_aktivi").prev('a').attr('id','n_b_aktivi').next('a').attr('id','');
		} else {
			var pozita = $('.news_balline_navi_in div a:last').index();
			var margini = pozita * 285;
			$('.news_balline_foto_mbajtesi ul').animate({marginLeft:'-'+margini+'px'},400);
			$('.news_balline_lajmi_mbajtesi ul').animate({marginLeft:'-'+margini+'px'},700);
			$('.news_balline_navi_in div a').attr('id','');
			$('.news_balline_navi_in div a:last').attr('id','n_b_aktivi');
		}
	});
	
	var service_total = $('.services_slider ul li').size();
	
	if(service_total <= 4) {
		$('#services_right').fadeOut('fast');
		$('#services_left').fadeOut('fast');
	}
	$('.services_slider ul').css('width',service_total*227+'px');
	service_total = service_total - 4;
	var service_klika = 0;
	
	$('#services_right').live('click',function(){
		if( service_klika < service_total) {
			$('.services_slider ul').animate({marginLeft:'-=227px'},300);
			service_klika++;
		}
		
	});
	
	$('#services_left').live('click',function(){
		if( service_klika > 0) {
			$('.services_slider ul').animate({marginLeft:'+=227px'},300);
			--service_klika;
		}
		
	});
	
	
	$('.news_balline_navi_in div a').live('click',function(){
		var pozita = $(this).index();
		var margini = pozita * 285;
		$('.news_balline_foto_mbajtesi ul').animate({marginLeft:'-'+margini+'px'},400);
		$('.news_balline_lajmi_mbajtesi ul').animate({marginLeft:'-'+margini+'px'},700);
		$('.news_balline_navi_in div a').attr('id','');
		$(this).attr('id','n_b_aktivi');
	});
	
	$('.news_balline_navi_in div a').hover(function(){
		$(this).append('<span class="news_preview"></span>');
		$(this).find('.news_preview').fadeIn('fast');
		var foto = $('.news_balline_foto_mbajtesi ul li:eq('+$(this).index()+') a img').attr('src');
		$(this).find('.news_preview').append('<img src="'+foto+'" width="200" height="100"/>');
	},function(){
		$(this).find('.news_preview').fadeOut('fast');
		$(this).empty();
	});
	
	var stafi_nr = 0;
	var stafi_top = 0;
	
	$('.staff_box ul li').each(function(){
		var lefti = stafi_nr * 165;
		var topi = stafi_top * 165;
		if(stafi_nr < 3) {
			
			$(this).css('top',topi+'px');
			$(this).css('left',lefti+'px');
			//$(this).find('.staff_img_info').css('left','0px');
			stafi_nr++; 
			
		} else {
			$(this).css('top',topi+'px');
			$(this).css('right','0px');
			$(this).addClass('right_staff');
			//$(this).find('.staff_img_info').css('right','0px');
			stafi_nr = 0; stafi_top++;
		}	
	});
	
	var partners_nr = 0;
	$('.partners_clients ul li').each(function(){ if(partners_nr < 4) { partners_nr++; } else { $(this).addClass('right_partner'); partners_nr = 0;} });
	
	var services_nr2 = 1;
	$('.services_mbajtesi ul li').each(function(){ if(services_nr2 == 1) { $(this).find('span').addClass('forma'+services_nr2); services_nr2 = 2;} else { $(this).find('span').addClass('forma'+services_nr2); services_nr2 = 1;} });
	
	$('.services_mbajtesi ul li').each(function(){ $(this).find('img').addClass('forma1');});
	
	function rendit_krejt_workat() {
			var work_order_nr = 0;
			var work_top = 0;
			var parent_heighti = 1;
			$('.work_ul li').css('opacity',1);
			
			$('.work_ul li').each(function(){
				var lefti = work_order_nr * 240;
				var topi = work_top * 390;
				var parent_heighti_px = parent_heighti*390;
				
				if(work_order_nr < 3) {	
					$(this).css('top',topi+'px');
					$(this).css('left',lefti+'px');
					$(this).parent().css('height',parent_heighti_px+'px');
					work_order_nr++; 
					
				} else {
					$(this).css('top',topi+'px');
					$(this).css('left',lefti+'px');
					$(this).addClass('last_right_work');
					$(this).parent().css('height',parent_heighti_px+'px');
					//$(this).find('.staff_img_info').css('right','0px');
					
					work_order_nr = 0; work_top++; parent_heighti++;
				}	
			});
	}
	
	rendit_krejt_workat();
	
	$('.work_headeri ul li').live('click',function(){
		
		var id = $(this).attr('id');
		if(id != 'work_filter_active') {
			
			var klasa = $(this).children('a').attr('id');
			
			if(klasa != 'all') {
				rendit_krejt_workat();
				var work_order_nr2 = 0;
				var work_top2 = 0;
				var parent_heighti2 = 1;
				$('.work_ul li.'+klasa+'').css('opacity',1);
				$('.work_ul li:not(.'+klasa+')').css('opacity',0);
				$('.work_ul li.'+klasa).each(function(){
					var lefti2 = work_order_nr2 * 240;
					var topi2 = work_top2 * 390;
					var parent_heighti_px2 = parent_heighti2*390;
				if(work_order_nr2 < 3) {	
					$(this).css('top',topi2+'px');
					$(this).css('left',lefti2+'px');
					$(this).parent().css('height',parent_heighti_px2+'px');
					work_order_nr2++; 
				} else {
					$(this).css('top',topi2+'px');
					$(this).css('left',lefti2+'px');
					$(this).addClass('last_right_work');
					$(this).parent().css('height',parent_heighti_px2+'px');
					work_order_nr2 = 0; work_top2++; parent_heighti2++;
				}	
				});
			} else {
				rendit_krejt_workat();
			}
		}
		$('.work_headeri ul li').attr('id','');
		$(this).attr('id','work_filter_active');
	});
	
	
	function projects_list_span_order() {
		var project_list_span_nr = 0;
		var project_list_span_top = 0;
		$('#back_to_projects_list span i').css('opacity',1);
			
		$('#back_to_projects_list span i').each(function(){
			var lefti = project_list_span_nr * 7;
			var topi = project_list_span_top * 5;
				
			if(project_list_span_nr < 2) {	
				$(this).css('top',topi+'px');
				$(this).css('left',lefti+'px');
				project_list_span_nr++; 
					
			} else {
				$(this).css('top',topi+'px');
				$(this).css('left',lefti+'px');
				project_list_span_nr = 0; project_list_span_top++;
			}
		});
	}
	projects_list_span_order();
	
	function hap_span_order() {
		$('#back_to_projects_list span i:eq(0)').css('top','-5px').css('left','-5px');
		$('#back_to_projects_list span i:eq(1)').css('top','-5px');
		$('#back_to_projects_list span i:eq(2)').css('top','-5px').css('left','19px');
		$('#back_to_projects_list span i:eq(3)').css('left','-5px');
		$('#back_to_projects_list span i:eq(5)').css('left','19px');
		$('#back_to_projects_list span i:eq(6)').css('top','15px').css('left','-5px');
		$('#back_to_projects_list span i:eq(7)').css('top','15px');
		$('#back_to_projects_list span i:eq(8)').css('top','15px').css('left','19px');
		$('#back_to_projects_list span i').css('opacity',0);
	}
	
	
	$('#back_to_projects_list').hover(function(){
		hap_span_order();
		$('#back_to_projects_list span i').css('background','#AD241F');
		setTimeout(projects_list_span_order,200);
		
	},function(){
		hap_span_order();
		$('#back_to_projects_list span i').css('background','#e1e1e1');
		setTimeout(projects_list_span_order,200);
	});
	
	var krejt_projekt_foto = $('.projekti_img_slider ul li').size();
	var total_projekt_gallery_width = parseInt(krejt_projekt_foto) * 485;
	$('.projekti_img_slider ul').css('width',total_projekt_gallery_width+'px');
		
	function project_gallery_next() {
		if($("#project_img_active").next('li').length > 0) {
			$('.projekti_img_slider ul').animate({marginLeft:'-=485px'},400);
			$("#project_img_active").next('li').attr('id','project_img_active').prev('li').attr('id','');
		} else {
			$('.projekti_img_slider ul').animate({marginLeft:'0px'},400);
			$('.projekti_img_slider ul li').attr('id','');
			$('.projekti_img_slider ul li:first').attr('id','project_img_active');
		}
	};
	
	function project_gallery_prev() {
		if($("#project_img_active").prev('li').length > 0) {
			$('.projekti_img_slider ul').animate({marginLeft:'+=485px'},400);
			$("#project_img_active").prev('li').attr('id','project_img_active').next('li').attr('id','');
		} else {
			var pozita = $('.projekti_img_slider ul li:last').index();
			var margini = pozita * 485;
			$('.projekti_img_slider ul').animate({marginLeft:'-'+margini+'px'},400);
			$('.projekti_img_slider ul li').attr('id','');
			$('.projekti_img_slider ul li:last').attr('id','project_img_active');
		}
	}
	
	 $('.projekti_img_slider ul li a').mousemove(function(e){
		 
		var offset = $(this).offset(); 
		var x = e.pageX - offset.left;
		x = Math.round(x);
        if(x > 0 && x < 242) {
			$('#projekti_img_prev').css('opacity','1');
			$('#projekti_img_next').css('opacity','0');
		} else if(x > 0 && x > 242) {
			$('#projekti_img_prev').css('opacity','0');
			$('#projekti_img_next').css('opacity','1');
		}
    });
	
	
	 $('.projekti_img_slider').hover(function(){
		 $('#projekti_img_prev').css('opacity','1');
		$('#projekti_img_next').css('opacity','1');
	 },function(){
		 $('#projekti_img_prev').css('opacity','0');
		$('#projekti_img_next').css('opacity','0');
	 })
	
	
	$('#projekti_img_prev').hover(function(){$(this).css('width','70px');},function(){$(this).css('width','60px');});
	$('#projekti_img_next').hover(function(){$(this).css('width','70px');},function(){$(this).css('width','60px');});
	
	$('#projekti_img_next').live('click',function(){
		project_gallery_next();
	});
	
	$('#projekti_img_prev').live('click',function(){
		project_gallery_prev();
	});
	
	var contact_nr = 0;
	$('.contact_mbajtesi ul li').each(function(){ if(contact_nr < 1) { contact_nr++; } else { $(this).addClass('contact_last'); contact_nr = 0;} });
	
	$('#maps_functions').live('click',function(){
		var display = $('.map_overlay').css('display');
		if(display == 'block') {
			$('.map_overlay').css('display','none');
			$(this).html('Click here to deactivate Map Functions');
		} else {
			$('.map_overlay').css('display','block');
			$(this).html('Click here to activate Map Functions');
		}
	});
	
	$('.staff_more').live("click",function(){
		$('.staff_more_mbajtesi').css('top','0px');
		var id = $(this).attr("id"),
			elementi = $(this);
			$.ajax({
				type: "get",
				url: "index.php?ajax=1&FaqeID=8&staffid="+id,
				cache: false,
				success: function(kontenti){ $('.staff_more_mbajtesi').append(kontenti); }
			});
	});
	
	$('.staff_less').live('click',function(){
		$('.staff_more_mbajtesi').css('top','330px');
		$('.staff_more_mbajtesi').delay(300).empty();
	});
	
	$('.tweet_first').addClass('p_tweeti_aktiv');
	
	project_twitter();
	var twitter_time = 10000;
	var project_twitter_auto = setInterval(project_twitter,twitter_time);
	
	footer_twitter();
	var f_twitter_time = 10000;
	var f_project_twitter_auto = setInterval(footer_twitter,f_twitter_time);
	
	$('.recent_worki').hover(function(){
		$(this).find('.recent_worki_img').css('margin-top','-170px');
	},function(){
		$(this).find('.recent_worki_img').css('margin-top','0px');
	});

});