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
   builder
   ############# */


//  ####################
//	builder intelligence
//  ####################

// first of all: hide all images;
$(".builder-part").hide();


// OOP builder
var bike = new builder();

function builder() {
	// init components with default colors
	this.components = new Object();
	this.components.frame = new component("frame","fr",["wasabi","white","black","blue"]);
	this.components.cranks = new component("cranks","cr",["black","gold","silver"],"silver");
	this.components.grips = new component("grips","gr",["black","brown","white"],"brown");
	this.components.chain = new component("chain","ch",["white","black","red","yellow"],"black");
	this.components.saddle = new component("saddle","sd",["white","brown","black"],"brown");
	this.components.tirefront = new component("tirefront","trf",["red","black","yellow","white"],"yellow");
	this.components.rimfront = new component("rimfront","rmf",["red","black","white"],"white");
	this.components.tirerear = new component("tirerear","trr",["red","black","yellow","white"],"black");
	this.components.rimrear = new component("rimrear","rmr",["red","black","white"],"red");

	// if there is a state in the URL, overwrite
	if (location.hash != "")
		this.components = $.bbq.getState();


	this.update = function(what,newcolor) {
		if (this.components[what].color != newcolor) {
			this.components[what].color = newcolor;
			
			// update all
//			this.displaycomponents();

			// update only specific
			$(".builder-"+what).fadeOut("fast");
			$("#"+what+"-"+newcolor).fadeIn("fast");
		}

		// push new bike state into the URL
		$.bbq.pushState( bike.components );
			
	}

	this.nextcolor = function(what) {
		current_colorindex = $.inArray(this.components[what].color,this.components[what].colors);
		max_colorindex = this.components[what].colors.length-1;

		next_colorindex = current_colorindex+1;
		if (next_colorindex > max_colorindex)
			next_colorindex = 0;
		
		this.update(what,this.components[what].colors[next_colorindex]);


		log("trying to find next color on "+what);
		log(this.components[what].colors.length);
		log("current: "+$.inArray(this.components[what].color,this.components[what].colors))
	}

	this.displaycomponents = function() {
		// firstly, hide all components to start fresh
		$(".builder-part").hide();
		// iterate through each component
		$.each(this.components, function(name, value) {
//			alert(value.titleshort + ": " +  value.color);
			$("#"+value.title+"-"+value.color).show();
			// populate radiobuttons with state
//			$("#radio-"+value.title+"-"+value.color+"+label").click();
		});

	}
}

function component(title,titleshort,colors,color) {
	this.title = title;
	this.titleshort = titleshort;
	this.colors = new Array();
	for (var i = 0; i < colors.length; i++) {
		this.colors[i] = colors[i];
	}
	if (color == undefined)
		this.color = colors[0]
	else
		this.color = color;
}



// preload images in builder
// and update bike after finish

$.preload( "#builder_image img", {
	onRequest:update,
	onFinish:finish,
	placeholder:'/images/builder/preload-placeholder.png',
	threshold: 2 //'2' is the default, how many at a time, to load.
});
function update(data) {
	$("#loaded").html(''+data.loaded);
	$("#done").html(''+data.done);
	$("#failed").html(''+data.failed);
	$("#total").html(''+data.total);
};
function finish() {
	bike.displaycomponents();
	$("#preloadsummary").fadeOut("slow");
}



// setting up jquery UI

$(".builder_buttonset").buttonset();

// bind click to configurator buttons
$(".builder_button").click(function(e) {
	name = $(e.target).parent().attr("alt");
	color = $(e.target).parent().attr("title");
	log("clicked on a button! " + name+"-"+color);
	// there is some strange jQuery UI (?) bug to result a undef name when clicked on border
	if (name != undefined)
		bike.update(name,color);
});

// bind clicks to image map
$("#builder_image AREA").click(function(e) {

	bike.nextcolor($(e.target).attr("alt"));

	return false;
});