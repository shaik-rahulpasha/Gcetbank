<?php
 require 'common.php';
 ?>
<html>
    <head>
        <link rel="stylesheet" href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content='width=device-width,intial-scale=1'>
        <style>
            .row_style{
                margin-top:10px;
                margin-left:200px;
            }
        </style>
    </head>
    <body>
       
        <div class='container'>
            <div class='row row_style'>
                <div class='col-xs-6'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h4>Donation form</h4>
                            
                        </div>
                        <div class='panel-body'>
                            <form method='post' action='debit_script.php'>
                                <div class='form-group'>
                                    <label for='email'>Email Id</label><br>
                                    <input type='email' name='email' required="true"/>
                                </div>
                               
                                <div class='form-group'>
                                    <label for='Amount'> amount</label>
                               
                                 <br>  <input type='number' name='Amount' required="true"/>
                                </div>
                               
                            
                            <button class='btn btn-primary'>Donate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>
/* your money goes for who are facing Financial issue for Covid treatment*/