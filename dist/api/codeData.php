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

$sql = "SELECT  questions_tbl.`question_id`, questions_tbl.`quiz_id`,  questions_tbl.`question_type`, choices_tbl.`choice_description`FROM questions_tbl INNER JOIN choices_tbl ON choices_tbl.`question_id` = questions_tbl.`question_id` WHERE question_type = 'problem solving' AND questions_tbl.`quiz_id` = '$quiz_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arr2["question_id"] = $row['question_id'];
        $arr2["quiz_id"] = $row["quiz_id"];
        $arr2["question_type"] = $row["question_type"];
        $arr2["choice_description"] = $row["choice_description"];
        array_push($arr1, $arr2);
    }
} else {
}

$Message = ["codeResult" => $arr1];

echo  json_encode($Message);


$conn->close();
