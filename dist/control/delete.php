<?php session_start(); ?>
<?php include '../connections/config.php';


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM sub_lesson_tbl WHERE sub_lesson_id='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../editSub.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../editSub.php");
    }
}


if (isset($_GET['snippets_id'])) {

    $id = $_GET['snippets_id'];
    $sql = "DELETE FROM code WHERE snippets_id='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../editSub.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../editSub.php");
    }
}
if (isset($_GET['quiz_id'])) {

    $id = $_GET['quiz_id'];
    $sql = "DELETE FROM quiz_tbl WHERE quiz_id='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../quiz.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../quiz.php");
    }
}

if (isset($_GET['question_id'])) {

    $id = $_GET['question_id'];
    $sql = "DELETE FROM questions_tbl WHERE question_id='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../quiz.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../quiz.php");
    }
}

if (isset($_GET['choices_id'])) {

    $id = $_GET['choices_id'];
    $sql = "DELETE FROM choices_tbl WHERE choices_id='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../quiz.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../quiz.php");
    }
}

if (isset($_GET['module_id'])) {

    $id = $_GET['module_id'];
    $sql = "DELETE FROM modules_tbl WHERE module_id ='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../module.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../module.php");
    }
}
if (isset($_GET['lesson_id'])) {

    $id = $_GET['lesson_id'];
    $sql = "DELETE FROM lesson_tbl WHERE lesson_id ='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../lesson.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../lesson.php");
    }
}

if (isset($_GET['student_id'])) {

    $id = $_GET['student_id'];
    $sql = "DELETE FROM student_tbl WHERE student_id ='$id'";


    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully";

        header("Location: ../index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../index.php");
    }
}
