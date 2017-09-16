<!DOCTYPE html>
<html>
<head>

	<title>Warvale | Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="content/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Linking to CSS, jQuery, Bootstrap, JavaScript -->
	<link href="style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- CLIPBOARD COPYING IP -->
	<script>
	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
	}
	</script>

</head>
<body>
	<div class="main-background">
		<!-- NAVIGATION BAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobilenav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<div class="collapse navbar-collapse" id="mobilenav">
					<ul class="nav navbar-nav navbar-center">
						<li class="active"><a href="https://warvale.net"><span class="glyphicon glyphicon-flag" style="margin-right: 20px; margin-left: 50px"></span> Home</a></li>
						<li><a href="https://discord.gg/TCQbbjF"><span class="glyphicon glyphicon-globe" style="margin-right: 20px; margin-left: 50px"></span> Community</a></li>
						<li><a href="http://store.warvale.net"><span class="glyphicon glyphicon-heart" style="margin-right: 20px; margin-left: 50px"></span> Store</a></li>
						<li><a href="mailto:support@warvale.net"><span class="glyphicon glyphicon-comment" style="margin-right: 20px; margin-left: 50px"></span> Support</a></li>
					</ul>
				</div>
			</div>
		</nav>
