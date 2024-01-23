<?php
session_start();
include "db_conn.php";

if(isset($_POST['create'])){
    
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username=validate($_POST['usrnm']);
    $email=validate($_POST['email']);
    $password=validate($_POST['psw']);
    $dob=validate($_POST['dob']);
    $phoneno=validate($_POST['phoneno']);

    $sql="INSERT INTO users (username, email, password, dob, phoneno) VALUES('$username', '$email', '$password', '$dob', '$phoneno')";
    
    
    if ($conn->query($sql) === TRUE) {
      
        $last_id = $conn->insert_id;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $last_id;
        header("Location: dhashbord.php");

        // echo "New record created successfully. Last inserted ID is: " . $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    }