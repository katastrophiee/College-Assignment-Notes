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

php -S 0.0.0.0:8000 -t "H:\Occupational Specialism"

http://127.0.0.1:8000/bull.html
