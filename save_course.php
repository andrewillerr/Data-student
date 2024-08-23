<?php
require("connect_db.php");

$course_code_edit = $_POST["course_code_edit"];
$course_code = $_POST["course_code"];
$course_name = $_POST["course_name"];
$credit = $_POST["credit"];

// แก้ไขข้อมูลหลักสูตรในฐานข้อมูล
$sql = "UPDATE course SET course_code='$course_code', course_name='$course_name', credit=$credit WHERE course_code='$course_code_edit'";
mysqli_query($conn, $sql);

// เปลี่ยนเส้นทางไปยังรายการหลักสูตร
header("Location: course_list.php");
exit();
?>
