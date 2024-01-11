<?php

$username = filter_input(INPUT_POST, 'username');
$password =filter_input(INPUT_POST, 'password');

if (!empty($username)) {
if (!empty($password)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "spacecoder2023";
    $dbname = ""
    

}
else{
    echo "password sgould not be empty";
    die();
}
}
else{
    echo "Username Should Not Be Empty";
    die();
}
?>