<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/admin/img/favicon.png')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Admin
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/admin/css/now-ui-dashboard.css?v=1.5.0')?>" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url('assets/admin/demo/demo.css') ?>" rel="stylesheet" />
</head>
<body style="background-color: #F8EBE5;">
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="padding-top: 90px; margin-bottom: 20px;">

			<div class="form-body" style="border: 1px solid #ccc; box-shadow: 2px 2px 12px #8591b9; padding: 40px 40px; background-color: white;">
				<form action="" method="POST">
					<h2 style="color: #6A6977"><b>Admin Login</b></h2><br>

					<div class="form-group">
						<label for="inputAddress">Email</label>
						<input type="text" class="form-control" id="inputAddress" name="email" placeholder="Enter Email">

						<div class="form-group">
							<label for="inputAddress">Password</label>
							<input type="password" class="form-control" id="inputAddress" name="password" placeholder="Password">
						</div>

						<button type="submit" class="btn btn-primary btn btn-block" name="login" style=" margin-top: 30px;">login</button>
				</form>
			</div>

		</div>
	</div>
</div>
</body>
