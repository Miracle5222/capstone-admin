<?php session_start(); ?>
<?php include '../connections/config.php';

// sub_lesson_id
// video_id
// image
// heading
// paragraph
// lesson_id
if (isset($_POST['choicesUpdate'])) {
    $choices_id = $_POST['choices_id'];
    $choice_description = $_POST['choice_description'];
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];

    $sql = "UPDATE choices_tbl SET choice_description ='$choice_description', answer='$answer', question_id='$question_id' WHERE choices_id=$choices_id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editChoices.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editChoices.php?id=$id#table");
    }
    $conn->close();
}

if (isset($_POST['subLesson'])) {
    $id = $_POST['sub_id'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $lesson_id = $_POST['lesson_id'];
    $video_id = $_POST['video_id'];
    $image = $_FILES['image'];

    $imagefilename = $image['name'];
    $imagefiletemp = $image['tmp_name'];
    $imageextention = explode(".", $imagefilename);
    $extentions = ['jpg', 'png', 'jpeg'];

    $imageType = end($imageextention);
    if (empty($image['name'])) {
        $upload_image = "";

        $sql = "UPDATE sub_lesson_tbl SET video='$video_id', image='$upload_image', heading ='$heading', paragraph='$paragraph', lesson_id= '$lesson_id' WHERE sub_lesson_id=$id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Data Updated Successfully";
            header("Location: ../editSub.php?id=$id#table");
        } else {
            $_SESSION['error'] = "Failed to Updated file . $conn->error";
            header("Location: ../editSub.php?id=$id#table");
        }
    }
    if (in_array($imageType, $extentions)) {
        $upload_image = './uploads/' . $imagefilename;

        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "UPDATE sub_lesson_tbl SET video='$video_id', image='$upload_image', heading ='$heading', paragraph='$paragraph', lesson_id= '$lesson_id' WHERE sub_lesson_id=$id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Data Updated Successfully";
            header("Location: ../editSub.php?id=$id#table");
        } else {
            $_SESSION['error'] = "Failed to Updated file . $conn->error";
            header("Location: ../editSub.php?id=$id#table");
        }
    }
    $conn->close();
}

if (isset($_POST['updateModule'])) {

    $id = $_POST['module_id'];
    $title = trim($_POST['title']);
    $status = $_POST['status'];
    $programming_id = $_POST['programming_id'];

    $sql = "UPDATE modules_tbl SET module_id ='$id', title='$title', status='$status', programming_id ='$programming_id' WHERE module_id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editModule.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editModule.php?id=$id#table");
    }
    $conn->close();
}

if (isset($_POST['updateStudent'])) {

    $student_id = $_POST['student_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE student_tbl SET username ='$username', email='$email', password='$password' WHERE student_id=$student_id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editStudents.php?student_id=$student_id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editStudents.php?student_id=$student_id#table");
    }
    $conn->close();
}

if (isset($_POST['updateSnippets'])) {
    $id = $_POST['snippets_id'];
    $language = $_POST['language'];
    $textCode = $_POST['textCode'];
    $sub_lesson_id = $_POST['sub_lesson_id'];


    $sql = "UPDATE code SET  sub_lesson_id = '$sub_lesson_id', language='$language', textCode ='$textCode' WHERE snippets_id='$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        echo $id;
        header("Location: ../editCode.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editCode.php?id=$id#table");
    }
    $conn->close();
}
if (isset($_POST['updateLesson'])) {

    $id = $_POST['lesson_id'];
    $lesson_name = trim($_POST['lesson_name']);
    $status = $_POST['status'];
    $module_id = $_POST['module_id'];

    $sql = "UPDATE les_tbl SET lesson_id ='$id', lesson_name='$lesson_name', status='$status', module_id ='$module_id' WHERE lesson_id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editLesson.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editLesson.php?id=$id#table");
    }
    $conn->close();
}

if (isset($_POST['quizUpdate'])) {



    $id = $_POST['quiz_id'];
    $started_at = trim($_POST['started_at']);
    $title = $_POST['title'];
    $module_id = $_POST['module_id'];

    $sql = "UPDATE quiz_tbl SET started_at='$started_at', title='$title', module_id ='$module_id' WHERE quiz_id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editQuiz.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editQuiz.php?id=$id#table");
    }
    $conn->close();
}
if (isset($_POST['questionsUpdate'])) {



    $id = $_POST['question_id'];
    $quiz_id = $_POST['quiz_id'];
    $description = trim($_POST['description']);
    $time = $_POST['time'];
    $difficulty_level = trim($_POST['difficulty_level']);
    $question_type = trim($_POST['question_type']);

    $sql = "UPDATE questions_tbl SET quiz_id='$quiz_id', description='$description', time ='$time', difficulty_level='$difficulty_level', question_type ='$question_type' WHERE question_id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Data Updated Successfully";
        header("Location: ../editQuestions.php?id=$id#table");
    } else {
        $_SESSION['error'] = "Failed to Updated file . $conn->error";
        header("Location: ../editQuestions.php?id=$id#table");
    }
    $conn->close();
}
