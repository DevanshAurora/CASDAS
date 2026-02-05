<?php
$data = file_get_contents("php://input");

if ($data == "402") {
    header("HTTP/1.1 402 Payment Required");
    echo "402";
} elseif ($data == "420") {
    header("HTTP/1.1 420 Enhance Your Calm");
    echo "420";
} elseif ($data == "509") {
    header("HTTP/1.1 509 Bandwidth Limit Exceeded");
    echo "509";
} else {
    http_response_code(400);
    echo "Invalid Request";
}
?>