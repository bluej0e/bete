<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo csv_title(); ?></title>
    <!--meta name="description" content="<!?php echo csv_description(); ?>" /-->
    <meta name="keywords" content="<?php echo csv_tags(); ?>" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="3 days" />
    <meta name="googlebot" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <script type="text/javascript"  src="/js/moment-with-locales.min.js"></script> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
  	<link rel="icon" href="/i/favicon.ico" />
  	<link rel="stylesheet" type="text/css" href="/s2.css">
  	<link rel="stylesheet" type="text/css" href="/s2m.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
    <div id="fixed-div">
        <?php edit_post_link('<i class="fa fa-pencil-square fa-3x" aria-hidden="true"></i>'); ?>
    </div>
    <?php include('menubar.php'); ?>
