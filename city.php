<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$ambil = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM regencies WHERE province_id='$ambil'");				
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>KABUPATEN/KOTA</h2>
<?php
	while ($row = mysqli_fetch_assoc($query)) {?>
	<a href="distric.php?id=<?php echo $row['id']?>"><br><?php echo json_encode($row)?></a>
	<?php 
	}
?>

</body>
</html>