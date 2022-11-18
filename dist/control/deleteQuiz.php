<?php include '../connections/config.php';

if (isset($_GET['quizzes_id'])) {
    $quiz_id = $_GET['quizzes_id'];



    $sql = "DELETE FROM quizzes_tbl WHERE quizzes_id ='$quiz_id'";


    if ($conn->query($sql) === TRUE) {


        header("Location: ../addQuiz.php");
    } else {

        header("Location: ../addQuiz");
    }
}
