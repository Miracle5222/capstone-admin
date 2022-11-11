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
