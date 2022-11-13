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

$quiz_id = $obj['quiz_id'];
// $sql = "SELECT result.`quiz_id`, result.`student_id`, result.`score`, result.`status` FROM result INNER JOIN quiz_tbl ON quiz_tbl.`quiz_id` = result.`quiz_id` WHERE quiz_tbl.`module_id` = '$module_id'";

$sql = "select * from result where quiz_id = '$quiz_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arr2["quiz_id"] = $row['quiz_id'];
        $arr2["student_id"] = $row["student_id"];
        $arr2["score"] = $row["score"];
        $arr2["ended_at"] = $row["ended_at"];
        $arr2["status"] = $row["status"];
        array_push($arr1, $arr2);
    }
} else {
}

$Message = ["result" => $arr1];

echo  json_encode($Message);


$conn->close();
