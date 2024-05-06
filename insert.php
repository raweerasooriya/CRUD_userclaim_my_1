<?php

    require 'config.php';

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $userId = $_POST["userId"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $typesClaims = $_POST["typesClaims"];

    do {
    if (empty($first_name) || empty($last_name) || empty($userId)|| empty($gender)|| empty($address)|| empty($phone_number)|| empty($email)|| empty($amount)|| empty($typesClaims)) {
        echo 'Please fill out all fields.';
        break;
    }

    $sql="INSERT INTO `claim`(`Id`, `first_name`, `last_name`, `userId`, `gender`, `address`, `phone_number`, `email`, `amount`, `typesClaims`) 
    VALUES (NULL,'$first_name','$last_name', '$userId','$gender','$address','$phone_number','$email','$amount','$typesClaims')";

    if($con->query($sql)){
        header("location: /userclaim/read.php");
    }
    else{
        echo "Error".$con->error;
        break;
    }

    $con->close();
    } while (false);

?>