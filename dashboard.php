<?php

    session_start();
    if(isset($_SESSION['user_id'])){
        $name = $_SESSION['user_name'];
    }
    
    // $name = $_COOKIE['name'];
    // $user_id = $_COOKIE['user_id'];
    echo "Hello ". $name. "</br>";

    session_destroy();
?>