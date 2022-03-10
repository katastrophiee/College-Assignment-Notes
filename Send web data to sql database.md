code to run php:
(above score)

```
var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "db.php?q=" + Score, true); (file name of php to run)
    xmlhttp.send("http");
```

php:

```
<?php
	$q = $_REQUEST["q"];
	$conn = new mysqli("localhost", "root", "", "directors_cut");
	$sql = "INSERT INTO bull (score)
	VALUES ('$q')";
	mysqli_query($conn,$sql);
?>
```
