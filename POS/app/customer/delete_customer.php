<?php include"../includes/connection.php"; ?>
<?php $id=$_GET["id"];
	$stmt=$conn->prepare("DELETE FROM customer WHERE id=?");
	$stmt->bind_param("i",$id);
	if ($stmt->execute()) {
		echo "<script>window.location='index_customer.php' </script>";
	}
?>	