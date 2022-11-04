
<?php include '../connections/config.php'; ?>



<?php


$arr1 = array();
$arr2 = array();
$sql = "SELECT * FROM modules_tbl ";
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

$sqls = "SELECT * FROM lesson_tbl ";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
    while ($rows = $results->fetch_assoc()) {
        $arr4["lesson_id"] = $rows['lesson_id'];
        $arr4["lesson_name"] = $rows['lesson_name'];
        $arr4["status"] = $rows["status"];
        $arr4["module_id"] = $rows["module_id"];


        array_push($arr3, $arr4);
    }
}
// print_r($results);


$Message1 = ["lesson" => $arr3];
$data["data"] = [$Message, $Message1];
echo json_encode($data);
