/* Author: Johannes Henseler

	indiebikes javascript v0.6

*/


/* #############
   using letting.js
   ############# */

// split H3 in teaserboxes in lines to style every line
$("#box_teaser h3").lettering('lines');
$(".pricetag").lettering();



/* #############
   animation styles
   ############# */

   
// language picker
$("#l10n_bookmarks SPAN")
	.css("top", "-10")
	.mouseover(function(){
		$(this).stop().animate({
			top: 0
		},"fast")
		})
	.mouseout(function(){
		$(this).stop().animate({
			top: -10
		},"fast")
		});


// teaserboxen auf der startseite
$("#teaser_order")
	.css( {backgroundPosition: "0 0"} )
	.mouseover(function() {
		$(this).stop().animate(
			{backgroundPosition:"(-220px 0)"}, 
			{duration:250})
		})
	.mouseout(function() {
		$(this).stop().animate(
			{backgroundPosition:"(0 0)"}, 
			{duration:250})
		});
		
$("#teaser_teile")
	.css( {backgroundPosition: "0 0"} )
	.mouseover(function() {
		$(this).stop().animate(
			{backgroundPosition:"(-371px 0)"}, 
			{duration:1000})
		})
	.mouseout(function() {
		$(this).stop().animate(
			{backgroundPosition:"(0 0)"}, 
			{duration:1000})
		});

$("#teaser_indiebikes")
	.css( {backgroundPosition: "107px 107px"} )
	.mouseover(function() {
		$(this).stop().animate(
			{backgroundPosition:"(0 0)"}, 
			{duration:200})
		})
	.mouseout(function() {
		$(this).stop().animate(
			{backgroundPosition:"(107px 107px)"}, 
			{duration:200})
		});

$("#teaser_faq")
	.css( {backgroundPosition: "0px 25px"} )
	.mouseover(function() {
		$(this).stop().animate(
			{backgroundPosition:"(0px 0px)"}, 
			{duration:100})
		})
	.mouseout(function() {
		$(this).stop().animate(
			{backgroundPosition:"(0px 25px)"}, 
			{duration:200})
		});


// jQuery Carousel
// http://www.thomaslanciaux.pro/jquery/jquery_carousel.htm

$("#frontpage_carousel").carousel( {
        autoSlide: true,
        loop: true,
        effect: "slide",
        btnsPosition: "inside",
        autoSlideInterval: 5000,
        animSpeed: "slow"
} );


/* #############
   gallery
   ############# */

$("#gallery-container").masonry({
	columnWidth: 196
});

$("#gallery-container a").fancybox({
	'transitionIn'	:	'elastic',
	'transitionOut'	:	'elastic',
	'speedIn'		:	200, 
	'speedOut'		:	200,
	'overlayShow'	:	true,
	'overlayOpacity':	0.0,
	'overlayColor'	:	'#333',
	'titleShow'		:	true
});



// sharing with the YOURLS api
// http://testserver2.dyndns.org/b/yourls-api.php?
//	signature=8e9cd31548&action=shorturl&url=google.com&

$("#click_here_to_share").click( function() {

	$("#click_here_to_share").slideUp();
	$("#shared_load").slideDown();

	$.get("/b/yourls-api.php?signature=8e9cd31548&action=shorturl"
			+"&url="+escape(location.href)
			+"&format=simple",function(data) {

		$("#shared_load").slideUp();
		$("#shared_info").slideDown();

		$("#shared_url").val(data);
//		$("#shared_url").focus().val($("#shared_url").val);

		log($("#social_fb"));

		redirect_to = data;
//		redirect_to = "http://indiebikes.com/";

		$("#social_fb").attr("href","http://www.facebook.com/dialog/feed?app_id=197627106915572&redirect_uri="+redirect_to
		+"&message=I desined my own bike!"
		+"&link="+data
		+"&picture=http://indiebikes.com/fb_image.png");

		$("#social_twitter").attr("href","http://twitter.com/share?original_referer=http://indiebikes.com/&text=I%20designed%20my%20own%20bike!"
		+"&url="+data
		+"&via=indiebikes"
		+"&counturl="+escape(location.href));
	});

	return false;
});

$("#shared_url").click(function() {
	$(this).select();
});
