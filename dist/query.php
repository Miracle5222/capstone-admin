



<?php

$sql1 = "SELECT count(module_id) as Total from modules_tbl";
$results = $conn->query($sql1);
$row1 = $results->fetch_assoc();

$_SESSION['TotalModules'] = $row1['Total'];


$sql1 = "SELECT count(status) as TotalLesson from lesson_tbl where status = 'done'";
$result1 = $conn->query($sql1);
$row2 = $result1->fetch_assoc();

$_SESSION['TotalLesson'] = $row2['TotalLesson'];


$sql2 = "SELECT count(student_id) as Totalstuden from student_tbl";
$result2 = $conn->query($sql2);
$row3 = $result2->fetch_assoc();

$_SESSION['Totalstuden'] = $row3['Totalstuden'];




?>