<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

$obj = json_decode($json, true);


$lesson_id = $obj['lesson_id'];
$module_id = $obj['module_id'];

$sql = "update lesson_tbl set status = 'done' where lesson_id = '$lesson_id'  ";


$result = $conn->query($sql);
