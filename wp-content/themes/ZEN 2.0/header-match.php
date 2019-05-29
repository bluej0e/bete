<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$zdate = explode(" ", get_post_custom_values('time')[0]);
	$fk = explode(":", $zdate[1]);
	$fg = explode("/",$zdate[0]);
	$fecha_actual = mktime(0, 0, 0);
	$diferencia = 260000;
	$game_date = mktime($fk[0], $fk[1], $fk[2], $fg[1], $fg[2], $fg[0]);
	$robocop = ($fecha_actual - $diferencia) > $game_date ? 'noindex,follow' : 'index,follow'; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo get_post_custom_values('seo_title')[0]; ?></title>
	<meta name="description" content="<?php echo get_post_custom_values('seo_description')[0]; ?>" />
	<meta name="keywords" content="<?php echo get_post_custom_values('seo_keywords')[0]; ?>" />
	<meta name="robots" content="<?php echo $robocop; ?>" />
	<meta name="googlebot" content="<?php echo $robocop; ?>" />
	<meta name="revisit-after" content="2 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="/js/jquery.simple.timer.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
	<link rel="icon" href="/i/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/s2.css">
	<link rel="stylesheet" type="text/css" href="/s2m.css">
</head>

<body>
	<div id="fixed-div">
		<?php edit_post_link('<i class="fa fa-pencil-square fa-3x" aria-hidden="true"></i>
		'); ?>
	</div>
	<?php include('menubar.php'); ?>
