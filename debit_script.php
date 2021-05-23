<?php
 require 'common.php';
$email=$_POST['email'];
$email2=$_POST['email_'];
 $Amount=$_POST['Amount'];
 $query = "SELECT * FROM details WHERE email = '$email'";
    $query_result = mysqli_query($conn, $query);
    $query2 = "SELECT * FROM details WHERE email = '$email2'";
    $query_result2 = mysqli_query($conn, $query2);

    if(mysqli_num_rows($query_result) == 0){
        echo "You don't have  account with this Email";
      
    }
      elseif(mysqli_num_rows($query_result) == 0){
        echo "They don't have account this mail. try again";
        
      }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];
        $query3="UPDATE details SET balance=balance+'$Amount' where email='$email2'";
        
        $query_result3 = mysqli_query($conn, $query3);
        $query4="UPDATE details SET balance=balance-'$Amount' where email='$email'";
        
        $query_result4 = mysqli_query($conn, $query4);
        

        // redirect to products page
        
        header("location: mainmenustyle.php");
    }

