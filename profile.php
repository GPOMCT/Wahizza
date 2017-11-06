<?php
	include('./php/session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		
		<title>Admin Panel</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="	stylesheet" type="text/css"> 
     	<link href="./css/admin-panel.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<ul class="navbar-nav  ml-auto">
					<li class="nav-item">
						<a class="nav-link" id="logout" href="./php/logout.php">Log out</a>
					</li>
				</ul>	
			</div>
		</nav>
		<section class="profile info text-center">
			<a class="danger-text" id="welcome">Welcome : <b><i><?php echo $login_session; ?></i></b></a>
		</section>
	</body>
</html>