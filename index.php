<?php 
error_reporting(0);
	define('__APP__', TRUE);
    session_start();
	include ("dbconn.php");
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	if (!isset($menu)) { $menu = 1; }
    include_once("functions.php");
	
print '

<!DOCTYPE HTML>
<html>
	<head>
		<title>Alfej brodovi d.o.o.</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Alfej brodovi i knjige Hrvatska">
		<meta name="keywords" content="brodovi, alfej brodovi, more, rijeka, jezero, voda, knjige">
		<meta name="author" content="Ivan Birtić">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" href="style.css">
	</head>
<body>
		<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
		</header>
		<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	else if ($menu == 2) { include("news.php"); }
	else if ($menu == 3) { include("contact.php"); }
	else if ($menu == 4) { include("about-us.php"); }
	else if ($menu == 5) { include("register.php"); }
	else if ($menu == 6) { include("signin.php"); }
	else if ($menu == 7) { include("admin.php"); }
	else if ($menu == 8) { include("author.php"); }
	else if ($menu == 9) { include("price.php"); }
	//else if ($menu == 10) { include("intelx.php"); }
	print '
	</main>

    <footer>
		<p>© Ivan Birtić</p>		<p><a href="https://github.com/IvanBirtic?tab=repositories"target="_blank"><img src="img/github.png" title="Github" alt="Github" style="width:33px; margin-top:0.0px"></a></p>
	</footer>
</body>
</html>';
?>