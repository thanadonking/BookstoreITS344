<?php session_start();
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
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'to our Gamestore';
								}
								$settings = array(
    'oauth_access_token' => "564727233-BIJt6XQyPU9DDzQLleCD5inf6rutvV1InX0y5CaZ",
    'oauth_access_token_secret' => "dbhs5j6ljMHG9WxNoGM9eL8uwkaeDbq5yeY0WGvrLmrlS
",
    'consumer_key' => "zV2hu07M4JhoUIiwcsCkgl44a",
    'consumer_secret' => "nEVxuyswPWnb2fC5G1upoejLPD8F0UnkwTxp4x8VPQWcqrZDwi"
	
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#books';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump(json_decode($response));
);
							?>
							</h1>
							<div class="entry">
						
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
