<?php
 require 'common.php';
$email=$_POST['email'];

 $Amount=$_POST['Amount'];
 $query = "SELECT * FROM details WHERE email = '$email'";
    $query_result = mysqli_query($conn, $query);
 
    if(mysqli_num_rows($query_result) == 0){
        echo "You don't have  account with this Email";
      
    }
else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];
        $query3="UPDATE details SET balance=balance-'$Amount' where email='$email'";
        
        $query_result3 = mysqli_query($conn, $query3);
        

        // redirect to products page
        
        header("location: mainmenustyle.php");
    }

