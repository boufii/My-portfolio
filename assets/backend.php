<?php 
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $db="portfolio";
    $connect = mysqli_connect($localhost, $user, $password, $db);

    if(!$connect){
        die("Could not connect" .mysqli_connect_error());
    }

    $name_php=$_POST["name"];
    $email_php=$_POST["email"];
    $subject_php=$_POST["subject"];
    $message_php=$_POST["message"];
    $sql="INSERT INTO `portfolio`(`id`, `name`, `email`, `subject`, `message`) VALUES (NULL,'$name_php','$email_php','$subject_php','$message_php')";
    mysqli_query($connect,$sql);
    echo 'success';
?>