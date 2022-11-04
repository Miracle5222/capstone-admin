
<?php include '../connections/config.php'; ?>



<?php


$arr1 = array();
$arr2 = array();
$sql = "SELECT * FROM sub_lesson_tbl ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $arr2["sub_lesson_id"] = $row['sub_lesson_id'];
        $arr2["video"] = $row["video"];
        $arr2["image"] = $row["image"];
        $arr2["heading"] = $row["heading"];
        $arr2["lesson_id"] = $row["lesson_id"];
        $arr2["paragraph"] = $row["paragraph"];


        array_push($arr1, $arr2);
    }
}

$Message = ["sub_lesson" => $arr1];

// echo json_encode($Message);
// echo "<br>";
// echo "<br>";
// echo "<br>";

$arr3 = array();
$arr4 = array();

$sqls = "SELECT * FROM code ";
$results = $conn->query($sqls);

if ($results->num_rows > 0) {
    while ($rows = $results->fetch_assoc()) {
        $arr4["language"] = $rows['language'];
        $arr4["textCode"] = $rows['textCode'];
        $arr4["sub_lesson_id"] = $rows["sub_lesson_id"];
        $arr4["snippets_id"] = $rows["snippets_id"];


        array_push($arr3, $arr4);
    }
}
// print_r($results);

$Message1 = ["snippets" => $arr3];
$data["data"] = [$Message, $Message1];
echo json_encode($data);
