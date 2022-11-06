<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);


$sql = "SELECT *  FROM lesson_tbl  ";
$result = $conn->query($sql);


$done = 0;
$unlock = 0;
$lock = 0;
$length = 0;


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $GLOBALS['length'] += 1;
        // echo $row['lesson_name'];
        if ($row['status'] == "done") {

            $GLOBALS['done'] += 1;
        }
        if ($row['status'] == "unlock") {

            $GLOBALS['unlock'] += 1;
        }
        if ($row['status'] == "lock") {

            $GLOBALS['lock'] += 1;
        }
    }
}

$send['data'] = array("length" => $length, "done" => $done, "lock" => $lock, "unlock" => $unlock);
echo json_encode($send);



$conn->close();
