<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet", type="text/css", href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/motions.js' ?>"></script>
</head>
<body>
	<div id="header" class="container">
		<div class="title-area">
		<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mainlogo-basic.png"></a>
		</div>
		<?php wp_nav_menu(); ?>
	</div><!-- header -->
	<div id="header-change" class="container-header-change">
		<div class="logo-area">
		<img src="<?php echo get_template_directory_uri(); ?>/img/changelogo-basic.png"></div>
	</div><!-- header change -->
<?php wp_head(); ?>
