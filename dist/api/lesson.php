<?php
// Start the session

?>
<?php


include "../connections/config.php" ?>

<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);
// $module_id = $obj['module_id'];


$arr1 = array();
$arr2 = array();

// $id = $obj['module_id'];

$sql = "SELECT lesson_tbl.`lesson_id`,lesson_tbl.`lesson_name`,lesson_tbl.`status` FROM lesson_tbl INNER JOIN modules_tbl ON modules_tbl.`module_id` = lesson_tbl.`module_id`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arr2["lesson_id"] = $row['lesson_id'];
        $arr2["lesson_name"] = $row["lesson_name"];
        $arr2["status"] = $row["status"];


        array_push($arr1, $arr2);
    }
} else {
}


$Message = ["data" => $arr1];
echo json_encode($Message);




$conn->close();
