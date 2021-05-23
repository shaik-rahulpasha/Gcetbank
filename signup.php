
<?php
	if(isset($_SESSION["id"])){
		header("location: index.php");
	}
	require "common.php";
?>
<html>
    <head>
        <link rel="stylesheet" href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content='width=device-width,intial-scale=1'>
        <style>
            .row_style{
                margin-top:120px;
                margin-left:250;
            }
        </style>
    </head>
    <body>
        <?php
			require "header.php";
		?>
        <div class='container'>
            <div class='row row_style'>
                <div class='col-xs-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h4>Registration Form</h4>
                            
                        </div>
                        <div class='panel-body'>
                            <form method="post" action="signup_script.php">
                                
                                    <div class='form-group'>
                                        
                                        <label for='name'>Full Name </label><br>
                                     <input type='text' name='name' required='true' />
                                
                                     </div>  
                        
                        <div class='form-group'>
                            <label for='email'>Email</label><br>
                                   <input type="email" name="email" required='true'/>
                        </div>
                        <div class='form-group'>
                            <label for='password'>Password</label><br>
                            <input type='password' name='password' required='true'/>
                        </div>
                        <div class='form-group'>
                            <label for='number'>Phone Number</label><br>
                            <input type='number' name='number' required='true'/>
                        </div>
                                 <div class='form-group'>
                            <label for='amount'>Deposit Amount<br>
                            <input type='number' name='balance' required='true'/>
                        </div>
                                
                        <div class='form-group'>
                            <label for='city'>City</label><br>
                            <input type='text' name='city'/>
                        </div>
                        <div class='form-group'>
                            <label for='address'>Addresss</label><br>
                            <input type='text' name='address'/>
                        </div>
                        
                                
                               
                            
                            <button class='btn btn-primary'>Signup</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

