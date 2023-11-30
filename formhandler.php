<?php

if ($_SERVER ["REQUEST_METHOD"]== "POST"){

    $firstname = htmlspecialchars($_POST[firstname]);
    $lastname = htmlspecialchars($_POST[lastname]);
    $email = htmlspecialchars($_POST[email]);
    $telephone = htmlspecialchars($_POST[telephone]);
    $message = htmlspecialchars($_POST[message]);

    if (empty($firstname)) {
        exit();
        header ("Location: ..page-19.php");
    }
   
    echo "These are the date, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $telephone;
    echo "<br>";
    echo $message;
    echo "<br>";

    header ("Location: ..page-21.php");
} else {
    header ("Location: ..page-19.php");
}