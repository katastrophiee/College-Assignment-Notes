<?php
	$q = $_REQUEST["q"];
	$conn = new mysqli("localhost", "root", "", "directors_cut");
	$sql = "INSERT INTO bull (score)
	VALUES ('$q')";
	mysqli_query($conn,$sql);
?>
