

<?php
    require "common.php";
    // get details
    require 'header.php';
    

    $email =$_POST['email'];
    

$name = $_POST['name'];
$number = $_POST['number'];
$city=$_POST['city'];
$address=$_POST['address'];
$password=$_POST['password'];
$deposit=$_POST['balance'];
$query3="INSERT into details(balance,email) VALUE ('$deposit','$email')";
$result1 = mysqli_query($conn, $query3);
    
   $query1 = "SELECT id FROM users WHERE emailid = '$email' ";
   $query2 = "INSERT into users(emailid, Fullname, password_, phone, city, address) VALUES('$email', '$name','$password','$number','$city','$address')";
   // $query3="INSERT into details(balance) VALUES('$deposit')";
    
    
  $result = mysqli_query($conn, $query1);
  
   if(mysqli_num_rows($result) > 0){
        // email already exists
       echo "Email id already exists. Try another";
    }else{
        // perform query operation
       $result = mysqli_query($conn, $query2);
        $_SESSION["email_id"] = $email;
       $_SESSION["id"] = mysqli_insert_id($conn);
        
    require 'mainmenustyle.php';
    
        // redirect to products page
    }
?>