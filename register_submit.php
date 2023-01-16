<?php

    $conn = mysqli_connect("127.0.0.1","root","","test");
    if(!$conn){
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo "Error: ".mysqli_error($conn);
        exit;
    }

    echo "Registration Sucessful";
    mysqli_close($conn);
?>