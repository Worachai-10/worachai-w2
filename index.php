<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worachai-610-12</title>
</head>
<body>
   <?php echo "<h1>PHP & MariaDB</h1>"; ?>
   <?php echo "<h1 style='color:blue;'>สิ่งที่ต้องติดตั้ง:</h1>"; ?>
   <?php
      echo "<ul>";
      echo "<li>Apache</li>";
      echo "<li>PHP</li>";
      echo "<li>MariaDB</li>";
      echo "</ul>";
   ?>
   <?php
      echo "<b>ให้นักเรียนค้นหาผลลัพธ์ของตัวแปร:</b>";
      echo "</br>";
      echo "ค้นหา: (ชื่อตัวแปร:\$p) ผลลัพธ์ล่าดับที่ (ชื่อตัวแปร:\$b) - (ชื่อตัวแปร:\$n) จากทั้งหมด (ชื่อตัวแปร:\$t)";
      echo "</br>"."</br>";
      echo "***ชื่อตัวแปรนักเรียนสามารถตั้งเป็นอย่างอื่นได้โดยไม่ผิดหลักค่าสงวนการตั้งค่าตัวแปร***";
      echo "</br>"."</br>"."</br>"."</br>";
      $one = "1";
      $name = "php marinadb";
      $last = "1000";
      $two = "10";
      echo "<b>ผลลัพธ์ที่ได้:</b>"."</br>";
      echo "ค้นหา: ".$name." ผลลัพธ์ลำดับที่ ".$one." - ".$two." จากทั้งหมด ".$last;
  ?>
</body>
</html>
