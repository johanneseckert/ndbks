<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="<?php echo $lang; ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $lang; ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $lang; ?>" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>indiebikes - <?php echo $title; ?></title>

  <meta name="description" content="<?php mlp_snippet("meta_description"); ?>" />
  <meta name="keywords" content="<?php mlp_snippet("meta_keywords"); ?>">
  <meta name="author" content="<?php mlp_snippet("meta_author"); ?>">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=960, initial-scale=1.0">

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
   <!-- typekit webfonts with SSL -->
<script type="text/javascript" src="https://use.typekit.com/fzw8tyl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <txp:feed_link flavor="rss" format="link" section="blog" />

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="/css/style.css?v=2">
  <link rel="stylesheet" href="/css/960.css">
  <link rel="stylesheet" href="/css/jquery-ui-1.8.10.custom.css">
  <link rel="stylesheet" href="/order/catalog/view/theme/ndbkstheme/stylesheet/stylesheet.css">
  <link rel="stylesheet" href="/order/catalog/view/theme/ndbkstheme/stylesheet/ie6.css">

  <!-- all javascript here because of opencart's own javascripts on the page -->
  <script src="/js/libs/modernizr-1.6.min.js"></script>
  <script src="/js/libs/jquery-1.5.1.min.js"></script>
  <script src="/js/libs/jquery-ui-1.8.10.custom.min.js"></script>
  <script src="/js/libs/jquery.masonry.min.js"></script>
  <script src="/js/libs/jquery.lettering-0.6.1.min.js"></script>
  <script src="/js/libs/jquery.carousel.min.js"></script>
  <script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script src="/js/libs/modernizr-1.6.min.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-95147-23']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

<!-- openCart script modules. neccessary? -->
<script type="text/javascript">

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

$('.switcher').bind('click', function() {
  $(this).find('.option').slideToggle('fast');
});
$('.switcher').bind('mouseleave', function() {
  $(this).find('.option').slideUp('fast');
}); 

</script>

</head>
<body id="oc">

  <!-- begin of header -->
  <header class="container_12 clearfix">
    <div class="grid_1 prefix_11" id="l10n_bookmarks">
        <?php if ($languages) { ?>
        <form action="<?php echo str_replace('&', '&amp;', $action); ?>" method="post" enctype="multipart/form-data" id="language_form">
        <ul class="l10n_lang_list">
          <li class="de-de <?php if ($language_code=="de-de") echo "l10n_current" ?>" onclick="$('input[name=\'language_code\']').attr('value', 'de-de'); $('#language_form').submit();"><span>de</span></li>
          <li class="en-gb <?php if ($language_code=="en-gb") echo "l10n_current" ?>" onclick="$('input[name=\'language_code\']').attr('value', 'en-gb'); $('#language_form').submit();"><span>en</span></li>
        </ul>
        <input type="hidden" name="language_code" value="" />
        <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
        </form>
        <?php } ?>
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

    <!-- menu -->
    <nav class="grid_2" id="menu">
      <ul>
        <li><a href="http://indiebikes.com/build" class="active bigflap">
          <span class="menupunkt"><?php mlp_snippet("sct_order"); ?></span>
          <span class="menubeschr"><?php mlp_snippet("sct_order_sub"); ?></span>
        </a></li>
        <li><a href="http://indiebikes.com/gallery">
          <span class="menupunkt"><?php mlp_snippet("sct_gallery"); ?></span>
          <span class="menubeschr"><?php mlp_snippet("sct_gallery_sub"); ?></span>
        </a></li>
        <li><a href="http://indiebikes.com/blog">
          <span class="menupunkt"><?php mlp_snippet("sct_blog"); ?></span>
          <span class="menubeschr"><?php mlp_snippet("sct_blog_sub"); ?><txp:text item="" /></span>
        </a></li>
        <li><a href="http://indiebikes.com/faq">
          <span class="menupunkt"><?php mlp_snippet("sct_faq"); ?></span>
          <span class="menubeschr"><?php mlp_snippet("sct_faq_sub"); ?><txp:text item="" /></span>
        </a></li>
        <li><a href="http://indiebikes.com/about">
          <span class="menupunkt"><?php mlp_snippet("sct_about"); ?></span>
          <span class="menubeschr"><?php mlp_snippet("sct_about_sub"); ?></span>
        </a></li>
      </ul>
    </nav>
    <!-- end of menu -->

    <!-- start content on the left side -->
    <div class="grid_10 clearfix" id="content">
      <div id="breadcrumb">
<!--         <?php foreach (Controller::__get('document')->breadcrumbs as $breadcrumb) { ?>
          <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
        <?php } ?>
 -->      &nbsp;</div>

<!-- wrap opencart output here -->