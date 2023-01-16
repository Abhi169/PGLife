<?php

    session_start();

    $conn = mysqli_connect("127.0.0.1","root","","test");
    if(!$conn){
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " .mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>";

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        
        // setcookie("name",$row['name'],time()+3600);
        // setcookie("user_id",$row['id'],time()+3600);

        ?>
        <a href="dashboard.php">Click Here</a>
    <?php
    }
    else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>