



<?php

$sql1 = "SELECT count(module_id) as Total from modules_tbl";
$results = $conn->query($sql1);
$row1 = $results->fetch_assoc();

$_SESSION['TotalModules'] = $row1['Total'];


$sql4 = "SELECT count(status) as TotalLesson from lesson_tbl where status = 'done'";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();

$_SESSION['TotalLesson'] = $row4['TotalLesson'];


$sql2 = "SELECT count(student_id) as Totalstuden from student_tbl";
$result2 = $conn->query($sql2);
$row3 = $result2->fetch_assoc();

$_SESSION['Totalstuden'] = $row3['Totalstuden'];

$sql3 = "SELECT COUNT(*) as TotalLanguage FROM programming_language_tbl GROUP BY programming_id";
$result3 = $conn->query($sql3);
$row4 = $result3->fetch_assoc();

$_SESSION['TotalLanguage'] = $row4['TotalLanguage'];



$sqlz = "SELECT * from quiz_tbl";
$result = $conn->query($sqlz);

$arr1 = array();
$arr2 = array();

while ($row = $result->fetch_assoc()) {
    $arr2 = $row['quiz_id'];
    array_push($arr1, $arr2);
}
$_SESSION['quiz_id'] = $arr1;

?>