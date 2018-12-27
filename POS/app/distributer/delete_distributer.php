<?php include"../includes/connection.php"; ?>
<?php $id=$_GET["id"];
	$stmt=$conn->prepare("DELETE FROM distributors WHERE id=?");
	$stmt->bind_param("i",$id);
	if ($stmt->execute()) {
		echo "<script>window.location='index_distributer.php' </script>";
	}
?>	