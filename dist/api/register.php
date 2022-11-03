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


$sql = "select * from student_tbl ";

$result = $conn->query($sql);

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
        // echo "New record created successfully";
        $Message['data'] = "New record created successfully";
        array_push($Error,  array("registered" => "New record created successfully"));
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $Message['data'] = "Something wrong with the server";
        array_push($Error,  array("error" => "omething wrong with the server"));
    }
    //do your insert code here or do something (run your code)
}

echo json_encode($Error);

$conn->close();
