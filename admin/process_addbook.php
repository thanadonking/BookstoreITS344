<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not update with same name";
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name'];	
			
			
				
		
			$b_nm=$_POST['name'];
			$b_subcat=$_POST['cat'];
			$b_desc=$_POST['description'];
			$b_price=$_POST['price'];
			$b_publisher="Unknown";
			$b_edition="2022";
			$b_isbn="1124469";
			$b_page="100";
			/*price*/
			/*img*/
			$b_pdf = "null";
			
		
			
			$query="insert into book(b_nm,b_subcat,b_desc,b_publisher,b_edition,b_isbn,b_page,b_price, b_img, b_pdf)
			values('$b_nm','$b_subcat','$b_desc','$b_publisher','$b_edition','$b_isbn','$b_page','$b_price','$b_img','$b_pdf')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addbook.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	