<?php
require("connect_db.php");

// ดึงข้อมูลหลักสูตรทั้งหมด
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);

echo "<center>";
echo "<h1>รายชื่อหลักสูตร</h1>";
echo "<table border=1 width=60%>";
echo "<tr><th>รหัสหลักสูตร</th><th>ชื่อหลักสูตร</th><th>หน่วยกิต</th><th>การดำเนินการ</th></tr>";

// แสดงข้อมูลหลักสูตรแต่ละรายการ
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["course_code"]."</td>";
    echo "<td>".$row["course_name"]."</td>";
    echo "<td>".$row["credit"]."</td>";
    echo "<td><a href='edit_course.php?course_code=".$row["course_code"]."'>แก้ไข</a></td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><a href='add_course.php'>เพิ่มหลักสูตร</a>";
echo "</center>";

mysqli_close($conn);
?>
