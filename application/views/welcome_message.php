<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<div id="container">
	 <form method="post" action="<?php echo site_url('welcome/post');?>">
	  <div class="form-group">
		<label for="email">Host</label>
		<input type="text" name="host" class="form-control" id="email">
	  </div>
	  <div class="form-group">
		<label for="pwd">Username:</label>
		<input type="text" name="username" class="form-control" id="pwd">
	  </div>
	  <div class="form-group">
		<label for="pwd">Password:</label>
		<input type="text" name="pass" class="form-control" id="pwd" value="">
	  </div>
	  <div class="form-group">
		<label for="pwd">DB:</label>
		<input type="text" name="db" class="form-control" id="pwd">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
</form> 

</body>
</html>