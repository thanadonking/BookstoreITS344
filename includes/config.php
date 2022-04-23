<?php 
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$config = array(
    'host' => $server ,
    'user' => $username ,
    'pw' => $password,
    'db' => $db 
);
//$conn = mysqli_connect($_server, $username, $password, $db);
//$conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect...");
	
?>