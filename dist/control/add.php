<?php session_start(); ?>
<?php include '../connections/config.php';





if (isset($_POST['addSub'])) {
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $lesson_id = $_POST['lesson_id'];
    $video_id = $_POST['video_id'];
    $image = $_FILES['image'];



    if (!empty($language) && !empty($textCode) && !empty($language)) {

        $sql = "SELECT * from sub_lesson_tbl";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            }
        } else {
            echo "0 results";
        }
    }




    $imagefilename = $image['name'];
    $imagefiletemp = $image['tmp_name'];
    $imageextention = explode(".", $imagefilename);

    $extentions = ['jpg', 'png', 'jpeg'];
    $imageType = end($imageextention);

    if (empty($image['name'])) {
        $upload_image = "";

        $sql = "insert into sub_lesson_tbl (video,image,heading,lesson_id,paragraph)values('$video_id','$upload_image','$heading','$lesson_id','$paragraph')";
        $result = $conn->query($sql);

        if ($result) {

            $_SESSION['success'] = "Data inserted Successfully";
            header("Location: ../sub-lesson.php");
        } else {

            $_SESSION['error'] = "Failed to upload file";
            header("Location: ../sub-lesson.php");
        }
    }
    if (in_array($imageType, $extentions)) {
        $upload_image = './uploads/' . $imagefilename;

        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "insert into sub_lesson_tbl (video,image,heading,lesson_id,paragraph)values('$video_id','$upload_image','$heading','$lesson_id','$paragraph')";
        $result = $conn->query($sql);

        if ($result) {

            $_SESSION['success'] = "Data inserted Successfully";
            header("Location: ../sub-lesson.php");
        } else {

            $_SESSION['error'] = "Failed to upload file";
            header("Location: ../sub-lesson.php");
        }
    }
}


if (isset($_POST['addLesson'])) {
    $lesson_id = $_POST['lesson_id'];
    $lesson_name = $_POST['lesson_name'];
    $status = $_POST['status'];
    $module_id = $_POST['module_id'];


    $sql = "insert into lesson_tbl (lesson_id,lesson_name,status,module_id)values('$lesson_id','$lesson_name','$status','$module_id')";
    $result = $conn->query($sql);

    if ($result) {

        $_SESSION['success'] = "Data inserted Successfully";
        header("Location: ../lesson.php");
    } else {

        $_SESSION['error'] = "Failed to upload file";
        header("Location: ../lesson.php");
    }
}

if (isset($_POST['addModule'])) {

    $title = $_POST['title'];
    $status = $_POST['status'];
    $language = $_POST['language'];
    $dateNow = date("Y-m-d");


    $sql = "insert into modules_tbl (status,title,programming_id,date_added)values('$status','$title','$language','$dateNow')";
    $result = $conn->query($sql);

    if ($result) {

        $_SESSION['success'] = "Data inserted Successfully";
        header("Location: ../module.php");
    } else {

        $_SESSION['error'] = "Failed to upload file";
        header("Location: ../module.php");
    }
}
if (isset($_POST['addSnippets'])) {

    $language = $_POST['language'];
    $textCode = $_POST['textCode'];
    $sub_lesson_id = $_POST['sub_lesson_id'];

    $sql = "insert into code (language,textCode,sub_lesson_id)values('$language','$textCode','$sub_lesson_id')";
    $result = $conn->query($sql);

    if ($result) {

        $_SESSION['success'] = "Data inserted Successfully";
        header("Location: ../code.php");
    } else {

        $_SESSION['error'] = "Failed to upload file";
        header("Location: ../code.php");
    }
}

if (isset($_POST['addQuiz'])) {
    $module_id = $_POST['module_id'];
    $started_at = $_POST['started_at'];
    $title = $_POST['title'];



    $sql = "insert into quiz_tbl (module_id,started_at,title)values('$module_id','$started_at','$title')";
    $result = $conn->query($sql);
    if ($result) {

        $_SESSION['success'] = "Data inserted Successfully";
        header("Location: ../quiz.php");
    } else {

        $_SESSION['error'] = "Failed to upload file";
        header("Location: ../quiz.php");
    }
}

if (isset($_POST['addQuestion'])) {
    $quiz_id = $_POST['quiz_id'];
    $description = $_POST['description'];
    $time_duration = $_POST['time_duration'];
    $difficulty_level = $_POST['difficulty_level'];
    $question_type = $_POST['question_type'];
    echo $quiz_id;
    echo $description;
    echo $time_duration;
    echo $difficulty_level;

    if (!empty($quiz_id) && !empty($description) && !empty($time_duration) && !empty($difficulty_level)) {

        $sql = "insert into questions_tbl (description,time ,quiz_id,difficulty_level,question_type)values('$description','$time_duration','$quiz_id','$difficulty_level','$question_type')";
        $result = $conn->query($sql);

        if ($result) {

            $_SESSION['success'] = "Data inserted Successfully";
            header("Location: ../quiz.php");
        } else {

            $_SESSION['error'] = "Failed to upload file";
            header("Location: ../quiz.php");
        }
    }
}

if (isset($_POST['addChoices'])) {

    $answer = $_POST['answer'];
    $choice_description = $_POST['choice_description'];
    $questions_id = $_POST['questions_id'];

    if (!empty($answer) && !empty($choice_description) && !empty($questions_id)) {

        $sql = "insert into choices_tbl (answer,choice_description,questions_id)values('$answer','$choice_description','$questions_id')";
        $result = $conn->query($sql);




        if ($result) {

            $_SESSION['success'] = "Data inserted Successfully";
            header("Location: ../quiz.php");
        } else {

            $_SESSION['error'] = "Failed to upload file";
            header("Location: ../quiz.php");
        }
    }
}
