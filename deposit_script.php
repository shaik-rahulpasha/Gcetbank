<?php
 require 'common.php';
$email=$_POST['email'];
 $Amount=$_POST['Amount'];
 $query = "SELECT * FROM details WHERE email = '$email'";
    $query_result = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "User account does not exists.";
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];
        $query2="UPDATE details SET balance=balance+'$Amount'";
        $query_result = mysqli_query($conn, $query2);
        

        // redirect to products page
        
        header("location: mainmenustyle.php");
    }









/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>