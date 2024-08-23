<?php
require("connect_db.php");
$course_code = $_GET["course_code"];
$sql = "SELECT * FROM course WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);
$sql = "SELECT E.*, S.student_name";
$sql .= " FROM exam_result AS E";
$sql .= " INNER JOIN student AS S ON E.student_code=S.student_code";
$sql .= " WHERE E.course_code='$course_code'";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<h1>ผลการสอบ " . $course["course_name"] . "</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>รหัสนักเรียน</th><th>ชื่อนักเรียน</th><th>คะแนน</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["student_code"] . "</td><td>" . $row["student_name"]
    . "</td><td>" . $row["point"] . "</td></tr>";
}
echo "</table>";
echo "</center>";
?>
