<?php 

	session_start(); 
	$user_info=$_SESSION["user"];
	if ($user_info) {
		
	}
	else
	{
		echo "<script>window.location='../index/login.php'</script>";
	}


?>


<!-- Warning: session_start(): Cannot start session when headers already sent in U:\xampp\htdocs\Point-of-Sale-POS-\POS\app\includes\session.php on line 4

Notice: Undefined variable: _SESSION in U:\xampp\htdocs\Point-of-Sale-POS-\POS\app\includes\session.php on line 5 -->