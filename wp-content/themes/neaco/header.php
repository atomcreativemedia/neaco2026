<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('') ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=yes">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<?php if ($_SERVER['HTTP_HOST'] !== 'neaco.local:8888') : ?>
		<!-- Start of LiveChat (www.livechat.com) code -->
		<script>
		    window.__lc = window.__lc || {};
		    window.__lc.license = 8575381;
		    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
		</script>
		<noscript><a href="https://www.livechat.com/chat-with/8575381/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
		<!-- End of LiveChat code -->
	<?php endif; ?>
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="https://www.neaco.co.uk/wp-content/themes/neaco/main.css">
	
	<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
	
</head>

<?php
$slug = get_query_var('pagename'); 

global $wp;
$uri = trim($wp->request, '/');
$class = $uri ? 'uri-' . sanitize_title(str_replace('/', '-', $uri)) : '';


if ($slug == 'new-homepage') {
?>

<?php
}
?>

<body class="sticky-header <?php echo esc_attr($class); ?>">
	<?php if ($_SERVER['HTTP_HOST'] !== 'neaco.local:8888') : ?>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WCD9QZG');</script>
		<!-- End Google Tag Manager -->
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCD9QZG"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	<?php endif; ?>
	
	<?php if(!is_singular( 'landing-pages' )) {
		get_template_part('template-parts/global/menu-drawer');
		get_template_part('template-parts/global/header');
	} ?>