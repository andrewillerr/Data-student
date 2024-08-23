<?php
require("connect_db.php");

$course_code = $_POST["course_code"];
$course_name = $_POST["course_name"];
$credit = $_POST["credit"];

// เพิ่มข้อมูลหลักสูตรใหม่ในฐานข้อมูล
$sql = "INSERT INTO course (course_code, course_name, credit) VALUES ('$course_code', '$course_name', $credit)";
mysqli_query($conn, $sql);

// เปลี่ยนเส้นทางไปยังรายการหลักสูตร
header("Location: course_list.php");
exit();
?>
