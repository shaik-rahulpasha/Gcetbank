<?php
    $conn = mysqli_connect("sql109.epizy.com", "epiz_28687931", "fX5cj1IWaK", "epiz_28687931_bank") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>