<?php

if (isset($_POST['signup-submit'])) {

    //set variables
    require "dbh.inc.php";
    $username = $_POST['username'];
    $userEmail = $_POST['useremail'];
    $userPwd = $_POST['userpwd'];
    $userPwdRepeat = $_POST['userpwd-repeat'];


    //error handlers - empty fields, email and password!=passwordrepeat

    if (empty($username) || empty($userEmail) || empty($userPwd) || empty($userPwdRepeat)) {
        header("location ../index.php?error=emptyfields");
        exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location ../index.php?error=invalidemail");
        exit();
    } elseif ($userPwd !== $userPwdRepeat) {
        header("location: ../index.php?error=pwdnotmatch");
        exit();
    } else { //check if username exists in database
        $query = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->store_result();
        $resultcheck = $stmt->num_rows();
        if ($resultcheck > 0) {
            header("location: ../index.php?error=usernametaken");
        } else {

         
            $hashedPassword = password_hash($userPwd, PASSWORD_DEFAULT);

            
            $stmt = $conn->prepare('INSERT INTO users(username, useremail, pwd) VALUES (?,?,?)');
            $stmt->bind_param('sss', $username, $userEmail, $hashedPassword);
            $stmt->execute();
            $result = $stmt->store_result();
            if (!$result) {
               header("Location: ../index.php?error=unabletosignup");
              exit();
            } else {
                header("location: ../index.php?signup=success");                
            }
        }
    }
    $stmt->close();
    $conn->close();
    exit(); 
} else {
    header("location: ../index.php?error=unknownacces");
    exit();
}
