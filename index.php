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
	<h1>
		<svg class="Header_eventLogo_3MRIe" viewBox="0 0 160 59">
			<path d="M89.8222 19.5957H76.6051C74.1336 19.5957 71.6622 20.3412 69.728 21.7257L62.2061 27.1571L68.331 34.7184H81.8705C83.9121 34.7184 85.7389 33.4405 86.2762 31.63L89.8222 19.5957Z"></path><path d="M49.9561 19.5957H35.557C33.5154 19.5957 31.6886 20.8736 31.1513 22.6841L27.6053 34.7184H35.4496C44.261 34.7184 48.7741 30.352 48.7741 30.352C42.1118 42.1733 30.6141 42.1733 29.9693 42.1733C20.6207 42.1733 14.9255 36.4224 15.7852 29.1805C15.7852 29.1805 15.1404 13.5253 34.1601 11.1823C34.1601 11.1823 32.9781 12.6733 32.5483 15.0162H44.6908C46.9473 15.0162 48.8815 13.6318 49.4188 11.7148L52.9649 0H36.954C19.4387 0 6.00669 8.30686 1.3861 25.3466C-2.80468 40.3628 9.33782 54.3141 23.6294 54.3141C29.647 54.3141 36.6316 54.5271 44.046 49.2022L42.7566 54.3141H55.0065C59.842 54.3141 59.7346 51.4386 60.3793 49.5217L64.1403 36.7419L49.9561 19.5957ZM139.467 34.3989C139.467 34.3989 139.252 34.6119 138.929 35.0379C133.234 26.3051 131.085 18.9567 131.085 18.9567C125.39 22.6841 122.059 27.157 120.34 30.0325C119.158 31.9495 119.05 34.2924 120.017 36.3159C128.829 54.8466 151.179 59 151.179 59L159.454 55.4856C154.511 52.3971 150.427 48.8827 146.989 45.1552C147.204 44.9422 147.418 44.8357 147.633 44.6227C152.684 39.9368 156.122 33.8664 158.164 27.157C162.57 12.1408 152.791 0 136.351 0C124.208 0 117.223 3.72744 110.024 9.69134C109.809 9.79783 107.123 12.1408 107.015 12.2473C103.577 5.32491 96.1621 0 78.7543 0H62.0986C60.0569 0 58.3377 1.27798 57.8004 3.19495L53.8245 16.7202L59.5197 23.6426L70.2653 16.0812L71.4473 12.0343H80.3661C88.1029 12.0343 96.5919 14.5903 94.2279 27.4765C92.831 35.0379 86.3836 42.2798 77.6797 42.2798H67.9012L65.5372 50.6931C65.5372 50.6931 65.1074 53.1426 63.4955 54.3141H74.0262C86.3836 54.3141 93.1533 51.3321 99.8156 44.1968C103.469 50.3736 110.669 54.3141 120.017 54.3141C123.671 54.3141 128.184 53.6751 131.515 53.0361C117.976 48.8827 114.107 38.8718 113.248 35.9964C112.388 33.5469 112.388 30.4585 113.355 27.157C115.826 18.8502 123.348 12.0343 132.482 12.0343C141.616 12.0343 145.592 18.7437 143.12 27.157C142.476 29.8195 141.186 32.269 139.467 34.3989Z">
			</path>
		</svg> Donation Generator</h1>
	<div class="container">
		<div class="donation">
			<p id="donation-text">Loading...</p>
		</div>
		<div class="buttons">
			<button id="donate" href="https://gamesdonequick.com/donate" target="_blank" rel="noopener noreferrer">Donate</button>
			<button id="copy" class="copy" data-clipboard-target="#donation-text">Copy</button>
			<button id="generate">Generate</button>
		</div>
		<div class="message"></div>

  <?php /*include 'ads.php; */ ?> 

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
        <div class="code">https://taskinoz.com/gdq/api</div>
        <br>
        <p>With Nightbot, add the custom command:</p>
        <div class="code">$(urlfetch https://taskinoz.com/gdq/api/)</div>
        <br>
        <p>With Ankhbot, add the custom command:</p>
        <div class="code">$readapi(https://taskinoz.com/gdq/api/)</div>
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
