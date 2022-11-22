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


                                array_push($Error,  array("registered" => "Module_id added"));
                            } else {
                                // array_push($Error,  array("registered" => "Failed to add modules " . $latest['programming_id'] . "ID"));
                            }
                        }

                        $updateModule = "update modules_tbl set status = 'lock' where programming_id = '$GLOBALS[modules]' ";
                        //set new modules  status to lock
                        if ($conn->query($updateModule) === TRUE) {
                            $unlockModule = "update modules_tbl set status = 'unlock'WHERE title = 'Introduction' ";
                            //unlock module status where title = Introduction
                            if ($conn->query($unlockModule) === TRUE) {

                                $selectModules = "select * from modules_tbl where programming_id =  '$GLOBALS[modules]' group by title order by module_id";
                                $selectModulesResult = $conn->query($selectModules);
                                if ($selectModulesResult->num_rows > 0) {

                                    while ($rowModules = $selectModulesResult->fetch_assoc()) {
                                        // array_push($Error,  array("registered" => $rowModules['module_id']));

                                    }
                                }
                            }
                        }
                    }
                }


                // array_push($Error,  array("registered" => $latest['programming_id'] . " " . $GLOBALS['modules']));
                // array_push($Error,  array("registered" => $latest['programming_id'] . " " . $GLOBALS['modules']));
            }
        }
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $Message['data'] = "Something wrong with the server";
        array_push($Error,  array("error" => "something wrong with the server"));
    }
    //do your insert code here or do something (run your code)
}


echo json_encode($Error);

$conn->close();
