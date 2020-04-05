<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin_template.css') }}">
		<!--Bootsrap 4 CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   		<!--Fontawesome CDN-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<title>Register</title>
</head>
<body>
	<h1>Register Admin</h1>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In Admin</h3>
				</div>
				<div class="card-body">
					<form action="{{ url('admin/register') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="name" placeholder="Name" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>
							<input type="number" class="form-control" name="phone" placeholder="Phone Number" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="username" placeholder="Username" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="password" placeholder="Password" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-image"></i></span>
							  </div>
							  <div class="custom-file">
								<input type="file" class="custom-file-input" name="file" id="inputGroupFile01"
								  aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							  </div>
						</div>
						<div class="form-group">
							<input type="submit" value="Sign Up" class="btn float-right login_btn" style="font-size:12px;">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>		
	{{-- <div class="main">
		<div class="agile">
			<div class="signin-form profile">
				<div class="login-form">
					<form action="{{ url('admin/register') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="text" name="name" placeholder="name" required="">
						<input type="text" name="phone" placeholder="phone" required="">
						<input type="text" name="username" placeholder="username" required="">
						<input type="password" name="password" placeholder="password" required="">
						<input type="file" name="file" placeholder="photo" required="" style="color: white">
						<input type="submit" value="SIGN UP">
					</form>
				</div>
			</div>
		</div>	
	</div>				 --}}
</body>
</html>