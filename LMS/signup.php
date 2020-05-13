<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Register</title>
</head>

<body>
       <!--Navigation Bar Starts-->
       <nav class="navbar navbar-expand-lg" style="background-color:#211316;">
    <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php"  style="color:white"><i class="fa fa-book"></i> Library Management System</a>
          </div>
          <div class="menu"> <span></span> </div>
    <nav id="nav">
		<ul class="main">
				<li><a class="nav-link" href="admin/index.php"><i class='fas fa-user-edit'></i> Admin Login</a></li>
				<li> <a class="nav-link" href="index.php"><i class='fas fa-users'></i> Users Login</a></li>
				<li><a class="nav-link" href="signup.php"><i class='fas fa-user-check'></i> User Register</a></li>
		</ul>
    </nav>
    <div class="overlay"></div>
           
      </div>
      </nav>

       <br>
       <!--Navigation Bar End-->
       <!--User Register-->
       <div class="login-box">
          <h1 class="font-weight-bold text-white">User Registration</h1>

         <form action="register.php" method="post">
         <div class="form-group mb-1">
                <label for="id" class="text-white">ID</label>
                <input type="text" name="id" class="form-control text-white " required>
         </div>
         <div class="form-group mb-1">
                <label for="name" class="text-white">Full Name</label>
                <input type="text" name="name" class="form-control text-white" required>
         </div>
          <div class="form-group mb-1">
                <label for="email" class="text-white">E-Mail</label>
                <input type="text" name="email" class="form-control text-white" required>
          </div>
          <div class="form-group mb-1">
                <label for="password" class="text-white">Password</label>
                <input type="password" name="password" class="form-control text-white" required>
          </div>
          <div class="form-group mb-1">
                <label for="mobile" class="text-white">Mobile</label>
                <input type="text" name="mobile" class="form-control text-white" required>
          </div>
          <div class="form-group mb-1">
                <label for="address" class="text-white">Address</label>
                <input type="text" name="address" class="form-control text-white" required>
          </div>
          <button class="btn mt-2" type="submit">Register</button>
          </form>
       </div>
 
       
       <!--Script LINKS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>


</html>

<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
</script>