<?php include"../includes/connection.php"; ?>
<?php $id=$_GET["id"];
	$stmt=$conn->prepare("DELETE FROM users WHERE user_id=?");
	$stmt->bind_param("i",$id);
	if ($stmt->execute()) {
		echo "<script>window.location='index_admin.php' </script>";
	}
?>	