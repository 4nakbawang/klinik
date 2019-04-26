<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		.login{
			margin-top: 200px;
			margin-left: 450px;
			margin-right: 450px;
			background-color: white;
			padding: 25px;
		}
		body{
			background-color: #8a8a5c;
			background-image: <?php base_url(); ?>;
		}
		h3{
			text-align: center;
		}
		.tagline{
			text-align: center;
		}
	</style>
</head>
<body>
	
	<div class="login">
		<?php echo $this->session->flashdata('message'); ?>
		<h3>Login Aplikasi Morfin Mart</h3>
		<div class="tagline">
			<span>Ini adalah aplikasi untuk menghitung pendapatan toko</span>
		</div>
		<br/>
		<form method="POST" action="<?php echo base_url('learn/cek'); ?>">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="password" placeholder="Password">
		  </div>	  
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="master/user">Registrasi</a>
		</form>
		<a href="<?php echo base_url('master/user'); ?>">User</a>
	</div>


</body>
</html>