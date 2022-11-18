if (isset($_POST['addLessons'])) {
    $student_id = $_GET['student_id'];
    $module_id = $_POST['module_id'];
    $lesson = $_POST['lesson'];
    $lesson_name = $_POST['lesson_name'];
    $status = $_POST['status'];




    $sql = "insert into les_tbl (lessons,lesson_name,status,module_id)values('$lesson','$lesson_name','$status','$module_id')";
    $result = $conn->query($sql);

    if ($result) {

        $_SESSION['success'] = "Data inserted Successfully";
        header("Location: ../addModuleAll.php?student_id=$student_id");
    } else {

        $_SESSION['error'] = "Failed to add file";
        header("Location: ../addModuleAll.php?student_id=$student_id");
    }
}
