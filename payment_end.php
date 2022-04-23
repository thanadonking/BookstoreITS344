<?php session_start();
require('includes/config.php');
$_SESSION['Payment'] = true;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
			<!-- end header -->
			
			<font style="font-size:30px;margin-left:260px;">Your book is ready</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="margin-left:160px;margin-right:160px;font-size:20px;">The download link has been sent to your email.
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="index.php">HOME</a></div></br>
			