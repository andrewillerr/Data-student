<?php
require("connect_db.php");

echo "<center>";
echo "<h1>เพิ่มหลักสูตรใหม่</h1>";
echo "<form action='save_add_course.php' method='post'>";
echo "<table border=1 width=40%>";
echo "<tr><td>รหัสหลักสูตร:</td><td><input type='text' name='course_code' /></td></tr>";
echo "<tr><td>ชื่อหลักสูตร:</td><td><input type='text' name='course_name' /></td></tr>";
echo "<tr><td>หน่วยกิต:</td><td><input type='text' name='credit' /></td></tr>";
echo "<tr><td colspan=2><center><input type='submit' value='บันทึก' /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";

mysqli_close($conn);
?>
