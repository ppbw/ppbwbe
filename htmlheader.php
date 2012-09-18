<!DOCTYPE html> <!-- The new doctype -->
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html>         <!--<![endif]-->
<head>

	<meta charset='utf-8'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Parti Pirate du Brabant Wallon</title>
	
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<link rel="Shortcut Icon" type="image/x-icon" href="img/favicon.ico" />
    <style type="text/css">
    @import "css/jquery.countdown.css";
    #countDown {
        max-width: 360px;
        margin-left: auto ;
        margin-right: auto ;
    }
    </style>
    
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown-fr.js"></script>
    <script type="text/javascript">
    $(function () {
        $.countdown.setDefaults({description: "avant l'abordage !"});
        var electionDay = new Date(2012,9,14);
        $('#countDown').countdown({until: electionDay});
    });
    </script>
	<!-- Internet Explorer HTML5 enabling code: -->
	
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	
	<style type="text/css">
	.clear {
	  zoom: 1;
	  display: block;
	}
	</style>
	
	<![endif]-->
	
	<?php include("php/functions.php"); ?>
	
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>								

</head>
