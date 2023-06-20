<?php 
include 'init.php';
if($users->isLoggedIn()) {
	header('Location: ticket.php');
}
$errorMessage = $users->login();
include('inc/header.php');
?>

<h1   class="col-md-12 " align=" center"> WEL COME TO WEBCREINTORS HELP DESK </h1>
<!-- <title>Helpdesk System </title><br> -->
<?php include('inc/container.php');?>
<div class="container contact">	
	<div style="margin-top:150px" class="form-group">
	<!-- <h2 class="modal-title fs-5" id="exampleModalLabel">Helpdesk System</h2> -->
	</div>	
	
	<div class="col-md-6" >                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#dfe4ea;color:blue;">
				<div class="panel-title">user Login</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">

					<div style="margin-bottom: 30px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 30px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div style="margin-top:30px" class="form-group">                               
						<div class="col-sm-12 controls">
					 <input type="submit" name="login" value="Login" class="btn btn-primary">




 <a href="forgot_password.html">Forgot password?</a>


  <div class="col-md-12 " align="right">

    <a href="registration.php" class=" btn btn-primary">Register now</a>
						  
						</div>						
					</div>	
										
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>


