<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

// Create DOM from string
$html = str_get_html($string);

$titles = array();
// Find all tags 
foreach($html->find($tagname) as $element) {
    $titles[] = $element->plaintext;
}

echo count($titles);
?>


<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>
  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chop List Database | Mor Browser</title>
<link rel="pingback" href="http://nopixel.online/morbrowser/xmlrpc.php"><meta name='robots' content='noindex,follow' />
<link rel='dns-prefetch' href='//secure.gravatar.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Mor Browser &raquo; Feed" href="http://nopixel.online/morbrowser/feed/" />
<link rel="alternate" type="application/rss+xml" title="Mor Browser &raquo; Comments Feed" href="http://nopixel.online/morbrowser/comments/feed/" />
		<script type="d31effe40bb7ad57682bf1dd-text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/nopixel.online\/morbrowser\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.5"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='mec-font-icons-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/css/iconfonts.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='mec-frontend-style-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/css/frontend.min.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='mec-tooltip-style-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/tooltip/tooltip.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='mec-tooltip-shadow-style-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/tooltip/tooltipster-sideTip-shadow.min.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='mec-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRoboto%3A100%2C300%2C400%2C700&#038;ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='mec-lity-style-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/lity/lity.min.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='layerslider-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='http://nopixel.online/morbrowser/wp-includes/css/dist/block-library/style.min.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='essential-grid-plugin-settings-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/essential-grid/public/assets/css/settings.css?ver=2.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='tp-fontello-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/essential-grid/public/assets/font/fontello/css/fontello.css?ver=2.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='tco_woo_front_css-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/tco-woo-checkout-editor//assets/css/front.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='user-registration-general-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/user-registration/assets/css/user-registration.css?ver=1.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='user-registration-smallscreen-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/user-registration/assets/css/user-registration-smallscreen.css?ver=1.7.3' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='user-registration-my-account-layout-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/user-registration/assets/css/my-account-layout.css?ver=1.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://nopixel.online/morbrowser/wp-includes/css/dashicons.min.css?ver=5.2.5' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='mm_icomoon-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/mega_main_menu/framework/src/css/icomoon.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='mmm_mega_main_menu-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/mega_main_menu/src/css/cache.skin.b17.css?ver=5.2.5' type='text/css' media='all' />
<link rel='stylesheet' id='x-stack-css'  href='http://nopixel.online/morbrowser/wp-content/themes/x/framework/dist/css/site/stacks/integrity-light.css?ver=6.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='x-woocommerce-css'  href='http://nopixel.online/morbrowser/wp-content/themes/x/framework/dist/css/site/woocommerce/integrity-light.css?ver=6.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='x-cranium-migration-css'  href='http://nopixel.online/morbrowser/wp-content/themes/x/framework/legacy/cranium/dist/css/site/integrity-light.css?ver=6.1.6' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.5' type='text/css' media='screen' />
<![endif]-->
<link rel='stylesheet' id='the-grid-css'  href='http://nopixel.online/morbrowser/wp-content/plugins/the-grid/frontend/assets/css/the-grid.min.css?ver=2.7.1' type='text/css' media='all' />
<style id='the-grid-inline-css' type='text/css'>
.tolb-holder{background:rgba(0,0,0,0.8)}.tolb-holder .tolb-close,.tolb-holder .tolb-title,.tolb-holder .tolb-counter,.tolb-holder .tolb-next i,.tolb-holder .tolb-prev i{color:#ffffff}.tolb-holder .tolb-load{border-color:rgba(255,255,255,0.2);border-left:3px solid #ffffff}
.to-heart-icon,.to-heart-icon svg,.to-post-like,.to-post-like .to-like-count{position:relative;display:inline-block}.to-post-like{width:auto;cursor:pointer;font-weight:400}.to-heart-icon{float:left;margin:0 4px 0 0}.to-heart-icon svg{overflow:visible;width:15px;height:14px}.to-heart-icon g{-webkit-transform:scale(1);transform:scale(1)}.to-heart-icon path{-webkit-transform:scale(1);transform:scale(1);transition:fill .4s ease,stroke .4s ease}.no-liked .to-heart-icon path{fill:#999;stroke:#999}.empty-heart .to-heart-icon path{fill:transparent!important;stroke:#999}.liked .to-heart-icon path,.to-heart-icon svg:hover path{fill:#ff6863!important;stroke:#ff6863!important}@keyframes heartBeat{0%{transform:scale(1)}20%{transform:scale(.8)}30%{transform:scale(.95)}45%{transform:scale(.75)}50%{transform:scale(.85)}100%{transform:scale(.9)}}@-webkit-keyframes heartBeat{0%,100%,50%{-webkit-transform:scale(1)}20%{-webkit-transform:scale(.8)}30%{-webkit-transform:scale(.95)}45%{-webkit-transform:scale(.75)}}.heart-pulse g{-webkit-animation-name:heartBeat;animation-name:heartBeat;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-transform-origin:50% 50%;transform-origin:50% 50%}.to-post-like a{color:inherit!important;fill:inherit!important;stroke:inherit!important}
</style>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/js/jquery.typewatch.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var mecdata = {"day":"day","days":"days","hour":"hour","hours":"hours","minute":"minute","minutes":"minutes","second":"second","seconds":"seconds","elementor_edit_mode":"no","recapcha_key":"","ajax_url":"http:\/\/nopixel.online\/morbrowser\/wp-admin\/admin-ajax.php","fes_nonce":"32829dd788"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/js/frontend.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/tooltip/tooltip.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/js/events.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/lity/lity.min.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/colorbrightness/colorbrightness.min.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/modern-events-calendar/assets/packages/owl-carousel/owl.carousel.min.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var LS_Meta = {"v":"6.9.2"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.9.2'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.9.2'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js?ver=6.0'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.1.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/morbrowser\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/morbrowser\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/nopixel.online\/morbrowser\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.7.0'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.0.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/mega_main_menu/src/js/frontend.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/cornerstone/assets/dist/js/site/cs-head.13a2f57.js'></script>
<meta name="generator" content="Powered by LayerSlider 6.9.2 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
<link rel='https://api.w.org/' href='http://nopixel.online/morbrowser/wp-json/' />
<link rel="canonical" href="http://nopixel.online/morbrowser/chop-list-database/" />
<link rel='shortlink' href='https://wp.me/PacVC0-Ad' />
<link rel="alternate" type="application/json+oembed" href="http://nopixel.online/morbrowser/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fnopixel.online%2Fmorbrowser%2Fchop-list-database%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://nopixel.online/morbrowser/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fnopixel.online%2Fmorbrowser%2Fchop-list-database%2F&#038;format=xml" />

<!-- This site is using AdRotate v5.5.1 to display their advertisements - https://ajdg.solutions/products/adrotate-for-wordpress/ -->
<!-- AdRotate CSS -->
<style type="text/css" media="screen">
	.g { margin:0px; padding:0px; overflow:hidden; line-height:1; zoom:1; }
	.g img { height:auto; }
	.g-col { position:relative; float:left; }
	.g-col:first-child { margin-left: 0; }
	.g-col:last-child { margin-right: 0; }
	.g-1 { width:100%; max-width:300px; height:100%; max-height:300px; margin: 0 auto; }
	@media only screen and (max-width: 480px) {
		.g-col, .g-dyn, .g-single { width:100%; margin-left:0; margin-right:0; }
	}
</style>
<!-- /AdRotate CSS -->

<!-- <meta name="NextGEN" version="3.2.18" /> -->

<link rel='dns-prefetch' href='//v0.wordpress.com'/>
<style type='text/css'>img#wpstats{display:none}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Slider Revolution 6.1.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Chop List Database" />
<meta property="og:url" content="http://nopixel.online/morbrowser/chop-list-database/" />
<meta property="og:description" content="COMPACTS Blista by Dinka Influences:&nbsp;Hyundai i30, Honda Civic 3-doorCapacity:&nbsp;2 Dilettante by Karin Influences:&nbsp;Toyota Prius, Honda InsightCapacity:&nbsp;4 Issi by Weeny Influences:&amp;…" />
<meta property="article:published_time" content="2020-02-25T20:58:00+00:00" />
<meta property="article:modified_time" content="2020-02-27T05:03:11+00:00" />
<meta property="og:site_name" content="Mor Browser" />
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:text:title" content="Chop List Database" />
<meta name="twitter:card" content="summary" />

<!-- End Jetpack Open Graph Tags -->

<!-- BEGIN ExactMetrics v5.3.9 Universal Analytics - https://exactmetrics.com/ -->
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-123012725-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END ExactMetrics Universal Analytics -->
<script type="d31effe40bb7ad57682bf1dd-text/javascript">function setREVStartSize(t){try{var h,e=document.getElementById(t.c).parentNode.offsetWidth;if(e=0===e||isNaN(e)?window.innerWidth:e,t.tabw=void 0===t.tabw?0:parseInt(t.tabw),t.thumbw=void 0===t.thumbw?0:parseInt(t.thumbw),t.tabh=void 0===t.tabh?0:parseInt(t.tabh),t.thumbh=void 0===t.thumbh?0:parseInt(t.thumbh),t.tabhide=void 0===t.tabhide?0:parseInt(t.tabhide),t.thumbhide=void 0===t.thumbhide?0:parseInt(t.thumbhide),t.mh=void 0===t.mh||""==t.mh||"auto"===t.mh?0:parseInt(t.mh,0),"fullscreen"===t.layout||"fullscreen"===t.l)h=Math.max(t.mh,window.innerHeight);else{for(var i in t.gw=Array.isArray(t.gw)?t.gw:[t.gw],t.rl)void 0!==t.gw[i]&&0!==t.gw[i]||(t.gw[i]=t.gw[i-1]);for(var i in t.gh=void 0===t.el||""===t.el||Array.isArray(t.el)&&0==t.el.length?t.gh:t.el,t.gh=Array.isArray(t.gh)?t.gh:[t.gh],t.rl)void 0!==t.gh[i]&&0!==t.gh[i]||(t.gh[i]=t.gh[i-1]);var r,a=new Array(t.rl.length),n=0;for(var i in t.tabw=t.tabhide>=e?0:t.tabw,t.thumbw=t.thumbhide>=e?0:t.thumbw,t.tabh=t.tabhide>=e?0:t.tabh,t.thumbh=t.thumbhide>=e?0:t.thumbh,t.rl)a[i]=t.rl[i]<window.innerWidth?0:t.rl[i];for(var i in r=a[0],a)r>a[i]&&0<a[i]&&(r=a[i],n=i);var d=e>t.gw[n]+t.tabw+t.thumbw?1:(e-(t.tabw+t.thumbw))/t.gw[n];h=t.gh[n]*d+(t.tabh+t.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(t.c).height=h,window.rs_init_css.innerHTML+="#"+t.c+"_wrapper { height: "+h+"px }"}catch(t){console.log("Failure at Presize of Slider:"+t)}};</script>
			<style type="text/css" id="wp-custom-css">
				.embed-nav {
    background: #111111;
    display: none;
}

element.style {
    border: 1px solid #000000;
}


.achievement-wrap .badgeos-item-image {
    margin: 0 15px 15px 0;
    opacity: 2;
}



.woocommerce .price {
    display: none;
    line-height: 1;
}

.uwa_inc_price_hint {
    float: left;
    width: 100%;
    padding-top: 5px;
    padding-bottom: 10px;
    display: none;
}

.uwa_auction_condition {
    float: left;
    width: 100%;
    padding-top: 5px;
    padding-bottom: 10px;
    display: none;
}


.uwa_auction_end_time {
    float: left;
    width: 100%;
    padding-top: 5px;
    padding-bottom: 10px;
    display: none;
}

.uwa_auction_product_timezone
 {
    float: left;
    width: 100%;
    padding-top: 5px;
    padding-bottom: 10px;
    display: none;
}


.product_meta
 {
    float: left;
    width: 100%;
    padding-top: 5px;
    padding-bottom: 10px;
    display: none;
}



			</style>
		<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style id="tco-content-dock-generated-css" type="text/css">

      /* Base Styles
      // -------- */

      .visually-hidden {
        overflow: hidden;
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        border: 0;
        padding: 0;
        clip: rect(0 0 0 0);
      }

      .visually-hidden.focusable:active,
      .visually-hidden.focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
      }

      .tco-content-dock {
        position: fixed;
        bottom: 0;
        ;
        border-bottom: 0;
        padding: 30px;
        background-color: ;
        z-index: 1050;
        -webkit-transition: all 0.5s ease;
                transition: all 0.5s ease;
        -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
              }


      /* Headings
      // ----- */

      .tco-content-dock h1,
      .tco-content-dock h2,
      .tco-content-dock h3,
      .tco-content-dock h4,
      .tco-content-dock h5,
      .tco-content-dock h6 {
        color:  !important;
      }


      /* Links
      // -- */

      .tco-content-dock :not(.tco-recent-posts) a:not(.tco-btn) {
        color:  !important;
      }

      .tco-content-dock :not(.tco-recent-posts) a:not(.tco-btn):hover {
        color:  !important;
      }


      /* Widget Styles
      // ---------- */

      .tco-content-dock .widget {
        text-shadow: none;
        color:  !important;
      }

      .tco-content-dock .widget:before {
        display: none;
      }

      .tco-content-dock .h-widget {
        margin: 0 0 0.5em;
        font-size: 1.65em;
        line-height: 1.2;
      }


      /* Close
      // -- */

      .tco-close-content-dock {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 12px;
        line-height: 1;
        text-decoration: none;
      }

      .tco-close-content-dock span {
        color:  !important;
        -webkit-transition: color 0.3s ease;
                transition: color 0.3s ease;
      }

      .tco-close-content-dock:hover span {
        color:  !important;
      }

      .tco-content-dock {
        border: none;
      }

      a.tco-close-content-dock span[data-content]::before {
        content: attr(data-content);
      }


      /* Responsive
      // ------- */

      @media (matco-width: 767px) {
        .tco-content-dock {
          display: none;
        }
      }

</style>
  <style id="x-generated-css">a,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,.x-breadcrumb-wrap a:hover,.widget ul li a:hover,.widget ol li a:hover,.widget.widget_text ul li a,.widget.widget_text ol li a,.widget_nav_menu .current-menu-item > a,.x-accordion-heading .x-accordion-toggle:hover,.x-comment-author a:hover,.x-comment-time:hover,.x-recent-posts a:hover .h-recent-posts{color:rgb(216,15,15);}a:hover,.widget.widget_text ul li a:hover,.widget.widget_text ol li a:hover,.x-twitter-widget ul li a:hover{color:#d80f0f;}.woocommerce .price > .amount,.woocommerce .price > ins > .amount,.woocommerce .star-rating:before,.woocommerce .star-rating span:before,.woocommerce li.product .entry-header h3 a:hover{color:rgb(216,15,15);}.rev_slider_wrapper,a.x-img-thumbnail:hover,.x-slider-container.below,.page-template-template-blank-3-php .x-slider-container.above,.page-template-template-blank-6-php .x-slider-container.above{border-color:rgb(216,15,15);}.entry-thumb:before,.x-pagination span.current,.flex-direction-nav a,.flex-control-nav a:hover,.flex-control-nav a.flex-active,.mejs-time-current,.x-dropcap,.x-skill-bar .bar,.x-pricing-column.featured h2,.h-comments-title small,.x-entry-share .x-share:hover,.x-highlight,.x-recent-posts .x-recent-posts-img:after{background-color:rgb(216,15,15);}.woocommerce .onsale,.widget_price_filter .ui-slider .ui-slider-range{background-color:rgb(216,15,15);}.x-nav-tabs > .active > a,.x-nav-tabs > .active > a:hover{box-shadow:inset 0 3px 0 0 rgb(216,15,15);}.x-main{width:69.536945%;}.x-sidebar{width:25.536945%;}.x-comment-author,.x-comment-time,.comment-form-author label,.comment-form-email label,.comment-form-url label,.comment-form-rating label,.comment-form-comment label,.widget_calendar #wp-calendar caption,.widget.widget_rss li .rsswidget{font-family:"Lato",sans-serif;font-weight:700;}.p-landmark-sub,.p-meta,input,button,select,textarea{font-family:"Lato",sans-serif;}.widget ul li a,.widget ol li a,.x-comment-time{color:#999999;}.woocommerce .price > .from,.woocommerce .price > del,.woocommerce p.stars span a:after{color:#999999;}.widget_text ol li a,.widget_text ul li a{color:rgb(216,15,15);}.widget_text ol li a:hover,.widget_text ul li a:hover{color:#d80f0f;}.comment-form-author label,.comment-form-email label,.comment-form-url label,.comment-form-rating label,.comment-form-comment label,.widget_calendar #wp-calendar th,.p-landmark-sub strong,.widget_tag_cloud .tagcloud a:hover,.widget_tag_cloud .tagcloud a:active,.entry-footer a:hover,.entry-footer a:active,.x-breadcrumbs .current,.x-comment-author,.x-comment-author a{color:#272727;}.widget_calendar #wp-calendar th{border-color:#272727;}.h-feature-headline span i{background-color:#272727;}@media (max-width:979px){}html{font-size:14px;}@media (min-width:480px){html{font-size:14px;}}@media (min-width:767px){html{font-size:14px;}}@media (min-width:979px){html{font-size:14px;}}@media (min-width:1200px){html{font-size:14px;}}body{font-style:normal;font-weight:400;color:#999999;background-color:#f3f3f3;}.w-b{font-weight:400 !important;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:"Lato",sans-serif;font-style:normal;font-weight:700;}h1,.h1{letter-spacing:-0.035em;}h2,.h2{letter-spacing:-0.035em;}h3,.h3{letter-spacing:-0.035em;}h4,.h4{letter-spacing:-0.035em;}h5,.h5{letter-spacing:-0.035em;}h6,.h6{letter-spacing:-0.035em;}.w-h{font-weight:700 !important;}.x-container.width{width:88%;}.x-container.max{max-width:1200px;}.x-main.full{float:none;display:block;width:auto;}@media (max-width:979px){.x-main.full,.x-main.left,.x-main.right,.x-sidebar.left,.x-sidebar.right{float:none;display:block;width:auto !important;}}.entry-header,.entry-content{font-size:1rem;}body,input,button,select,textarea{font-family:"Lato",sans-serif;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a,.h1 a,.h2 a,.h3 a,.h4 a,.h5 a,.h6 a,blockquote{color:#272727;}.cfc-h-tx{color:#272727 !important;}.cfc-h-bd{border-color:#272727 !important;}.cfc-h-bg{background-color:#272727 !important;}.cfc-b-tx{color:#999999 !important;}.cfc-b-bd{border-color:#999999 !important;}.cfc-b-bg{background-color:#999999 !important;}.x-btn,.button,[type="submit"]{color:#ffffff;border-color:#ac1100;background-color:#ff2a13;margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.5);box-shadow:0 0.25em 0 0 #a71000,0 4px 9px rgba(0,0,0,0.75);border-radius:0.25em;}.x-btn:hover,.button:hover,[type="submit"]:hover{color:#ffffff;border-color:#600900;background-color:#ef2201;margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.5);box-shadow:0 0.25em 0 0 #a71000,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-real,.x-btn.x-btn-real:hover{margin-bottom:0.25em;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.65);}.x-btn.x-btn-real{box-shadow:0 0.25em 0 0 #a71000,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-real:hover{box-shadow:0 0.25em 0 0 #a71000,0 4px 9px rgba(0,0,0,0.75);}.x-btn.x-btn-flat,.x-btn.x-btn-flat:hover{margin-bottom:0;text-shadow:0 0.075em 0.075em rgba(0,0,0,0.65);box-shadow:none;}.x-btn.x-btn-transparent,.x-btn.x-btn-transparent:hover{margin-bottom:0;border-width:3px;text-shadow:none;text-transform:uppercase;background-color:transparent;box-shadow:none;}.woocommerce p.stars span a{background-color:rgb(216,15,15);}.x-topbar .p-info a:hover,.x-widgetbar .widget ul li a:hover{color:rgb(216,15,15);}.x-topbar .p-info,.x-topbar .p-info a,.x-navbar .desktop .x-nav > li > a,.x-navbar .desktop .sub-menu a,.x-navbar .mobile .x-nav li > a,.x-breadcrumb-wrap a,.x-breadcrumbs .delimiter{color:rgb(39,39,39);}.x-navbar .desktop .x-nav > li > a:hover,.x-navbar .desktop .x-nav > .x-active > a,.x-navbar .desktop .x-nav > .current-menu-item > a,.x-navbar .desktop .sub-menu a:hover,.x-navbar .desktop .sub-menu .x-active > a,.x-navbar .desktop .sub-menu .current-menu-item > a,.x-navbar .desktop .x-nav .x-megamenu > .sub-menu > li > a,.x-navbar .mobile .x-nav li > a:hover,.x-navbar .mobile .x-nav .x-active > a,.x-navbar .mobile .x-nav .current-menu-item > a{color:#272727;}.x-navbar .desktop .x-nav > li > a:hover,.x-navbar .desktop .x-nav > .x-active > a,.x-navbar .desktop .x-nav > .current-menu-item > a{box-shadow:inset 0 4px 0 0 rgb(216,15,15);}.x-navbar .desktop .x-nav > li > a{height:90px;padding-top:37px;}.x-navbar .desktop .x-nav > li ul{top:75px;;}@media (max-width:979px){}.x-btn-widgetbar{border-top-color:#000000;border-right-color:#000000;}.x-btn-widgetbar:hover{border-top-color:#444444;border-right-color:#444444;}.x-navbar-inner{min-height:90px;}.x-brand{margin-top:22px;font-family:"Lato",sans-serif;font-size:42px;font-style:normal;font-weight:700;letter-spacing:-0.035em;color:rgb(255,255,255);}.x-brand:hover,.x-brand:focus{color:rgb(255,255,255);}.x-navbar .x-nav-wrap .x-nav > li > a{font-family:"Lato",sans-serif;font-style:normal;font-weight:700;letter-spacing:0.085em;}.x-navbar .desktop .x-nav > li > a{font-size:13px;}.x-navbar .desktop .x-nav > li > a:not(.x-btn-navbar-woocommerce){padding-left:20px;padding-right:20px;}.x-navbar .desktop .x-nav > li > a > span{margin-right:-0.085em;}.x-btn-navbar{margin-top:20px;}.x-btn-navbar,.x-btn-navbar.collapsed{font-size:24px;}@media (max-width:979px){.x-widgetbar{left:0;right:0;}}</style><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i&#038;subset=latin,latin-ext" type="text/css" media="all" data-x-google-fonts /></head>

<body class="page-template page-template-template-blank-3 page-template-template-blank-3-php page page-id-2245 theme-x mmm mega_main_menu-2-1-2 woocommerce-no-js x-integrity x-integrity-light x-full-width-layout-active x-content-sidebar-active x-post-meta-disabled x-portfolio-meta-disabled wpb-js-composer js-comp-ver-6.0.5 vc_responsive x-navbar-static-active x-v6_1_6 cornerstone-v4_0_4">

  <div id="x-root" class="x-root">

    
    <div id="top" class="site">

    
  <div class="x-container max width offset">
    <div class="x-main full" role="main">

      
        <article id="post-2245" class="post-2245 page type-page status-publish hentry no-post-thumbnail">
          <div class="entry-wrap">
            

<div class="entry-content content">


  
<h2 style="text-align:center"><strong>COMPACTS</strong></h2>



<h3>Blista by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Hyundai i30, Honda Civic 3-door<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistaf.jpg" alt=""/></figure>



<h3>Dilettante by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota Prius, Honda Insight<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dilettante1f.jpg" alt=""/></figure>



<h3>Issi by Weeny</h3>



<p><strong>Influences:</strong>&nbsp;Mini Cooper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/issif.jpg" alt=""/></figure>



<h3>Panto by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Smart Fortwo<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pantof.jpg" alt=""/></figure>



<h3>Prairie by Bollokan</h3>



<p><strong>Influences:</strong>&nbsp;Hyundai Tiburon<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/prairief.jpg" alt=""/></figure>



<h3>Rhapsody by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;AMC Pacer sides/rear, Volkswagen Golf front<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rhapsodyf.jpg" alt=""/></figure>



<h2 style="text-align:center">COUPES</h2>



<h3>Cognoscenti Cabrio by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental GT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenticabriof.jpg" alt=""/></figure>



<h3>Exemplar by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Aston Martin Rapide<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/exemplarf.jpg" alt=""/></figure>



<h3>F620 by Ocelot</h3>



<p><strong>Influences:</strong>&nbsp;Maserati GranTurismo<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/f620f.jpg" alt=""/></figure>



<h3>Felon by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Jaguar XF, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/felonf.jpg" alt=""/></figure>



<h3>Felon GT by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Jaguar XF, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/felongtf.jpg" alt=""/></figure>



<h3>Jackal by Ocelot</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/jackalf.jpg" alt=""/></figure>



<h3>Oracle by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 7 Series<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/oracle1f.jpg" alt=""/></figure>



<h3>Oracle 2 by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 7 Series, Acura RLX rear<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/oracle2f.jpg" alt=""/></figure>



<h3>Sentinel by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 3 Series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sentinelf.jpg" alt=""/></figure>



<h3>Sentinel XS by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW M3<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sentinelxsf.jpg" alt=""/></figure>



<h3>Windsor by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls Royce Wraith<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/windsorf.jpg" alt=""/></figure>



<h3>Windsor Drop by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls Royce Ghost<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/windsor2.jpg" alt=""/></figure>



<h3>Zion by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 6 Series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/zionf.jpg" alt=""/></figure>



<h3>Zion Cabrio by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW M6<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/zioncabriof.jpg" alt=""/></figure>



<h2 style="text-align:center">MOTORCYCLES</h2>



<h3>Akuma by Dinka</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/akumaf.jpg" alt=""/></figure>



<h3>Avarus by LCC</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/avarus.jpg" alt=""/></figure>



<h3>Bagger by Western Motorcycle Company</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baggerf.jpg" alt=""/></figure>



<h3>Bati 801 by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 848<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bati801f.jpg" alt=""/></figure>



<h3>Bati 801RR by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 1199<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bati801rrf.jpg" alt=""/></figure>



<h3>BF400 by Nagasaki</h3>



<p><strong>Influences:</strong>&nbsp;KTM 450 Rally<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bf400.jpg" alt=""/></figure>



<h3>Carbon RS by Nagasaki</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 1199, EBR 1190RS<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/carbonrsf.jpg" alt=""/></figure>



<h3>Defiler by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Bandit 1200<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/diabolus-custom.jpg" alt=""/></figure>



<h3>Double-T by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Aprilia RSV4, Honda CBR1000RR<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/doubletf.jpg" alt=""/></figure>



<h3>Enduro by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda XL/XR/CB series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/endurof.jpg" alt=""/></figure>



<h3>Esskey by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Scrambler<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/esskey.jpg" alt=""/></figure>



<h3>Faggio by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Vespa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faggiof.jpg" alt=""/></figure>



<h3>Faggio Mod by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Vespa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faggio-mod.jpg" alt=""/></figure>



<h3>FCR 1000 by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;BMW R100<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fcr-1000.jpg" alt=""/></figure>



<h3>FCR 1000 Custom by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;BMW R100<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fcr-1000-custom.jpg" alt=""/></figure>



<h3>Gargoyle by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Indian 101 Scout hillclimber<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gargoyle.jpg" alt=""/></figure>



<h3>Hakuchou by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Hayabusa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hakuchouf.jpg" alt=""/></figure>



<h3>Hakuchou Drag by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Hayabusa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hakuchou-drag-bike.jpg" alt=""/></figure>



<h3>Hexer by LCC</h3>



<p><strong>Influences:</strong>&nbsp;West Coast Choppers bikes<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hexerf.jpg" alt=""/></figure>



<h3>Innovation by LCC</h3>



<p><strong>Influences:</strong>&nbsp;Custom<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/innovationf.jpg" alt=""/></figure>



<h3>Lectro by Principe</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Streetfighter S, MV Agusta Brutale S<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x0/lectro.jpg" alt="lectro"/></figure>



<h3>Manchez by Maibatsu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/manchez.jpg" alt=""/></figure>



<h3>Nemesis by Principe</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Monster/Hypermotard<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nemesisf.jpg" alt=""/></figure>



<h3>Nightblade by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley Davidson Night Rod Special<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nightblade.jpg" alt=""/></figure>



<h3>PCJ 600 by Shitzu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2<br><strong>Features:</strong><br><strong>Notes:</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pcj600f.jpg" alt=""/></figure>



<h3>Rat Bike by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley-Davidson 1200<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rat-bike.jpg" alt=""/></figure>



<h3>Ruffian by Pegassi</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ruffianf.jpg" alt=""/></figure>



<h3>Sanchez by Maibatsu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sanchez2f.jpg" alt=""/></figure>



<h3>Sovereign by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley Davidson Electra Glide/Road King<br><strong>Capacity:</strong>&nbsp;1<br><strong>Features:</strong><br><strong>Notes:</strong>&nbsp;Independence Day Special</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sovereignf.jpg" alt=""/></figure>



<h3>Thrust by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CTX1300<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/thrustf.jpg" alt=""/></figure>



<h3>Vader by Shitzu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/vaderf.jpg" alt=""/></figure>



<h2 style="text-align:center">MUSCLE</h2>



<h3>Blade by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Falcon/Fairlane<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bladef.jpg" alt=""/></figure>



<h3>Buccaneer by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Ford Fairlane, Buick Riviera<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buccaneerf.jpg" alt=""/></figure>



<h3>Chino by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford LTD<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dukeodeathf.jpg" alt=""/></figure>



<h3>Dukes by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Pontiac LeMans, Dodge Charger/Challenger<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dukesf.jpg" alt=""/></figure>



<h3>Faction by Willard</h3>



<p><strong>Influences:</strong>&nbsp;Buick Regal<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faction.jpg" alt=""/></figure>



<h3>Gauntlet by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Challenger, Chevy Camaro<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gauntletf.jpg" alt=""/></figure>



<h3>Lurcher by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Ford Fairlane, Buick Riviera<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/lurcher.jpg" alt=""/></figure>



<h3>Moonbeam by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/moonbeam.jpg" alt=""/></figure>



<h3>Nightshade by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Pontiac GTO/Firebird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nightshade.jpg" alt=""/></figure>



<h3>Phoenix by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Pontiac Firebird, Chevy Camaro<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/phoenixf.jpg" alt=""/></figure>



<h3>Picador by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy El Camino<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/picadorf.jpg" alt=""/></figure>



<h3>Ruiner by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Pontiac Firebird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ruinerf.jpg" alt=""/></figure>



<h3>Sabre Turbo by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevrolet Chevelle, Oldsmobile Cutlass<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sabref.jpg" alt=""/></figure>



<h3>Stallion by Classique</h3>



<p><strong>Influences:</strong>&nbsp;Oldsmobile Cutlass<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stallion2f.jpg" alt=""/></figure>



<h3>Tampa by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Dart/Charger, Ford Mustang<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tampa.jpg" alt=""/></figure>



<h3>Vigero by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Plymouth Barracuda<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/vigerof.jpg" alt=""/></figure>



<h3>Virgo by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Chrysler Newport, Lincoln Continental<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/virgof.jpg" alt=""/></figure>



<h3>Voodoo by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Impala<br><strong>Capacity:</strong>&nbsp;2<br></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/voodoof.jpg" alt=""/></figure>



<h2 style="text-align:center">SEDANS</h2>



<h3>Asea by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Aveo/Sonic, Dacia Logan<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/aseaf.jpg" alt=""/></figure>



<h3>Asterope by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota Corolla<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/asteropef.jpg" alt=""/></figure>



<h3>Cognoscenti by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental Flying Spur/Mulsanne, Maybach 57/62<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenti.jpg" alt=""/></figure>



<h3>Cognoscenti 55 by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental Flying Spur/Mulsanne<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenti2.jpg" alt=""/></figure>



<h3>Emperor by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Fleetwood<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/emperorf.jpg" alt=""/></figure>



<h3>Fugitive by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy SS<br><strong>Capacity:</strong>&nbsp;4<br></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fugitivef.jpg" alt=""/></figure>



<h3>Glendale by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz E- and SL-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/glendalef.jpg" alt=""/></figure>



<h3>Ingot by Vulcar</h3>



<p><strong>Influences:</strong>&nbsp;Audi A6 Avant, Nissan Stagea<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ingotf.jpg" alt=""/></figure>



<h3>Intruder by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Infiniti Q45/I30<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/intruderf.jpg" alt=""/></figure>



<h3>Premier by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Cobalt, Chevy Aveo<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/premierf.jpg" alt=""/></figure>



<h3>Primo by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac DeVille, Cadillac Allante<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/primof.jpg" alt=""/></figure>



<h3>Regina by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Caprice wagon<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/reginaf.jpg" alt=""/></figure>



<h3>Schafter by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafterf.jpg" alt=""/></figure>



<h3>Schafter LWB by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafter4.jpg" alt=""/></figure>



<h3>Schafter V12 by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafter3.jpg" alt=""/></figure>



<h3>Stanier by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Crown Victoria<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stanierf.jpg" alt=""/></figure>



<h3>Stratum by Zirconium</h3>



<p><strong>Influences:</strong>&nbsp;Honda Accord station wagon<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stratumf.jpg" alt=""/></figure>



<h3>Stretch by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Modified Lincoln Town Car<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stretchf.jpg" alt=""/></figure>



<h3>Super Diamond by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls-Royce Phantom<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/superdiamondf.jpg" alt=""/></figure>



<h3>Surge by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Volt<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/surgef.jpg" alt=""/></figure>



<h3>Tailgater by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi A6<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tailgaterf.jpg" alt=""/></figure>



<h3>Stretch E by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;5</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/limo2.jpg" alt=""/></figure>



<h3>Warrener by Vulcar</h3>



<p><strong>Influences:</strong>&nbsp;Nissan Skyline HGLC10<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/warrenerf.jpg" alt=""/></figure>



<h3>Washington by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Lincoln Town Car<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/washingtonf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS</h2>



<h3>9F by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi R8<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/9ff.jpg" alt=""/></figure>



<h3>9F Cabrio by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi R8<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/9fcabriof.jpg" alt=""/></figure>



<h3>Alpha by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac ATS, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/alphaf.jpg" alt=""/></figure>



<h3>Banshee by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Viper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/banshee2f.jpg" alt=""/></figure>



<h3>Bestia by Grotti</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari FF/GTC4Lusso<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bestiagts.jpg" alt=""/></figure>



<h3>Blista Compact by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CR-X<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistacompactf.jpg" alt=""/></figure>



<h3>Buffalo by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Charger<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buffalo1f.jpg" alt=""/></figure>



<h3>Buffalo S by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Charger<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buffalo2f.jpg" alt=""/></figure>



<h3>Carbonizzare by Grotti</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari California front, V12 Zagato rear<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/carbonizzaref.jpg" alt=""/></figure>



<h3>Comet by Pfister</h3>



<p><strong>Influences:</strong>&nbsp;Porsche 911<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cometf.jpg" alt=""/></figure>



<h3>Coquette by Invetero</h3>



<p><strong>Influences:</strong>&nbsp;Corvette C7, Jaguar F-Type rear<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/coquette1f.jpg" alt=""/></figure>



<h3>Elegy Retro Custom by Annis</h3>



<p><strong>Influences:</strong>&nbsp;Nissan GT-R<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/elegy-retro-custom.jpg" alt=""/></figure>



<h3>Elegy RH8 by Annis</h3>



<p><strong>Influences:</strong>&nbsp;Nissan GT-R<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/elegyrh8f.jpg" alt=""/></figure>



<h3>Feltzer by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz SL-class<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/feltzerf.jpg" alt=""/></figure>



<h3>Furore GT by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Maserati GranTurismo MC &amp; Alfieri concept<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/furoregtf.jpg" alt=""/></figure>



<h3>Fusilade by Schyster</h3>



<p><strong>Influences:</strong>&nbsp;Chrysler Crossfire<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fusiladef.jpg" alt=""/></figure>



<h3>Futo by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota AE86<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/futof.jpg" alt=""/></figure>



<h3>Go Go Monkey Blista (Compact) by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CR-X<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistacompact2f.jpg" alt=""/></figure>



<h3>Jester by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Acura NSX<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/jesterf.jpg" alt=""/></figure>



<h3>Kuruma by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Mitsubishi Lancer Evolution X, Subaru WRX STI<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x0/kuruma.jpg" alt="Kuruma"/></figure>



<h3>Massacro by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari F12, Aston Martin Vanquish<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/massacrof.jpg" alt=""/></figure>



<h3>Omnis by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi Quattro, Fiat 131 Rally<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/omnis.jpg" alt=""/></figure>



<h3>Penumbra by Maibatsu</h3>



<p><strong>Influences:</strong>&nbsp;Mitsubishi Eclipse, Audi TT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/penumbraf.jpg" alt=""/></figure>



<h3>Rapid GT by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Aston Martin Vantage<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rapidgtf.jpg" alt=""/></figure>



<h3>Schwartzer by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and C-class<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schwartzerf.jpg" alt=""/></figure>



<h3>Sultan by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Lexus IS, Mitsubishi Lancer Evo VI<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sultanf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS CLASSIC</h2>



<h3>Manana by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Buick LeSabre, Cadillac Eldorado<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/mananaf.jpg" alt=""/></figure>



<h3>Peyote by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Thunderbird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/peyotef.jpg" alt=""/></figure>



<h3>Pigalle by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Citroen SM, Maserati Ghibli<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pigallef.jpg" alt=""/></figure>



<h3>Tornado by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Bel Air<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tornado3f.jpg" alt=""/></figure>



<h2 style="text-align:center">SUPER</h2>



<h3>811 by Pfister</h3>



<p><strong>Influences:</strong>&nbsp;Porsche 918<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pfister811.jpg" alt=""/></figure>



<h3>Adder by Truffade</h3>



<p><strong>Influences:</strong>&nbsp;Bugatti SuperVeyron Concept<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/adderf.jpg" alt=""/></figure>



<h3>Banshee 900R by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Viper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/banshee900r.jpg" alt=""/></figure>



<h3>Bullet by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford GT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bulletf.jpg" alt=""/></figure>



<h3>Infernus by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Lamborghini Murcielago, Pagani Zonda<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/infernusf.jpg" alt=""/></figure>



<h3>Rocket Voltic by Coil</h3>



<p><strong>Influences:</strong>&nbsp;Lotus Elise, Tesla Roadster<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rocket-voltic.jpg" alt=""/></figure>



<h3>Sultan RS by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Lexus IS, Mitsubishi Lancer Evo V<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sultanrs.jpg" alt=""/></figure>



<h3>Voltic by Coil</h3>



<p><strong>Influences:</strong>&nbsp;Lotus Elise, Tesla Roadster<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/volticf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS UTILITY</h2>



<h3>Baller by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller1f.jpg" alt=""/></figure>



<h3>Baller 2 by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Evoque<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller2f.jpg" alt=""/></figure>



<h3>Baller LE by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Sport SVR<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller3.jpg" alt=""/></figure>



<h3>Baller LE LWB by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Sport SVR<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller4.jpg" alt=""/></figure>



<h3>BeeJay XL by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota FJ Crusier<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/beejayxlf.jpg" alt=""/></figure>



<h3>Cavalcade by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Escalade<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cavalcade1f.jpg" alt=""/></figure>



<h3>Cavalcade 2 by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Escalade<br><strong>Capacity:</strong>&nbsp;<strong>4</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cavalcade2f.jpg" alt=""/></figure>



<h3>Granger by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevrolet Suburban<br><strong>Capacity:</strong>&nbsp;8</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/grangerf.jpg" alt=""/></figure>



<h3>Gresley by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Durango<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gresleyf.jpg" alt=""/></figure>



<h3>Habanero by Emperor</h3>



<p><strong>Influences:</strong>&nbsp;Lexus RX<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/habanerof.jpg" alt=""/></figure>



<h3>Huntley S by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley SUV (aka Falcon)<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/huntleysf.jpg" alt=""/></figure>



<h3>Landstalker by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Ford Expedition<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/landstalkerf.jpg" alt=""/></figure>



<h3>Mesa by Canis</h3>



<p><strong>Influences:</strong>&nbsp;Jeep Wrangler JK Unlimited, UAZ-469<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/mesaf.jpg" alt=""/></figure>



<h3>Patriot by Mammoth</h3>



<p><strong>Influences:</strong>&nbsp;Hummer H2<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/patriotf.jpg" alt=""/></figure>



<h3>Radius by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Edge<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/radiusf.jpg" alt=""/></figure>



<h3>Rocoto by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Porsche Cayenne<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rocotof.jpg" alt=""/></figure>



<h3>Seminole by Canis</h3>



<p><strong>Influences:</strong>&nbsp;Jeep Cherokee, Nissan Pathfinder<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/seminolef.jpg" alt=""/></figure>



<h3>Serrano by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz M-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/serranof.jpg" alt=""/></figure>



<h3>XLS by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-GL Class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/xls.jpg" alt=""/></figure>



<h2 style="text-align:center">VANS / TRUCK</h2>



<h3>Bison by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Ram HD<br><strong>Capacity:</strong>&nbsp;6</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bisonf.jpg" alt=""/></figure>



<h3>Bobcat XL by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;GM trucks<br><strong>Capacity:</strong>&nbsp;5</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bobcatxlf.jpg" alt=""/></figure>



<h3>Minivan by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Windstar, Dodge Caravan<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/minivanf.jpg" alt=""/></figure>



<h3>Rumpo Custom by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rumpo-custom.jpg" alt=""/></figure>



<h3>Speedo by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/speedof.jpg" alt=""/></figure>



<h3>Youga by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Ram Van<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/yougaf.jpg" alt=""/></figure>



<h3>Youga Classic by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Ford Econoline<br><strong>Capacity:</strong>&nbsp;<strong>4</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/youga-classic.jpg" alt=""/></figure>
  

</div>

          </div>
        </article>

      
    </div>
  </div>


    
    </div> <!-- END .x-site -->

    
  </div> <!-- END .x-root -->

<!-- ngg_resource_manager_marker -->		<script type="d31effe40bb7ad57682bf1dd-text/javascript">
			var ajaxRevslider;
			
			jQuery(document).ready(function() {

				
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content	= '';
					var data	= {
						action:			'revslider_ajax_call_front',
						client_action:	'get_slider_html',
						token:			'c89ce0793f',
						type:			obj.type,
						id:				obj.id,
						aspectratio:	obj.aspectratio
					};
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:		'post',
						url:		'http://nopixel.online/morbrowser/wp-admin/admin-ajax.php',
						dataType:	'json',
						data:		data,
						async:		false,
						success:	function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error:		function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector + ' .rev_slider').revkill();
				};


				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION				
				if (jQuery.fn.tpessential !== undefined) 					
					if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') 
						jQuery.fn.tpessential.defaults.ajaxTypes.push({type: 'revslider', func: ajaxRevslider, killfunc: ajaxRemoveRevslider, openAnimationSpeed: 0.3});   
						// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
						// func: the Function Name which is Called once the Item with the Post Type has been clicked
						// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
						// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
					
				
				
			});
		</script>
			<div style="display:none">
	</div>
	<script type="d31effe40bb7ad57682bf1dd-text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
			<script type="d31effe40bb7ad57682bf1dd-text/javascript">
			var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A300%2C%22placeholderImgSrc%22%3A%22http%3A%5C%2F%5C%2Fnopixel.online%5C%2Fmorbrowser%5C%2Ffiles%5C%2Fwoocommerce-placeholder.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A15%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A15%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fnopixel.online%5C%2Fmorbrowser%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22http%3A%5C%2F%5C%2Fnopixel.online%5C%2Fmorbrowser%5C%2F%22%7D' ) );
		</script>
		<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var impression_object = {"ajax_url":"http:\/\/nopixel.online\/morbrowser\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/adrotate/library/jquery.adrotate.dyngroup.js'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var click_object = {"ajax_url":"http:\/\/nopixel.online\/morbrowser\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/adrotate/library/jquery.adrotate.clicktracker.js'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var tco_woo_js = {"tco_woo_url":"http:\/\/nopixel.online\/morbrowser","ajaxurl":"http:\/\/nopixel.online\/morbrowser\/wp-admin\/admin-ajax.php","uploading":"Uploading","processing":"Processing, please wait","error":"An error occured. Please try again","loading_image":"http:\/\/nopixel.online\/morbrowser\/wp-content\/plugins\/tco-woo-checkout-editor\/\/assets\/img\/update.gif"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/tco-woo-checkout-editor//assets/js/tco_woo_scripts.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/morbrowser\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/morbrowser\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.7.0'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/morbrowser\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/morbrowser\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ef0670d9a9b300d7c04658e01ac8ffbe","fragment_name":"wc_fragments_ef0670d9a9b300d7c04658e01ac8ffbe","request_timeout":"5000"};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.7.0'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
		} );
	
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='https://secure.gravatar.com/js/gprofiles.js?ver=2020Febaa'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/jetpack/modules/wpgroho.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/cornerstone/assets/dist/js/site/cs-body.13a2f57.js'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/themes/x/framework/dist/js/site/x.js?ver=6.1.6'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/comment-reply.min.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
/* <![CDATA[ */
var tg_global_var = {"url":"http:\/\/nopixel.online\/morbrowser\/wp-admin\/admin-ajax.php","nonce":"4785c9b074","is_mobile":null,"mediaelement":"","mediaelement_ex":null,"lightbox_autoplay":"","debounce":"","meta_data":null,"main_query":{"page":0,"pagename":"chop-list-database","error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"chop-list-database","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"post_type":"","posts_per_page":10,"nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"}};
/* ]]> */
</script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-content/plugins/the-grid/frontend/assets/js/the-grid.min.js?ver=2.7.1'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='http://nopixel.online/morbrowser/wp-includes/js/wp-embed.min.js?ver=5.2.5'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">var to_like_post = {"url":"http://nopixel.online/morbrowser/wp-admin/admin-ajax.php","nonce":"bdc7b0426e"};!function(t){"use strict";t(document).ready(function(){t(document).on("click",".to-post-like:not('.to-post-like-unactive')",function(e){e.preventDefault();var o=t(this),n=o.data("post-id"),s=parseInt(o.find(".to-like-count").text());return o.addClass("heart-pulse"),t.ajax({type:"post",url:to_like_post.url,data:{nonce:to_like_post.nonce,action:"to_like_post",post_id:n,like_nb:s},context:o,success:function(e){e&&((o=t(this)).attr("title",e.title),o.find(".to-like-count").text(e.count),o.removeClass(e.remove_class+" heart-pulse").addClass(e.add_class))}}),!1})})}(jQuery);</script><!-- AdRotate JS -->
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
jQuery(document).ready(function(){
if(jQuery.fn.gslider) {
	jQuery('.g-1').gslider({ groupid: 1, speed: 6000 });
}
});
</script>
<!-- /AdRotate JS -->

<script type="d31effe40bb7ad57682bf1dd-text/javascript" src='https://stats.wp.com/e-202009.js' async='async' defer='defer'></script>
<script type="d31effe40bb7ad57682bf1dd-text/javascript">
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:7.8.1',blog:'150844760',post:'2245',tz:'0',srv:'nopixel.online'} ]);
	_stq.push([ 'clickTrackerInit', '150844760', '2245' ]);
</script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d31effe40bb7ad57682bf1dd-|49" defer=""></script></body>
</html>
