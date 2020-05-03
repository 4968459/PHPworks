<?php


// 连接数据库
$conn = mysqli_connect('localhost', 'root', '12341234', 'user');

// 检测连接
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$res = array('error' => false);

$action = $_GET['action'];
// 查询记录
if ($action == 'select') {
  $username = $_GET['username'];
  $sql1 = "SELECT * FROM `user` WHERE username='$username'";
  $result = $conn->query($sql1);
  $users = array();
  while ($row = $result->fetch_assoc()) {
    array_push($users, $row);
  }
  // var_dump($users);
  $res['users'] = $users;
};

// 删除记录
if ($action == 'delete') {
  $id = $_GET['id'];
  $sql2 = "DELETE FROM `user` WHERE ID=$id";
  echo $sql2;
  $result = $conn->query($sql2);
  if ($result) {
    $res['delete'] = true;
  } else {
    $res['delete'] = false;
    $res['error'] = true;
    $res['$sql'] = $sql2;
  }
};
// 添加记录

if ($action == 'insert') {
  $insertUsername = $_POST['insertUsername'];
  $insertPassword = $_POST['insertPassword'];
  $sql3 = "INSERT INTO `user`(`username`, `password`) VALUES ('$insertUsername','$insertPassword')";
  $result = $conn->query($sql3);
  if ($result) {
    $res['insert'] = true;
  } else {
    $res['insert'] = false;
    $res['error'] = true;
    $res['$sql'] = $sql3;
  }
}
// 修改记录

if ($action == 'update') {
  $updateUsername = $_POST['updateUsername'];
  $updatePassword = $_POST['updatePassword'];
  $updateID = $_POST['updateID'];
  $sql4 = "UPDATE `user` SET `username`='$updateUsername',`password`='$updatePassword' WHERE `ID`=$updateID";
  $result = $conn->query($sql4);
  if ($result) {
    $res['update'] = true;
  } else {
    $res['update'] = false;
    $res['error'] = true;
    $res['$sql'] = $sql4;
  }
}

// 查询全部数据
if ($action == 'all') {
  $sql5 = "SELECT * FROM `user`";
  $result = $conn->query($sql5);

  $users = array();
  while ($row = $result->fetch_assoc()) {
    array_push($users, $row);
  }
  // var_dump($users);
  $res['users'] = $users;
}

echo json_encode($res);
mysqli_close($conn);
