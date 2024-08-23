<?php
require("connect_db.php");
$sql = "SELECT student_code, student_name, gender FROM student";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // แสดงข้อมูลของแต่ละแถว
    while($row = mysqli_fetch_assoc($result)) {
        echo "รหัส: " . $row["student_code"]. " ชื่อ: " . $row["student_name"]. " เพศ: " . $row["gender"]. "<br>";
    }
} else {
    echo "ไม่พบข้อมูล";
}
mysqli_close($conn);
?>
