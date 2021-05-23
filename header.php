<nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Welcome</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavBar">
			<?php
				if(isset($_SESSION["email_id"])){ 
			?>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
                         
                             
			<?php
                                }else{
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
				</ul>
			<?php
				}
			?>
		</div>
	</div>
</nav>	