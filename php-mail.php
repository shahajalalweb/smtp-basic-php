<?php

$to = "shahajalal.mobile@gmail.com";
$sub = "testing mail ";
$body = "this is a testing mail practice perpass";
$from = "From: shahajalalbadsha5@gmail.com";

if(mail($to, $sub, $body, $from)) {
    echo "Mail send successfully ! ";
}else {
    echo "Mail send fail ! ";
}




?>