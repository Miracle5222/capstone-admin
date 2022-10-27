<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);

$arr1 = array();
$arr2 = array();


$sql = "SELECT * FROM modules_tbl  ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $arr2["title"] = $row['title'];
        $arr2["status"] = $row["status"];
        $arr2["module_id"] = $row["module_id"];
        $arr2["programming_id"] = $row["programming_id"];

        array_push($arr1, $arr2);
    }
} else {
}

$Message = ["data" => $arr1];

echo json_encode($Message);
echo "<br>";
echo "<br>";
echo "<br>";
$_SESSION['modules'] = json_encode($Message);


$conn->close();
