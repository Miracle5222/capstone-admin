
<?php include '../connections/config.php'; ?>



<?php

$questions['questions'] = array();
$choices['choices'] = array();
$question = array();
$choice = array();

$sql = "SELECT * FROM questions_tbl ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo $row['description'] . "<br>";

        $sql1 = "SELECT * FROM  choices_tbl where question_id = '$row[question_id]' ";
        $result1 = $conn->query($sql1);

        print_r($result1);
    }
}
