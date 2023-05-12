<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<h1>Admin panel</h1>
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=7&amp;action=1">Korisnici</a></li>
				<li><a href="index.php?menu=7&amp;action=2">Novosti</a></li>
				<li><a href="index.php?menu=7&amp;action=3">Intel X</a></li>
			</ul>';
			
			if ($action == 1) { include("admin/users.php"); }
			else if ($action == 2) { include("admin/news.php"); }
			else if ($action == 3) { include("admin/intelx.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Potrebna prijava u sustav!</p>';
		header("Location: index.php?menu=6");
	}
?>