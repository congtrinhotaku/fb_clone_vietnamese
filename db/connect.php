<?php
$host = "localhost";
$hoten ="root";
$matkhau = "";
$dbname="kazu_fbdata";

$conn = new mysqli( $host, $hoten, $matkhau, $dbname);

if($conn->connect_error){
    die("kết nối không thành công.". $conn->connect_error);

}
echo "kết nối thành công";

?>