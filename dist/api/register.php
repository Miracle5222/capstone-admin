<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);

$Error = array();
$Errors = array();
$Message = array();



$name = $obj['name'];
$email = $obj['email'];
$password = $obj['password'];

$GLOBALS['modules'] = "";
$array1 = array();
$array2 = array();


$sql = "select * from student_tbl where username = '$name' and email = '$email'";

$result = $conn->query($sql);
$studentId = $result->fetch_assoc();

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    if ($email == isset($row['email'])) {
        // echo "email already exists";
        // $Error['error'] = "email already exists";
        array_push($Error, array("email" => "email already exists"));
    }
    if ($username == isset($row['username'])) {
        // echo "username  already exists";
        // $Error['error'] = "username  already exists";

        array_push($Error,  array("username" => "username  already exists"));
    }
} else {


    $sql = "INSERT INTO student_tbl (username, email, password)VALUES ('$name',  '$email', '$password')";


    if ($conn->query($sql) === TRUE) {
        $sqls = "select * from student_tbl where username = '$name' and email = '$email'";

        $result1 = $conn->query($sqls);
        $studentId = $result1->fetch_assoc();


        if ($result1->num_rows > 0) {
            $insertLanguage = "insert into programming_language_tbl(name,student_id,course_code)values('Java','$studentId[student_id]','java101')";
            $results = $conn->query($insertLanguage);


            if ($results) {
                $languages = "SELECT * FROM programming_language_tbl ORDER BY programming_id DESC LIMIT 1";
                $languagesResult = $conn->query($languages);
                $latest = $languagesResult->fetch_assoc();
                $GLOBALS['modules'] = $latest['programming_id'];

                if ($languagesResult->num_rows > 0) {
                    $allModules = "SELECT * FROM modules_tbl GROUP BY title ORDER BY module_id";
                    $resultallModules = $conn->query($allModules);

                    if ($resultallModules->num_rows > 0) {

                        while ($rowModules = $resultallModules->fetch_assoc()) {
                            $insertStudentModules = "insert into modules_tbl(status,title,programming_id,date_added)values('$rowModules[status]','$rowModules[title]','$latest[programming_id]','$rowModules[date_added]')";
                            $modulesResult = $conn->query($insertStudentModules);
                            if ($modulesResult) {

                                array_push($Error,  array("registered" => "Added modules to " . $latest['programming_id'] . "ID : Module_id" . $rowModules['module_id']));
                            } else {
                                array_push($Error,  array("registered" => "Failed to add modules " . $latest['programming_id'] . "ID"));
                            }
                        }
                    }


                    // // $lessons = "SELECT * FROM les_tbl GROUP BY lessons ORDER BY lessons";
                    // // $lessonData = $conn->query($lessons);
                    // $sqlModule = "select * from modules_tbl where programming_id =  '$GLOBALS[modules]'";
                    // $moduleData = $conn->query($sqlModule);
                    // if ($moduleData->num_rows > 0) {
                    //     while ($moduleRows = $moduleData->fetch_assoc()) {
                    //         $array2['module_id'] = $moduleRows['module_id'];
                    //         array_push($array1, $array2);
                    //         // array_push($Error,  array("registered" => $moduleRows['programming_id'] . "programmingID === new moduleID " . $moduleRows['module_id']));
                    //         // while ($lessonRow = $lessonData->fetch_assoc()) {
                    //         //     $insertLesson = "insert into les_tbl (lesson_name,status,module_id,lessons)values('$lessonRow[lesson_name]','$status[status]','$moduleRows[module_id]','$lessonRow[lessons]')";
                    //         //     if ($conn->query($insertLanguage) === TRUE) {
                    //         //         array_push($Error,  array("registered" => "lesson added"));
                    //         //     }
                    //         // }
                    //     }
                    // }
                    // foreach ($array1 as $module) :
                    //     $lessons = "SELECT * FROM les_tbl where module_id = $module[module_id]";
                    //     $lessonData = $conn->query($lessons);
                    //     if ($lessonData->num_rows > 0) {
                    //         while ($lessonRow = $lessonData->fetch_assoc()) {
                    //             // $insertLesson = "insert into les_tbl (lesson_name,status,module_id,lessons)values('$lessonRow[lesson_name]','$status[status]','$moduleRows[module_id]','$lessonRow[lessons]')";
                    //             // if ($conn->query($insertLanguage) === TRUE) {

                    //             array_push($Error,  array("registered" =>  "new moduleID " . $module['module_id'] . "lessons=> " . $lessonRow['lessons']));
                    //             // }
                    //         }
                    //     }

                    // endforeach;

                    // if ($moduleData->num_rows > 0) {
                    //     while ($moduleRows = $moduleData->fetch_assoc()) {
                    //         $array2['module_id'] = $moduleRows['module_id'];
                    //         // array_push($array1, $array2);
                    //         array_push($Error,  array("registered" => $moduleRows['programming_id'] . "programmingID === new moduleID " . $moduleRows['module_id']));
                    //         // while ($lessonRow = $lessonData->fetch_assoc()) {
                    //         //     $insertLesson = "insert into les_tbl (lesson_name,status,module_id,lessons)values('$lessonRow[lesson_name]','$status[status]','$moduleRows[module_id]','$lessonRow[lessons]')";
                    //         //     if ($conn->query($insertLanguage) === TRUE) {
                    //         //         array_push($Error,  array("registered" => "lesson added"));
                    //         //     }
                    //         // }
                    //     }
                    // }



                    // if ($lessonData->num_rows > 0) {
                    //     while ($lessonRow = $lessonData->fetch_assoc()) {
                    //         // $insertLesson = "insert into les_tbl (lesson_name,status,module_id,lessons)values('$lessonRow[lesson_name]','$status[status]','$moduleRows[module_id]','$lessonRow[lessons]')";
                    //         // if ($conn->query($insertLanguage) === TRUE) {

                    //         array_push($Error,  array("registered" =>  "new moduleID " . $GLOBALS['modules'] . "lessons=> " . $lessonRow['lessons']));
                    //         // }
                    //     }
                    // }
                }

                // array_push($Error,  array("registered" => $latest['programming_id'] . " " . $GLOBALS['modules']));
                // array_push($Error,  array("registered" => $latest['programming_id'] . " " . $GLOBALS['modules']));
            }
        }
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $Message['data'] = "Something wrong with the server";
        array_push($Error,  array("error" => "omething wrong with the server"));
    }
    //do your insert code here or do something (run your code)
}


echo json_encode($Error);

$conn->close();
