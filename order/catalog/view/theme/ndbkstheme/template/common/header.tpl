<!doctype html>

<?php

  // PHP functions
  // use with care


  // this will steal the mlp snippet from textpattern and show it here
  function mlp_snippet($nameofkey,$lang) {
    $result = mysql_query("SELECT * FROM txp_lang WHERE lang='".$lang."' AND 
                          name = '".$nameofkey."'");
    $row = mysql_fetch_assoc($result);
    echo $row["data"];
  }
?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="<?php echo $lang; ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $lang; ?>" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
    Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title; ?></title>

  <meta name="description" content="<?php mlp_snippet("meta_description",$language_code); ?>" />
  <meta name="keywords" content="<?php mlp_snippet("meta_keywords",$language_code); ?>">
  <meta name="author" content="<?php mlp_snippet("meta_author",$language_code); ?>">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=960, initial-scale=1.0">

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
   <!-- typekit webfonts -->
  <script type="text/javascript" src="http://use.typekit.com/fzw8tyl.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  

  <txp:feed_link flavor="rss" format="link" section="blog" />

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="/css/style.css?v=2">
  <link rel="stylesheet" href="/css/960.css">
  <link rel="stylesheet" href="/css/jquery-ui-1.8.9.custom.css">

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="/js/libs/modernizr-1.6.min.js"></script>
</head>
<body>

  <!-- begin of header -->
  <header class="container_12 clearfix">
    <div class="grid_1 prefix_11" id="l10n_bookmarks">
      language picker!
    </div>
    <div class="clear"></div>
    <div class="grid_4 prefix_2">
      <a href="/"><h1 class="ir">indiebikes</h1></a>
    </div>
    <div class="grid_5 suffix_1">
      <a href="/"><h2 class="ir">we like it fixed</h2></a>
    </div>
  </header>
  <!-- end of header -->

  <!-- start of main content -->
  <div id="main" class="container_12 clearfix">















<div id="container">
<div id="header">
  <div class="div1">
    <div class="div2">
      <?php if ($logo) { ?>
      <a href="<?php echo str_replace('&', '&amp;', $home); ?>"><img src="<?php echo $logo; ?>" title="<?php echo $store; ?>" alt="<?php echo $store; ?>" /></a>
      <?php } ?>
    </div>
    <div class="div3"><a href="<?php echo str_replace('&', '&amp;', $special); ?>" style="background-image: url('catalog/view/theme/ndbkstheme/image/special.png');"><?php echo $text_special; ?></a><a onclick="bookmark(document.location, '<?php echo addslashes($title); ?>');" style="background-image: url('catalog/view/theme/ndbkstheme/image/bookmark.png');"><?php echo $text_bookmark; ?></a><a href="<?php echo str_replace('&', '&amp;', $contact); ?>" style="background-image: url('catalog/view/theme/ndbkstheme/image/contact.png');"><?php echo $text_contact; ?></a><a href="<?php echo str_replace('&', '&amp;', $sitemap); ?>" style="background-image: url('catalog/view/theme/ndbkstheme/image/sitemap.png');"><?php echo $text_sitemap; ?></a></div>
    <div class="div4"><a href="<?php echo str_replace('&', '&amp;', $home); ?>" id="tab_home"><?php echo $text_home; ?></a>
      <?php if (!$logged) { ?>
      <a href="<?php echo str_replace('&', '&amp;', $login); ?>" id="tab_login"><?php echo $text_login; ?></a>
      <?php } else { ?>
      <a href="<?php echo str_replace('&', '&amp;', $logout); ?>" id="tab_logout"><?php echo $text_logout; ?></a>
      <?php } ?>
      <a href="<?php echo str_replace('&', '&amp;', $account); ?>" id="tab_account"><?php echo $text_account; ?></a><a href="<?php echo str_replace('&', '&amp;', $cart); ?>" id="tab_cart"><?php echo $text_cart; ?></a><a href="<?php echo str_replace('&', '&amp;', $checkout); ?>" id="tab_checkout"><?php echo $text_checkout; ?></a></div>
    <div class="div5">
      <div class="left"></div>
      <div class="right"></div>
      <div class="center">
        <div id="search">
          <div class="div8"><?php echo $entry_search; ?>&nbsp;</div>
          <div class="div9">
            <?php if ($keyword) { ?>
            <input type="text" value="<?php echo $keyword; ?>" id="filter_keyword" />
            <?php } else { ?>
            <input type="text" value="<?php echo $text_keyword; ?>" id="filter_keyword" onclick="this.value = '';" onkeydown="this.style.color = '#000000'" style="color: #999;" />
            <?php } ?>
            <select id="filter_category_id">
              <option value="0"><?php echo $text_category; ?></option>
              <?php foreach ($categories as $category) { ?>
              <?php if ($category['category_id'] == $category_id) { ?>
              <option value="<?php echo $category['category_id']; ?>" selected="selected"><?php echo $category['name']; ?></option>
              <?php } else { ?>
              <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
              <?php } ?>
              <?php } ?>
            </select>
          </div>
          <div class="div10">&nbsp;&nbsp;<a onclick="moduleSearch();" class="button"><span><?php echo $button_go; ?></span></a> <a href="<?php echo str_replace('&', '&amp;', $advanced); ?>"><?php echo $text_advanced; ?></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="div6">
    <div class="left"></div>
    <div class="right"></div>
    <div class="center">
	  <?php if (isset($common_error)) { ?>
	  <div class="warning"><?php echo $common_error; ?></div>
	  <?php } ?>
      <div id="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <?php echo $breadcrumb['separator']; ?><a href="<?php echo str_replace('&', '&amp;', $breadcrumb['href']); ?>"><?php echo $breadcrumb['text']; ?></a>
        <?php } ?>
      </div>
      <div class="div7">
        <?php if ($currencies) { ?>
        <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="currency_form">
          <div class="switcher">
            <?php foreach ($currencies as $currency) { ?>
            <?php if ($currency['code'] == $currency_code) { ?>
            <div class="selected"><a><?php echo $currency['title']; ?></a></div>
            <?php } ?>
            <?php } ?>
            <div class="option">
              <?php foreach ($currencies as $currency) { ?>
              <a onclick="$('input[name=\'currency_code\']').attr('value', '<?php echo $currency['code']; ?>'); $('#currency_form').submit();"><?php echo $currency['title']; ?></a>
              <?php } ?>
            </div>
          </div>
          <div style="display: inline;">
            <input type="hidden" name="currency_code" value="" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
          </div>
        </form>
        <?php } ?>
        <?php if ($languages) { ?>
        <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="language_form">
          <div class="switcher">
            <?php foreach ($languages as $language) { ?>
            <?php if ($language['code'] == $language_code) { ?>
            <div class="selected"><a><img src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" />&nbsp;&nbsp;<?php echo $language['name']; ?></a></div>
            <?php } ?>
            <?php } ?>
            <div class="option">
              <?php foreach ($languages as $language) { ?>
              <a onclick="$('input[name=\'language_code\']').attr('value', '<?php echo $language['code']; ?>'); $('#language_form').submit();"><img src="image/flags/<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>" />&nbsp;&nbsp;<?php echo $language['name']; ?></a>
              <?php } ?>
            </div>
          </div>
          <div>
            <input type="hidden" name="language_code" value="" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!-- 
function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');

		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue;
} 

$(document).ready(function() {
	route = getURLVar('route');
	
	if (!route) {
		$('#tab_home').addClass('selected');
	} else {
		part = route.split('/');
		
		if (route == 'common/home') {
			$('#tab_home').addClass('selected');
		} else if (route == 'account/login') {
			$('#tab_login').addClass('selected');	
		} else if (part[0] == 'account') {
			$('#tab_account').addClass('selected');
		} else if (route == 'checkout/cart') {
			$('#tab_cart').addClass('selected');
		} else if (part[0] == 'checkout') {
			$('#tab_checkout').addClass('selected');
		} else {
			$('#tab_home').addClass('selected');
		}
	}
});
//--></script>
<script type="text/javascript"><!--
$('#search input').keydown(function(e) {
	if (e.keyCode == 13) {
		moduleSearch();
	}
});

function moduleSearch() {	
	pathArray = location.pathname.split( '/' );
	
	url = location.protocol + "//" + location.host + "/" + pathArray[1] + '/';
		
	url += 'index.php?route=product/search';
		
	var filter_keyword = $('#filter_keyword').attr('value')
	
	if (filter_keyword) {
		url += '&keyword=' + encodeURIComponent(filter_keyword);
	}
	
	var filter_category_id = $('#filter_category_id').attr('value');
	
	if (filter_category_id) {
		url += '&category_id=' + filter_category_id;
	}
	
	location = url;
}
//--></script>
<script type="text/javascript"><!--
$('.switcher').bind('click', function() {
	$(this).find('.option').slideToggle('fast');
});
$('.switcher').bind('mouseleave', function() {
	$(this).find('.option').slideUp('fast');
}); 
//--></script>
