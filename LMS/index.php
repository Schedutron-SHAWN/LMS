<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>LMS</title>
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
       
       <!--User Login-->
       <div class="login-box">
          <h1 class="font-weight-bold text-white">User Login</h1>
          <form action="" method="post">
              <div class="form-group">
                <label for="email" class="text-white">E-Mail</label>
                <input type="text" name="email" class="form-control text-white" required>
              </div>
              <div class="form-group">
                <label for="password" class="text-white">Password</label>
                <input type="password" name="password" class="form-control text-white" required>
              </div>
              <button class="btn" type="submit" name="login">Login</button>
          </form>
       </div>
       
       <!--PHP QUERY FOR LOGIN -->

       <?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from signup where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
       
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