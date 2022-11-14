<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);
// $module_id = $obj['module_id'];

$code = $obj['code'];

$file_handle = fopen('./Main.java', 'w');


// $clientCode = $_POST['code'];

fwrite($file_handle, $code);

exec("javac Main.java");

$code = exec("java Main");

$Message["code"] = $code;

fclose($file_handle);


echo json_encode($Message);
