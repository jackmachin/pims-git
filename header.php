<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="Rj4IZj1Q7axM5dPzjSzZAkux0j2egS_zBolICdhezIw" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php if(is_home()): ?>
	<title><?php bloginfo('name'); ?></title>
<?php else: ?>
	<title><?php wp_title(''); ?></title>
<?php endif; ?>

<?php if(is_home()): ?>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
<?php endif; ?>

<link rel="icon" type="image/x-icon" href="/favicon.ico" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.min.css" type="text/css" media="screen" />
<link media="screen" type="text/css" href="<?php bloginfo('template_url'); ?>/css/cookies/cookiecss.min.css" rel="stylesheet"/>

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var visited = $.cookie("pimscookie");
            if (visited == null) {
                $('.cookie_layer').show();
                $.cookie('pimscookie', 'yes', { expires: 365, path: '/' });
            }
            $.cookie('pimscookie', 'yes', { expires: 365, path: '/' });
        });
    </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.dwFadingLinks.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cyclic-fade.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>

<?php if (is_page('14')) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/tooltip.js"></script>
<?php  } ?>

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" />
<![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" />
<![endif]-->

<!-- WP generated header -->
<?php wp_head(); ?>
<!-- WP generated header -->

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<?php flush(); ?>
<!-- GA -->
<script type="text/javascript">

            var allowed = $.cookie("pimsallowed");
            if (allowed == null) {
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20034801-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
            }
<!-- END GA -->

</script>

</head>

<body>

<div id="wrapper">

	<div id="header">
		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?></span></a>
		</div><!--logo -->

		<h3 class="header-tel">01622 750 426</h3>
		<?php wp_nav_menu('leftnav'); ?>
		<p class="legal"><?php bloginfo('name'); ?> is authorised and regulated by the Financial Conduct Authority</p>

<img src="http://www.hfspfg.co.uk/wp-content/themes/hfspfg/images/fp_logo.png" alt="Financial Planners Chartered Logo">

</div><!--header-->

<div id="body">
