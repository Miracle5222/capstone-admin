
<?php include '../connections/config.php'; ?>



<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);
$arr1 = array();
$arr2 = array();

$student_id = $obj['student_id'];
// $sql = "select * from modules_tbl";
$sql = "SELECT modules_tbl.`module_id`, modules_tbl.`title`, modules_tbl.`status`, modules_tbl.`programming_id`, modules_tbl.`date_added` FROM modules_tbl INNER JOIN programming_language_tbl ON programming_language_tbl.`programming_id` = modules_tbl.`programming_id` WHERE programming_language_tbl.`student_id` = '$student_id'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $arr2["title"] = $row['title'];
        $arr2["status"] = $row["status"];
        $arr2["module_id"] = $row["module_id"];
        $arr2["programming_id"] = $row["programming_id"];



        array_push($arr1, $arr2);
    }
}

$Message = ["module" => $arr1];

// echo json_encode($Message);
// echo "<br>";
// echo "<br>";
// echo "<br>";

$arr3 = array();
$arr4 = array();
$sqls = "SELECT  les_tbl.`lesson_id`,les_tbl.`lesson_name`, les_tbl.`status`, modules_tbl.`module_id`,  les_tbl.`lessons` FROM modules_tbl INNER JOIN programming_language_tbl ON programming_language_tbl.`programming_id` = modules_tbl.`programming_id` INNER JOIN les_tbl ON les_tbl.`module_id` = modules_tbl.`module_id` WHERE programming_language_tbl.`student_id`  = '$student_id ' ";
// $sqls = "SELECT * FROM les_tbl ";
$results = $conn->query($sqls);
$length = $results->num_rows;





// print_r($results);
if ($results->num_rows > 0) {
    while ($rows = $results->fetch_assoc()) {
        $arr4["lesson_id"] = $rows['lesson_id'];
        $arr4["lesson_name"] = $rows['lesson_name'];
        $arr4["status"] = $rows["status"];
        $arr4["module_id"] = $rows["module_id"];
        $arr4["lessons"] = $rows["lessons"];


        array_push($arr3, $arr4);
    }
}
// print_r($results);


$Message1 = ["lesson" => $arr3];
$data["data"] = [$Message, $Message1];
echo json_encode($data);
