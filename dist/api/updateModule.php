<?php
// Start the session
session_start();
?>
<?php include "../connections/config.php" ?>
<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);



// $module_id = $obj['module_id'];
$module_id = 58;
// $sqlModuleUpdate = "update module_tbl set status = 'done' where module_id = '$module_id'  ";
//     $conn->query($sqlModuleUpdate);
//     if ($resultModuleUpdate) {
//         echo "Updated Successfully";
//     } else {
//         echo "Update Failed";
//     }

$sqlModule = "SELECT * FROM lesson_tbl WHERE STATUS = 'lock' AND module_id =  58";
$resultModule = $conn->query($sqlModule);

print_r($resultModule);

if (!$resultModule->num_rows > 0) {

    echo "hello";
    $sqlModuleUpdate = "update modules_tbl set status = 'done' where module_id = '$module_id'  ";


    if ($conn->query($sqlModuleUpdate) === TRUE) {

        echo "Data Updated Successfully";
    } else {
        echo "Data Update Failed";
    }
}

$conn->close();
