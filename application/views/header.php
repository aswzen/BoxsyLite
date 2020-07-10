<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Color theme for statusbar (Android only) -->
        <meta name="theme-color" content="#2196f3">
        <title><?php echo Handler::$_CONTROLLER_NAME; ?> :: <?php echo Handler::$_SITE_NAME;?></title>
        <meta name="description" content="Boxsy">
        <meta name="author" content="Agus Sigit Wisnubroto">
        <link rel="shortcut icon" href="<?php echo STATIC_DIR; ?>favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo STATIC_DIR; ?>favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo STATIC_DIR; ?>css/framework7.bundle.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo STATIC_DIR; ?>css/framework7-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo STATIC_DIR; ?>css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" class="icons-lib" href="<?php echo STATIC_DIR; ?>css/icon.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo STATIC_DIR; ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo STATIC_DIR; ?>js/framework7.bundle.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes">
    </head>
    <body class="color-theme-deeporange">
        <!-- App root element -->
        <div id="app">
            <!-- Your main view, should have "view-main" class -->
            <div class="view view-main">
                <!-- WRAPPER -->
                <div data-name="home" class="page">
                    <!-- Top Navbar -->
                    <div class="navbar">
                        <div class="navbar-bg"></div>
                        <div class="navbar-inner">
                            <div class="left">
                                <div class="title">
                                    <div style="background: url(<?php echo STATIC_DIR; ?>images/logo.png) no-repeat;width:25px;height:25px;float:left"></div> <?php echo Handler::$_SITE_NAME;?>
                                </div>
                            </div>
                        </div>
                    </div>