<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@kenta_ojapi">
	<meta property="og:image" content= "https://kentaojapi.info/wp-content/themes/kentaojapi-info/img/mainlogo-basic.png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139644506-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-139644506-1');
	</script>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet", type="text/css", href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/motions.js' ?>"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
	<div id="header" class="container">
		<div class="title-area">
		<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo-basic.png"></a>
		</div>
		<div class="nav-toggle">
			<div>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="menu-area">
			<?php wp_nav_menu(); ?>
		</div>
	</div><!-- header -->
	<div id="header-change" class="container-header-change">
		<div class="logo-area">
		<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo-basic.png"></div></a>
	</div><!-- header change -->
<?php wp_head(); ?>
