<?php

putenv('path=C:\Program Files\Java\jdk1.8.0_202\bin');
$result = shell_exec("javac Main.java 2>&1");
if ($result == "") {
    $options = ["bypass_shell" => true];
    $proc = proc_open(
        "java Main",
        array(
            array("pipe", "r"),
            array("pipe", "w"),
            array("pipe", "w")
        ),
        $pipes,
        NULL,
        NULL,
        $options
    );
    if (is_resource($proc)) {
        fwrite($pipes[0], "Mark\n");
        fwrite($pipes[0], "32\n");
        fclose($pipes[0]);
        echo stream_get_contents($pipes[1]);
        fclose($pipes[1]);
    }
} else {
    echo $result;
}
