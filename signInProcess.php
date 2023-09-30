<?php
session_start();
require "connection.php";

$uid = $_POST["userId"];
$password = $_POST["password"];
$rememberme = $_POST["yes"];

if (empty($uid)) {
    echo ("Please enter your National Id Card Number");
} else if (empty($password)) {
    echo ("Please enter your Password");
}else {

    $rs = Database::search("SELECT * FROM `users` WHERE `uid`='" . $uid . "' 
    AND `password`='" . $password . "'");
    $n = $rs->num_rows;

    if ($n == 1){

        echo ("success");
        $d = $rs->fetch_assoc();
        $_SESSION["user"] = $d;

        if ($rememberme == "true") {
            setcookie("uid", $uid, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
        } else {
            setcookie("uid", "", -1);
            setcookie("password", "", -1);
        }
    } else {
        echo ("Invalid Id card or Password");
    }
}
