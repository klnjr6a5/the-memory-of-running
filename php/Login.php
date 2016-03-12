<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class="navbar" id='cssmenu'>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OnlineAuction </a>
		<ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Products</a></li>
      </div>
        
        <div>
           <ul class="nav navbar-nav pull-right">
		<li class="nav-item active">
		<li><a class="nav-link" href='Register.php'>Register</a></li>
		</li>
	    </ul>
	</div>
</nav>

<div class="container">
<h2>Please Login</h2>
<form class="form-inline" method='post' action='../includes/login.php' >
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="text" name="email" id='user_email' class="form-control" placeholder='Email'>
       <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" name="password" id="user_password"class="form-control" placeholder='Password'>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
   <button type="submit" name="login" class="btn btn-default">Sign in</button>
</form>
</div>



</body>
</html>