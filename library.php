<?php session_start();?>


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
			
			<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Library</h1>
							<div class="entry"> 
						
							<pre>Lmao this will be our library, but try to beautify the web ffs<?php
								//print_r($_SESSION) Uncomment to understand variables
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product

								</tr>
								<tr><td colspan="3"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$i = 1;
									if($_SESSION['Payment'] == true){
									if(isset($_SESSION['library']))
									{

									foreach($_SESSION['library'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> <a href="detail.php?id='.$x['id'].'&cat='.$x['nm'].'">'.$x['nm'].'

										</tr>
										';
										
										$i++;
									}
									}
									}
								
								?>
							<tr><td colspan="3"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							
							
							<Br>
								</table>						

								<br><br>
							<center>
							
							</form>
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


			