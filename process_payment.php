<?php session_start();

	
		
		$i = 0;
		foreach($_SESSION['cart'] as $id=>$x)
		{	
			unset($_SESSION['cart'][$i]);
			$i++;
		}
		
	

header('Location: payment_end.php');
//nm=book name

?>

