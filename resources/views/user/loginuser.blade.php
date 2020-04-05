<!DOCTYPE html>
<html>
<head>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_template.css') }}">
<title>Login</title>
 <?php 
    if(isset($_GET['alert'])){
      if($_GET['alert']=="belum_verifikasi"){
        echo "<script>alert(\"ANDA BELUM VERIFIKASI EMAIL\")</script>";
      }else if($_GET['alert']=="belum_terdaftar"){
        echo "<script>alert(\"ANDA BELUM TERDAFTAR\")</script>";
      }
    }
   ?>
</head>
<body>
	<center>
	<h1>Local Kets Bali</h1>
	</center>
	<!-- main -->
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In User</h3>
					<div class="d-flex justify-content-end social_icon">
						<a href="https://www.facebook.com/"><span><i class="fab fa-facebook-square"></i></span></a>
						<a href="https://accounts.google.com/signin/v2/identifier?hl=id&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession"><span><i class="fab fa-google-plus-square"></i></span></a>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ url('user/login') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="email" placeholder="email" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="password" placeholder="password" required="">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="LOGIN NOW" class="btn float-right login_btn" style="font-size:12px;">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="{{ url('user/register') }}">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
			<div class="copyright">
		<p> &copy; 2020 Dirty Shop . Palugada</p>
	</div>	
	</div>
				
</body>
</html>