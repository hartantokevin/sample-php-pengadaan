<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","","pengadaan");
$sqlQuery = "SELECT * FROM kontrak join paket where kontrak.no=paket.no";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>