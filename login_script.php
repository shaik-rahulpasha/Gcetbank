
<?php
    require "common.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = md5($password);

    $query = "SELECT * FROM users WHERE emailid = '$email' AND password_= '$password'";
    $query_result = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "User account does not exists.";
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];

        // redirect to products page
        
        header("location: mainmenustyle.php");
    }
?>
