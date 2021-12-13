<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cars24.com</title>


	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	<section class="">
		<?php
		include 'header.php';
		?>

		<section class="caption">
			<h2 class="caption" style="text-align: center">Find Cars For Hire</h2>
			<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
		</section>
	</section><!--  end hero section  -->



	<section class="search">
		<div class="wrapper">
			<div id="fom">
				<form method="post">
					<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">manager Login Area</h3>
					<table height="100" align="center">
						<tr>
							<td>Email Address:</td>
							<td><input type="text" name="uname" placeholder="Enter Username" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="pass" placeholder="Enter Password" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login Here"></td>
						</tr>
					</table>
				</form>
				<?php
				if (isset($_POST['login'])) {
					include 'includes/config.php';

					$uname = $_POST['uname'];
					$pass = $_POST['pass'];

					$query = "SELECT * FROM manager WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if ($num > 0) {
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"manager/index.php\")
									</script>";
					} else {
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					}
				}
				?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php" ?>