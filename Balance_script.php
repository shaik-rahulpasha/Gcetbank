<?php
require 'common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query = "SELECT * FROM users WHERE emailid = '$email' AND password_= '$password'";
    $query_result = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "User account does not exists.";
    }else{
       $query2="SELECT balance from details WHERE email='$email'";
       $result = mysqli_query($conn, $query2);
        $bal=mysqli_fetch_array($result);
        echo $bal[0];
        
        
    }
?>