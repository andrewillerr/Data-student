<?php
require("connect_db.php");

$course_code = $_GET["course_code"];
$sql = "SELECT * FROM course WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);

echo "<center>";
echo "<h1>แก้ไขข้อมูลหลักสูตร</h1>";
echo "<form action='save_course.php' method='post'>";
echo "<table border=1 width=40%>";
echo "<input type='hidden' name='course_code_edit' value='$course_code' />";
echo "<tr><td>รหัสหลักสูตร:</td><td><input type='text' name='course_code' value='".$course["course_code"]."' /></td></tr>";
echo "<tr><td>ชื่อหลักสูตร:</td><td><input type='text' name='course_name' value='".$course["course_name"]."' /></td></tr>";
echo "<tr><td>หน่วยกิต:</td><td><input type='text' name='credit' value='".$course["credit"]."' /></td></tr>";
echo "<tr><td colspan=2><center><input type='submit' value='บันทึก' /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";

mysqli_close($conn);
?>
