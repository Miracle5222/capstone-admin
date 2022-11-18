<?php include '../connections/config.php';

if (isset($_GET['lessons_id'])) {
    $student_id = $_GET['student_id'];



    $sql = "DELETE FROM les_tbl WHERE lesson_id ='$_GET[lessons_id]'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../addModuleAll.php?student_id=$student_id");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../addModuleAll.php?student_id=$student_id");
    }
}
