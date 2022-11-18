<?php

$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json, true);
// $module_id = $obj['module_id'];

$code = 'public class Main { public static void main(String[] args) {

   
   System.out.println("hello");
   
    } }';

$file_handle = fopen('./Main.java', 'w');


// $clientCode = $_POST['code'];

fwrite($file_handle, $code);

// exec("javac Main.java");
shell_exec("avac Main.java");

// $code = shell_exec("java Main");
print_r(shell_exec("java Main"));

$Message["code"] = $code;


echo json_encode($Message);
fclose($file_handle);
