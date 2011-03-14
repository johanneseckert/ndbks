/* Author: Johannes Henseler

	indiebikes javascript v0.3

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
	// initialize components with default colors
	this.components = new Object();
	this.components.frame = new component("frame","fr",["wasabi","white","black","blue"]);
	this.components.cranks = new component("cranks","cr",["black","gold","silver"],"silver");
	this.components.grips = new component("grips","gr",["black","brown","white","none"],"brown");
	this.components.chain = new component("chain","ch",["white","black","red","yellow"],"black");
	this.components.saddle = new component("saddle","sd",["white","brown","black"],"brown");
	this.components.tirefront = new component("tirefront","trf",["red","black","yellow","white"],"yellow");
	this.components.rimfront = new component("rimfront","rmf",["red","black","white"],"white");
	this.components.tirerear = new component("tirerear","trr",["red","black","yellow","white"],"black");
	this.components.rimrear = new component("rimrear","rmr",["red","black","white"],"red");

	// handlebars
	this.handlebars = new Object();
	this.handlebars.riserbar = new component("riserbar","hb-riserbar",["black"]);
	this.handlebars.dropbar = new component("dropbar","hb-dropbar",["chrome","black"]);
	this.handlebars.bullhornbar = new component("bullhornbar","hb-bullhornbar",["black","chrome"]);
	this.handlebars.flatbar = new component("flatbar","hb-flatbar",["silver","black"]);

	// settings
	this.settings = new Object();
	this.settings.branding = new component("branding","brand",["toptube"]);
//	this.settings.handlebar = new component("handlebar","hb",["riserbar","dropbar","bullhornbar","flatbar"],"bullhornbar");
	this.settings.handlebar = new component("handlebar","hb",["riserbar","bullhornbar"],"bullhornbar");
	this.settings.size = new component("size","sz",["59","55","52"],"55");


	// if there is a state in the URL, overwrite complete bike
	if (location.hash != "") {
		this.components = $.bbq.getState( );
		this.handlebars = $.bbq.getState( );
		this.settings = $.bbq.getState( );
	}


	// currently obsolete !!!!!!!!
	this.update = function(what,newvariation) {
		log("—>update("+what+","+newvariation+")");
		if (this.components[what].current != newvariation) {
			this.components[what].current = newvariation;
			log("bike's "+what+" set to "+newvariation);
			
			// displaycomponents
			this.displaycomponents();

			// update only specific
//			$(".builder-"+what).fadeOut("fast");
//			$("#"+what+"-"+newvariation).fadeIn("fast");
		}
	}

	this.nextvariation = function(what) {
		log("—>nextvariation("+what+")");
		current = $.inArray(this.components[what].current,this.components[what].variations);
		max = this.components[what].variations.length-1;

		next = current+1;
		if (next > max)
			next = 0;
		
		this.components[what].current = this.components[what].variations[next];
		this.displaycomponents();
	}

	this.shuffle = function() {
			// random: http://www.shawnolson.net/a/789/make-javascript-mathrandom-useful.html
		// components
		$.each(this.components, function(name,value) {
			max_variations = bike.components[name].variations.length;
			random_variation = Math.floor(Math.random()*max_variations);
			variation_at_this_index = bike.components[name].variations[random_variation];
			bike.components[name].current = variation_at_this_index;
		});
		// handlebars
		max_variations = bike.settings.handlebar.variations.length;
		random_variation = Math.floor(Math.random()*max_variations);
		variation_at_this_index = bike.settings.handlebar.variations[random_variation];
		bike.settings.handlebar.current = variation_at_this_index;
		$.each(this.handlebars, function(name,value) {
			max_variations = bike.handlebars[name].variations.length;
			random_variation = Math.floor(Math.random()*max_variations);
			variation_at_this_index = bike.handlebars[name].variations[random_variation];
			bike.handlebars[name].current = variation_at_this_index;
		});
		// branding
		max_variations = bike.settings.branding.variations.length;
		random_variation = Math.floor(Math.random()*max_variations);
		variation_at_this_index = bike.settings.branding.variations[random_variation];
		bike.settings.branding.current = variation_at_this_index;

		this.displaycomponents();
	};

	// displaycomponentsial view of all current settings
	this.displaycomponents = function(whathaschanged) {
		log("—>displaycomponents");

		//
		// showing correct images
		//

		// firstly, hide all components to start fresh
		$("#builder_components IMG").hide();

		// show current handlebar-option
		log("bike's current handlebar-setting: "+bike.settings.handlebar.current);
		$.each(this.handlebars, function(name, value) {
			if (name == bike.settings.handlebar.current) {
				$("#"+value.title+"-"+value.current).show();
			}
		});
		if (bike.settings.handlebar.current != "riserbar")
			bike.components.grips.current = "none"; // set no gribs on riserbars
		else
			bike.components.grips.current = bike.components.grips.variations[0];

		log("bike's current grips setting: "+bike.components.grips.current);
		// go through all components and show them
		$.each(this.components, function(name, value) {
			$("#"+value.title+"-"+value.current).show();
		});

		// display branding
		log("bike's current branding-setting: "+bike.settings.branding.current);
		$("#"+bike.settings.branding.title+"-"+bike.settings.branding.current).show();

		//
		// set UI accordingly
		//
		function set_UI_settings(what) {
			$("input[name="+what+"]").removeAttr("checked");
			log("input[name="+what+"][value="+bike.settings[what].current+"]");
			radiobutton = $("input[name="+what+"][value="+bike.settings[what].current+"]");
			radiobutton.attr("checked","checked");
			radiobutton.button("refresh");
		}
		set_UI_settings("size");
		set_UI_settings("handlebar");
		set_UI_settings("branding");


		// push new bike state into the URL
		$.bbq.pushState( bike.components );
		$.bbq.pushState( bike.handlebars );
		$.bbq.pushState( bike.settings );


		// setting to correct handlebar
/*		handlebar = this.components[this.handlebar.variation];
		$("#"+handlebar.title+"-"+handlebar.variation).show();
		log("#"+handlebar.title+"-"+handlebar.variation)
		log("current handlebar: "+this.handlebar.variation);
*/
		// are there handles on the current bar?


		// set buttons accordingly
//		log(this.branding.variation);

	}
}

function component(title,titleshort,variations,current) {
	this.title = title;
	this.titleshort = titleshort;
	this.variations = new Array();
	for (var i = 0; i < variations.length; i++) {
		this.variations[i] = variations[i];
	}
	if (current == undefined)
		this.current = variations[0]
	else
		this.current= current;
}




// setting up jquery UI

$(".builder_buttonset").buttonset();

// bind click to configurator buttons
$(".builder_color").click(function(e) {
	name = $(e.target).parent().attr("alt");
	color = $(e.target).parent().attr("title");
	log("button: change component-color: " + name+"-"+color);
	// there is some strange jQuery UI (?) bug to result a undef name when clicked on border
	if (name != "undefined") {
		bike.components[name].current = color;
	}
	bike.displaycomponents();
});

// bind clicks to image map
$("#builder_image AREA").click(function(e) {
	bike.nextvariation($(e.target).attr("alt"));
	return false;
});

$("#btn_random").click(function() {
	bike.shuffle();
});


$("#btn_goldeneye").click(function() {
	bike.components.chain.current = "white";
	bike.components.cranks.current = "gold";
	bike.components.frame.current = "white";
	bike.components.grips.current = "white";
	bike.components.rimfront.current = "white";
	bike.components.rimrear.current = "white";
	bike.components.tirefront.current = "yellow";
	bike.components.tirerear.current = "yellow";
	bike.components.saddle.current = "white";
	bike.settings.handlebar.current = "bullhornbar";
	bike.settings.branding.current = "toptube";

	bike.displaycomponents();
});



$("input[name=size]").click(function(e) {
	log("you clicked here! value: "+$(e.target).attr("value"));
	bike.settings.size.current = $(e.target).attr("value");
	bike.displaycomponents();
});

$("input[name=handlebar]").click(function(e) {
	log("you clicked here! value: "+$(e.target).attr("value"));
	bike.settings.handlebar.current = $(e.target).attr("value");
	bike.displaycomponents();
});

$("input[name=branding]").click(function(e) {
	log("you clicked here! value: "+$(e.target).attr("value"));
	bike.settings.branding.current = $(e.target).attr("value");
	bike.displaycomponents();
});





 // Bind an event to window.onhashchange that, when the history state changes,
 // gets the url from the hash and displays either our cached content or fetches
 // new content to be displayed.
 $(window).bind( 'hashchange', function(e) {
	// at least reset sharing
	$("#shared_info").slideUp();
	$("#click_here_to_share").slideDown();
 });





// preload images in builder
// and update bike after finish

$("#preload_progressbar").progressbar({
	value: 1
});

$.preload( "#builder_image img", {
	onRequest:update,
	onFinish:finish,
	placeholder:'/images/builder/preload-placeholder.png',
	threshold: 2 //'2' is the default, how many at a time, to load.
});
function update(data) {
	percentage = Math.round((data.done / data.total)*100);
	//getter
	var value = $( "#preload_progressbar" ).progressbar( "option", "value" );
	//setter
	$( "#preload_progressbar" ).progressbar( "option", "value", percentage );
//	$("#loaded").html(''+data.loaded);
//	$("#done").html(''+data.done);
//	$("#failed").html(''+data.failed);
//	$("#total").html(''+data.total);
//	$("#perc").html(''+percentage);
};
function finish() {
	if ($("#builder_image").length)
		bike.displaycomponents();
	$("#preloadsummary").fadeOut("slow");
}


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
