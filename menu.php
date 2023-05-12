<?php 
error_reporting(0);
	print '
	<ul>
		<li><a href="index.php?menu=1">Početna</a></li>
		<li><a href="index.php?menu=2">Novosti</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=4">O nama</a></li>
		<li><a href="index.php?menu=8">Autori JSON</a></li>
		<li><a href="index.php?menu=9">Cjenik XML</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Registriraj se</a></li>
			<li><a href="index.php?menu=6">Prijavi se</a></li>';
			
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Odjava</a></li>';
			
		}
		

		print '<li style="position: absolute;font-weight:bold; font-size:1.2em; color:white;top: 10px; right: 10px;">' . gmdate("d.m.Y H:i", time() + 7200) . '</li>
		
	</ul>';
?>