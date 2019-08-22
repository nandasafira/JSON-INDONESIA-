<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$query = mysqli_query($conn, 'SELECT * FROM provinces');				
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>PROVINSI DI INDONESIA</h2>
<?php
	while ($row = mysqli_fetch_assoc($query)) {?>
	<a href="city.php?id=<?php echo $row['id']?>"><br><?php echo json_encode($row)?></a>
	<?php 
	}
?>


</body>
</html>