<?php

function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "message" =>$message,
        "line"    =>$line,
        "file"    =>$file,
        "code"    =>$code
    ));
}

set_error_handler("error_handler");

echo 100 / 0;

?>