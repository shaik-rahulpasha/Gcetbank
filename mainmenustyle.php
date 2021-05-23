<?php
    $conn = mysqli_connect("localhost", "root", "", "bank") or die(mysqli_error($conn));
  
	
    if(!isset($_SESSION)){
        session_start();
    }
?>
<html>
    <head>
        <title>Welcome to GCET Bank</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="mainmenustyle.css">
    </head>
    <body>
        <?php
        require 'header.php';
        ?>
        <div id="banner-image">
			<div class="container">
				<div id="banner_content"></div>
			</div>
		</div>
        <div class='container'>
          <div class='row'>
              <h3>Services</h3>
              <div class='col-sm-4'>
                  
                  <div class='thumbnail'>
                      
                <a href='balance.php' class='thumbnail'><img src='https://media.gettyimages.com/photos/stressed-young-woman-checking-bills-taxes-bank-account-balance-and-picture-id1168727839?s=2048x2048' alt='pic'>
                </a><div class="caption">
                    <h4>Balance check up</h4>
                    <p>You will able check to your 24*7 any time</p>
                </div>
                  </div>
                  
              </div>
               <div class='col-sm-4'>
                   <div class='thumbnail'>
                   <a href='deposit.php'class='thumbnail' ><img src='https://tse2.mm.bing.net/th?id=OIP.WPi0Hy6tMbxcgNff2Cz5KwHaEK&pid=Api&P=0&w=294&h=167' alt='pic'>  </a>
                     <div class="caption">
                         <h4>Money Deposit</h4>
                         <p>Your safety is our priority</p>
                     </div>
                   </div>
                   
               
               </div>
               <div class='col-sm-4'>
                 <div class='thumbnail'><a href='debit.php' class='thumbnail'><img src='data:image/jpeg;base64,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' alt='pic'>  
                     </a><div class="caption">
                         <h4>
                          Transfer Money/Debit money
                         </h4>
                         <p>You can Debit/transfer money in online</P>
                     </div>
                   
               </div>
               </div>
              
                 
                   
               </div>
            <div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    </body>
    
</html>


