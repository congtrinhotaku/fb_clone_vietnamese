<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view facebook data</title>
</head>
<body>
    

<?php
$host = "localhost";
$hoten ="root";
$matkhau = "";
$dbname="kazu_fbdata";

// Tạo kết nối đến cơ sở dữ liệu MySQL
$conn = mysqli_connect($host, $hoten, $matkhau, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thực thi truy vấn SQL để lấy dữ liệu
$sql = "SELECT hoten, matkhau FROM tbl_user";
$result = mysqli_query($conn, $sql);

//Sử dụng PHP để hiển thị kết quả trong một bảng trên trang web:
echo "<table>";
echo "<tr><th>Tên đăng nhập</th><th>Mật khẩu</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["hoten"] . "</td><td>" . $row["matkhau"] . "</td></tr>";
}
echo "</table>";
?>
</body>
</html>