<!DOCTYPE HTML>
<html>
<head>
	<title>Phrimps Admin Panel</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link rel="icon" type="image/png" href="../images/fcx-small.png"> 
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<br><br>
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					
				</div>
				<form action="applogin.php" method="post">
					<p class="legend">Admin Login<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<br>
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<!--<div class="copyright">
			<h2>&copy; 2019 Program-x. All rights reserved | Design by
				<a href="https://program-x.org" target="_blank">Program-x</a>
			</h2>
		</div>-->
		<!-- //copyright -->
	</div>
</body>

</html>