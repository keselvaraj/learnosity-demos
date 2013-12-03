<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Learnosity API Demos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/vendor/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./static/vendor/reveal/reveal.css">
    <link rel="stylesheet" href="./static/vendor/codemirror/codemirror.css">
    <link rel="stylesheet" href="./static/css/main.css">
    <script src="./static/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="./static/js/main.js"></script>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M2HXW6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2HXW6');</script>
<!-- End Google Tag Manager -->

<?php
    // Show alert if not being used form localhost
    if (strpos($_SERVER['SERVER_NAME'], '.learnosity.com') === false && $_SERVER['SERVER_NAME'] !== 'localhost') {
        echo '<div class="container alert alert-warning"><p><b>Warning</b> – ' .
            'Note: Most demos will only work from <em>localhost</em>. Please ' .
            'contact support@learnosity.com to get an additional domain added.</p></div>';
    }

    include_once '../src/includes/nav.php';
?>

<div class="container">