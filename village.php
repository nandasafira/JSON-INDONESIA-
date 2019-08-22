<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$ambil = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM villages WHERE district_id='$ambil'");		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>DESA</h2>
<?php
	while ($row = mysqli_fetch_assoc($query)) {?>
	<br><?php echo json_encode($row)?>
	<?php 
	}
?>

</body>
</html>