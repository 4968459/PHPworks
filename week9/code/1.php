<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$username1 = $_POST['username'];
$class = $_POST['class'];
$studentID = $_POST['studentID'];

if (!$studentID or !$class or !$username1) {
  echo '请输入完整！';
  exit;
}


// 连接数据库
$conn = mysqli_connect('localhost', 'root', '12341234', 'studenttable');

// 检测连接
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// 查询数据库

$sql = "INSERT INTO `1` (`username1`, `class`, `studentID`) VALUES ('$username1', '$class', $studentID)";


// 先查询数据库是否存在
$sql2 = "select * from `1` where `username1`='$username1'";
// SELECT * FROM `1` WHERE `username1`='4968459@qq.com'

if (mysqli_num_rows(mysqli_query($conn, $sql2)) > 0) {
  echo $sql2;
  echo "<br>姓名已存在！";
  exit;
}

if (mysqli_query($conn, $sql)) {
  echo "新记录插入成功";
} else {
  echo "错误: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
