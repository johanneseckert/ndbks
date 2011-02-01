/* Author: Johannes Henseler

	indiebikes javascript v0.1

*/

/* #############
   using letting.js
   ############# */

// split H3 in teaserboxes in lines to style every line
$("#box_teaser h3").lettering('lines');



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


// jQuery Carousel
// http://www.thomaslanciaux.pro/jquery/jquery_carousel.htm

$("#frontpage_carousel").carousel( {
        autoSlide: true,
        loop: true,
        btnsPosition: "inside",
        autoSlideInterval: 3000
} );