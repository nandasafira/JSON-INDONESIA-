<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$ambil = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM districts WHERE regency_id='$ambil'");				
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>KECAMATAN</h2>
<?php
	while ($row = mysqli_fetch_assoc($query)) {?>
	<a href="village.php?id=<?php echo $row['id']?>"><br><?php echo json_encode($row)?></a>
	<?php 
	}
?>

</body>
</html>