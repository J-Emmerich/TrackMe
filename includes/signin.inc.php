<?php

if (isset($_POST['login-submit']))
{
require_once "dbh.inc.php";

$username = $_POST['username'];
$userpwd = $_POST['userpwd'];

$query = "SELECT * FROM users WHERE username=?";
//$conn->stmt_init();
if(!$stmt=$conn->prepare($query))
{
    die("stmt failed");
}
else{
    if(!$stmt->bind_param('s', $username))
    {
        die ("bind failed");
    }else{
        $stmt->execute();
       $stmt->store_result();
        $resultcheck = $stmt->num_rows();

        if($resultcheck> 0)
        {
           $stmt->free_result();
           $stmt->execute();

           $result = $stmt->get_result(); //ok
           $row = $result->fetch_assoc(); //ok
           $pwdCheck = $row['pwd']; //ok
         if(password_verify($userpwd, $row['pwd']))
         {
             session_start();
             $_SESSION['userId'] = $row['id'];
             $_SESSION['username'] = $row['username'];
             $stmt->close();
        //      $conn->close();
             header("location: ../index.php?login=success");
             exit();
         }
          
        }else die("row error");
    }

    }

 
/*}else{
    $stmt->close();
    $conn->close();
    header("location: ../index.php?error=noUser");
    exit();
}*/



}
else{
    header("Location: ../index.php?error=403");
    exit();
}