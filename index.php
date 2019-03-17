<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Games Done Quick | Donation Generator</title>
	<link rel="stylesheet" href= "css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/clipboard.min.js"></script>
	<?php include 'special.php';?>
	<script type="text/javascript" src="js/script.js"></script>

  <?php include 'anylitics.php';?>

	<!--FAVICON-->
	<link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="assets/favicon/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="assets/favicon/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="assets/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
</head>
<body>
	<h1><img src="assets/img/gdq_logo.png"> Donation Generator</h1>
	<div class="container">
		<div class="donation">
			<p id="donation-text">Loading...</p>
		</div>
		<div class="buttons">
			<a id="donate" href="https://gamesdonequick.com/donate" target="_blank" rel="noopener noreferrer">Donate</a>
			<a id="copy" class="copy" data-clipboard-target="#donation-text">Copy</a>
			<a id="generate">Generate</a>
		</div>
		<div class="message"></div>

  <?php include 'ads.php';?>

  <!-- container -->
  <div class="tabs-container">
  	<ul class="tabs">
  		<li class="tab-link current" data-tab="tab-1">API</li>
  		<li class="tab-link" data-tab="tab-2">Changelog</li>
  	</ul>

  	<div id="tab-1" class="tab-content current">
      <div id="api">
        <p>The GDQ Donation Generator now has an API that you can use for Twitch, Discord and other applications.</p>
        <p>To access the API call:</p>
        <div class="code">http://taskinoz.com/gdq/api</div>
        <br>
        <p>With Nightbot, add the custom command:</p>
        <div class="code">$(urlfetch http://taskinoz.com/gdq/api/)</div>
        <br>
        <p>With Ankhbot, add the custom command:</p>
        <div class="code">$readapi(http://taskinoz.com/gdq/api/)</div>
      </div>
  	</div>
  	<div id="tab-2" class="tab-content">
      <div id="changelog"></div>
			<div class="github">
				<p>All changes can be found on GitHub</p>
				<div class="buttons">
					<a href="https://github.com/taskinoz/GDQ-Donation-Generator">Changelog</a>
				</div>
			</div>
    </div>

	</div>
</body>
</html>
