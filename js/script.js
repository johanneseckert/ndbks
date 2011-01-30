/* Author: Johannes Henseler

	indiebikes javascript v0.1

*/

/* #############
   using letting.js
   ############# */
   
$("h3").lettering('lines');



/* #############
   animation styles
   ############# */

   
// language picker
$("#l10n_bookmarks A")
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