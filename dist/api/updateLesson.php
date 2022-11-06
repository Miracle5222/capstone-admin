<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);


$lesson_id = $obj['lesson_id'];

$sql = "update lesson_tbl set status = 'done' where lesson_id = '$lesson_id'  ";


$result = $conn->query($sql);

if ($result) {
    $Message['data'] = array("message" => "Lesson: $lesson_id updated");
} else {
    $Message['data'] = array("message" => "Update Failed");
}



echo json_encode($Message);
