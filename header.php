<?php
session_start();
error_reporting("E-NOTICE");
?>
<header>
	<div class="wrapper">
		<h1 class="logo"> CARS24.COM</h1>
		<a href="#" class="hamburger"></a>
		<nav>
			<?php
			if (!$_SESSION['email'] && (!$_SESSION['pass'])) {
			?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">Rent Cars</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<a href="account.php">Client Login</a>

				<a href="login.php">manager Login</a>
			<?php
			} else {
			?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="status.php">View Status</a></li>
					<li><a href="message_manager.php">Message manager</a></li>
				</ul>
				<a href="manager/logout.php">Logout</a>
			<?php
			}
			?>
		</nav>
	</div>
</header>