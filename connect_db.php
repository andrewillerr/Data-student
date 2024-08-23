<?php
$servername = "localhost";
$username = "Aun";
$password = "1212312121";
$db = "aun";
// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password, $db);
// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
}
echo "เชื่อมต่อสำเร็จ";
?>
