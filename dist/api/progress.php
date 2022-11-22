<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');
$obj = json_decode($json, true);

// decoding the received JSON and store into $obj variable.

$student_id = $obj['student_id'];
// $sql = "select * from modules_tbl";






$sql = "SELECT les_tbl.`module_id`, les_tbl.`lesson_id`, les_tbl.`lessons`, les_tbl.`lesson_name`, les_tbl.`status` FROM programming_language_tbl INNER JOIN modules_tbl ON modules_tbl.programming_id = programming_language_tbl.programming_id INNER JOIN les_tbl ON les_tbl.`module_id` = modules_tbl.module_id WHERE programming_language_tbl.student_id = '$student_id'  ";
$result = $conn->query($sql);


$done = 0;
$unlock = 0;
$lock = 0;
$length = 0;


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $GLOBALS['length'] += 1;
        // echo $row['lesson_name'];
        if ($row['status'] == "done") {

            $GLOBALS['done'] += 1;
        }
        if ($row['status'] == "unlock") {

            $GLOBALS['unlock'] += 1;
        }
        if ($row['status'] == "lock") {

            $GLOBALS['lock'] += 1;
        }
    }
}

$send['data'] = array("length" => $length, "done" => $done, "lock" => $lock, "unlock" => $unlock);
echo json_encode($send);



$conn->close();
