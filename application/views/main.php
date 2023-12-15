<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Automation System</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>">
</head>
<body>
<!-- Header start form here -->
<div class="container-fluid header">
	<div class="container">
		<div class="row head-rw">
			<div class="col-md-4 heading">
				<h2>FYP Automation System</h2>
			</div>
			<div class="col-md-8">
				<ul class="nav nav-pills nav-fill">
					<li class="nav-item list-items">
						<a class="nav-link tabs " href="<?php echo base_url('admin')?>">Admin Login</a>
					</li>
					<li class="nav-item list-items">
						<a class="nav-link tabs " href="<?php echo base_url('supervisor')?>">Supervisor Login</a>
					</li>
					<li class="nav-item list-items">
						<a class="nav-link tabs " href="<?php echo base_url('student')?>">Student Login</a>
					</li>
					<li class="nav-item list-items">
						<a class="nav-link tabs " href="<?php echo base_url('committee')?>">Committee Login</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Header end here -->
</body>
</html>
