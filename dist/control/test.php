
<?php include '../connections/config.php'; ?>

<?php

$arr1 = array();
$arr2 = array();
$choices1 = array();
$choices2 = array();



$sql = "SELECT quiz_tbl.`quiz_id`,  questions_tbl.`question_id`, quiz_tbl.`module_id`, questions_tbl.`time`, questions_tbl.`difficulty_level` ,questions_tbl.question_type, questions_tbl.`description` FROM quiz_tbl INNER JOIN questions_tbl ON questions_tbl.`quiz_id` = quiz_tbl.`quiz_id` ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $arr2["quiz_id"] = $row['quiz_id'];
        $arr2["module_id"] = $row["module_id"];
        $arr2["question_id"] = $row["question_id"];
        $arr2["time"] = $row["time"];
        $arr2["difficulty_level"] = $row["difficulty_level"];
        $arr2["question_type"] = $row["question_type"];
        $arr2["description"] = $row["description"];

        array_push($arr1, $arr2);

        $sqls = "SELECT * FROM choices_tbl where question_id = '$row[question_id]'";
        $results = $conn->query($sqls);
        while ($rows = $results->fetch_assoc()) {
            // echo $rows['question_id'];
            $choices2['choices_id'] = $rows['choices_id'];
            $choices2['answer'] = $rows['answer'];
            $choices2['choice_description'] = $rows['choice_description'];
            $choices2['question_id'] = $rows['question_id'];
            array_push($choices1, $choices2);
        }
    }
}


$data['data'] = ["questions" => $arr1, "choices" => $choices1];
echo json_encode($data);
