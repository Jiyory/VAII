<?php
	if (!IsSet($_GET["page"]))
		header("location: page/home");
	
	function loadCont() {
		if ($_GET["page"] == "home")
			include "pgs/home.php";
		else if ($_GET["page"] == "technlogy")
			include "pgs/techn.php";
		else if ($_GET["page"] == "products")
			include "pgs/prod.php";
		else if ($_GET["page"] == "galery")
			include "pgs/galr.php";
	}
?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Titul</title>
		<link rel="stylesheet" type="text/css" href="../styles/style_menu.css">
		<link rel="stylesheet" type="text/css" href="../styles/style_rot.css">
		<link rel="stylesheet" type="text/css" href="../styles/style_cont.css">
		<link rel="stylesheet" type="text/css" href="../styles/style_bottom.css">
		<link rel="shortcut icon" href="../design/logo.png">
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="../scripts/rotate.js"></script>
		<script src="../scripts/galery.js"></script>
	</head>
	<body>
		<!-- ============== MENU, LOGO, ... =============== -->
		<div class="top_bar">
			<img src="../design/logo.png" alt="LOGO SPOLOCNOSTI">
			<span>Názov firmy</span>
			<ul>
				<li><a href="home">DOMOV</a></li>
				<li>
					<a href="technlogy">TECHNOLOGIE</a>
				</li>
				<li><a href="products">PRODUKTY</a></li>
				<li><a href="galery">GALÉRIA</a></li>
				<li>
					<a href="#">PRIHLÁSENIE</a>
					<ul>
						<li><a href="#">REGISTRÁCIA</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- ============== ROTACNY PANEL =============== -->
		<div class="rot_box">
			<div class="rot_info">
				<img src="../design/rotate1.jpg" alt="rotacia 1">
				<div>
					<h1>Nadpis 1</h1>
					<div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="rot_info">
				<img src="../design/rotate2.jpg" alt="rotacia 2">
				<div>
					<h1>Nadpis 2</h1>
					<div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="rot_info">
				<img src="../design/rotate3.jpg" alt="rotacia 3">
				<div>
					<h1>Nadpis 3</h1>
					<div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="rot_info">
				<img src="../design/rotate4.jpg" alt="rotacia 4">
				<div>
					<h1>Nadpis 4</h1>
					<div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			
			<div class="rot_left" onclick="rotateLeft()">&lt;</div>
			<div class="rot_right" onclick="rotateRight()">&gt;</div>
			<div id="rot_buttons">
				<a href="#">&otimes;</a>
				<a href="#">&otimes;</a>
				<a href="#">&otimes;</a>
				<a href="#">&otimes;</a>
			</div>
		</div>
		<!-- ============== OBSAH =============== -->
		<div class="cont_panel">
			<?php loadCont() ?>
		</div>
		<!-- ============== SPODNE MENU =============== -->
		<div class="menu_bottom">
			<a href="#">DOMOV</a>
			<a href="#">TECHNOLOGIE</a>
			<a href="#">PRODUKTY</a>
			<a href="#">GALÉRIA</a>
			<a href="#">PRIHLÁSENIE</a>
		</div>
		<!-- ============== PATA STRANKY =============== -->
		<div class="bottom">
			&copy; Jozef Marek 2020
		</div>
	</body>
	<script>
		startRotate();
	</script>
</html>



























