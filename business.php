<!DOCTYPE html>

<html>

<head>
	<title>쥬시 알바 - 업소</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		body {
			font-family: Malgun-Gothic, Sans-serif;
			margin: 0;
		}
		
		ul#menu {
			list-style-type: none;
		}
		
		ul#menu li {
			display: inline;
		}
		
		ul#menu a {
			color: black;
			text-decoration: none;
		}
		
		ul#menu a:hover {
			color: blue;
		}
		
		.box ul {
			list-style-type: none;
			margin: 0px;
			padding: 10px;
		}
		
		.selection-info {
			border: 1px dotted black;
			border-radius: 10px;
			display: inline;
		}
	</style>
	
</head>

<body>

<?php
	require_once('cmmn/output_fns.php');
	output_header();
?>

<div id="sticky-side-menu" class="container">

<?php
	output_menu();
?>

</div>

</body>

</html>