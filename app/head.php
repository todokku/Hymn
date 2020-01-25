<?php 
	
	session_start(); 
	require_once 'globals.php';
  require_once 'main.php';
 ?>

  <title> <?php echo $APP_NAME; ?> </title>

  <meta charset='utf-8' />
  <meta name="author" content="Arukh Sediq Shkur">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $SECONDARY_COLOR; ?>">
  <meta name="msapplication-TileColor" content="<?php echo $SECONDARY_COLOR; ?>">
  <meta name="theme-color" content="<?php echo $PRIMARY_COLOR; ?>">

  <link rel="apple-touch-icon-precomposed" href="src/img/ios-desktop.png">
  <link rel="apple-touch-icon" sizes="180x180" href="src/img/ios-desktop.png">
  <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon.ico">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="<?php echo $SECONDARY_COLOR; ?>">
  
  <script src="src/js/material.min.js"></script>
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="src/js/material.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
<link rel="stylesheet" href="src/css/styles.css" />

