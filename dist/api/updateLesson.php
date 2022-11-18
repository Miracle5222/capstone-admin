<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);

// lesson_id: route.params.id,
// module_id: route.params.module_id,
// score: score,
// student_id: currStudent_id,
// quiz_id: quiz_id,

$lesson_id = $obj['lesson_id'];
$module_id = $obj['module_id'];
$quiz_id = $obj['quiz_id'];
$student_id = $obj['student_id'];
$score = $obj['score'];


$status = "";
$dateToday = date("h:i:s");
$selectQuestions = "select count(question_id) as length from questions_tbl where quiz_id = '$quiz_id'";
$selectQueryQuestions = $conn->query($selectQuestions);
$questionsResult = $selectQueryQuestions->fetch_assoc();

$questionLength = $questionsResult['length'];
$selectQuiz = "";
if ($score + 1 < $questionLength - 2) {
    $status = "Failed";

    $selectQuiz = "insert into result (quiz_id,student_id,score,ended_at,status) values ('$quiz_id','$student_id','$score','$dateToday','$status')";
    $insertResult = $conn->query($selectQuiz);

    if ($insertResult) {
        $Message['data'] = array("message" => "Success");
    } else {
        $Message['data'] = array("message" => "Failed");
    }
} else {
    $status = "Passed";
    $selectQuiz = "insert into result (quiz_id,student_id,score,ended_at,status) values ('$quiz_id','$student_id','$score','$dateToday','$status')";
    $insertResult = $conn->query($selectQuiz);


    if ($insertResult) {
        $sqlModuleUpdate = "update modules_tbl set status = 'done' where module_id = '$module_id'  ";

        if ($conn->query($sqlModuleUpdate) === TRUE) {
            $nextModule = $module_id + 1;

            $sqlModuleUpdateNext = "update modules_tbl set status = 'unlock' where module_id = '$nextModule'   ";
            if ($conn->query($sqlModuleUpdateNext) === TRUE) {

                // echo "Data Updated Successfully";
            } else {
                // echo "Data Update Failed";
            }
        } else {
            // echo "Data Update Failed";
        }
        $Message['data'] = array("message" => "Success");
    } else {
        $Message['data'] = array("message" => "Failed");
    }
}
// if ($quiz_Id) {


// }

$sql = "update les_tbl set status = 'done' where lessons = '$lesson_id'  ";
$result = $conn->query($sql);


if ($result) {
    $Message['data'] = array("message" => "Lesson: $lesson_id updated");

    $id = $lesson_id;
    $id += .1;

    $selectUpdate = "select * from les_tbl where lessons = '$id'";
    $selectUpdateResult = $conn->query($selectUpdate);

    if ($selectUpdateResult->num_rows > 0) {
        while ($row = $selectUpdateResult->fetch_assoc()) {
            if ($row['status'] != "done") {
                $sqls = "update les_tbl set status = 'unlock' where lessons = '$id'  ";
                $results = $conn->query($sqls);
                if ($results) {
                    $Message['data'] = array("message" => "Unlock Status");
                } else {
                    $Message['data'] = array("message" => "Unlock Status Failed");
                }
            }
        }
    }
} else {
    $Message['data'] = array("message" => "Update Failed");
}



// $sqlModule = "SELECT * FROM lesson_tbl WHERE STATUS = 'lock' AND module_id =  '$module_id'";
// $resultModule = $conn->query($sqlModule);


// if (!$resultModule->num_rows > 0) {

//     $sqlModuleUpdate = "update modules_tbl set status = 'done' where module_id = '$module_id'  ";


//     if ($conn->query($sqlModuleUpdate) === TRUE) {
//         $nextModule = $module_id + 1;

//         $sqlModuleUpdateNext = "update modules_tbl set status = 'unlock' where module_id = '$nextModule'   ";
//         if ($conn->query($sqlModuleUpdateNext) === TRUE) {

//             // echo "Data Updated Successfully";
//         } else {
//             // echo "Data Update Failed";
//         }
//     } else {
//         // echo "Data Update Failed";
//     }
// }

$conn->close();




echo json_encode($Message);
