<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);
$arr1 = array();
$arr2 = array();


$email = $obj['email'];
$password = $obj['password'];
$newPassword = $obj['newpassword'];

$sql = "SELECT * FROM student_tbl where password = '$password' and email ='$email ' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $update = "update student_tbl set password = '$newPassword' where email = '$email' and password =  '$password'";
    if ($conn->query($update) === TRUE) {
        $arr2["success"] = "Password updated Successfully";

        array_push($arr1, $arr2);
    }
} else {
    $arr2["email"] = "false";
    $arr2["password"] = "false";
    array_push($arr1, $arr2);
}

echo json_encode($arr1);
$conn->close();
