<!DOCTYPE html>
<html>
<head>
	<title>UserLogin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<style type="text/css">
	body{
		background-color: #fff7e6;
		background-image: url('assets/background.jpg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-size: h;
	}
	.box-login{
		background-color: white;
		padding: 16px;
		margin: 230px;
	}
	h3, h6{
		text-align: center;
	}
	.form-login{
		background-color: white;
		margin-top: 150px;
	}

	</style>
</head>
<body>
	<div class="col-md-4 col-md-offset-4 form-login">
		<h3>Silamut RS</h3>
		<h6>Sistem Informasi laporan Mutu RS</h6>
		<?php echo $this->session->flashdata('message'); ?>
		<form method="post" action="<?php echo base_url('users/login'); ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>		 
		 	<button type="submit" class="btn btn-default">Submit</button>
		 	<a href="<?php echo base_url(); ?>" class="btn btn-default">Back</a>
		 </form>
		 <br/>
	</div>
</body>
</html>	