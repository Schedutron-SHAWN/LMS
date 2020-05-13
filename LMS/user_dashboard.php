<?php
      session_start();
      function get_user_issue_book_count(){
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"lms");
      $user_issue_book_count = 0;
      $query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
      $user_issue_book_count = $row['user_issue_book_count'];

    }
      return($user_issue_book_count);
   }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/user_dashboard.css">
    <title>User Dashboard</title>
</head>

<body>
       <!--Navigation Bar Starts--> 
       <nav class="navbar navbar-expand-lg" style="background-color:#343A40;">
    <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php"  style="color:white"><i class="fa fa-book"></i> Library Management System</a>
          </div>
                <div class="menu"> <span></span> </div>
    <nav id="nav">
    
		<ul class="main">
        <li><a><span><center><b style="font-size:12px">Welcome: <?php echo $_SESSION['name'];?></b></center></span></a></li>
        <li><a><span><center style="color:white">My Profile</center></span></a></li>
        <li><a><center><i class="far fa-id-card"  style="font-size:54px;color:white"></i></center></a></li>

        <li><a><center><i class="fas fa-user-tie"></center></i></a></li>
				<li><a class="nav-link" href="view_profile.php"><center> View Profile </center></a></li>

        <li><a><center><i class="fas fa-user-edit"></center></i></a></li>
				<li> <a class="nav-link" href="edit_profile.php"><center> Edit Profile</center></a></li>

        <li><a><center><i class="fas fa-user-lock"></center></i></a></li>
				<li><a class="nav-link" href="change_password.php"><center> Change Password</center></a></li>

        <li><a class="nav-link" href="logout.php"><center><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></center></a></li> 
		</ul>
    </nav>
    <div class="overlay"></div>
           
      </div>
      </nav>
      <br>
        <!--Navigation Bar End-->
        <!------------------------------------------------------------------------------------------------------------------------------>
          
        <!------------------------------------------------------------------------------------------------------------------------------>
        <div class="container">
  <div class="card-group vgr-cards">
    <div class="card w-50 bg-dark"  >
      <div class="card-body">
        <h4 class="card-title text-center text-white">Issued Books</h4>
        <p class="card-text text-center text-white">No. of total Issued Books : <?php echo get_user_issue_book_count(); ?><br><br><i class="fa fa-book" style="font-size:100px; color:white"></i></p>
        <div class="text-center text-white"><a href="view_issued_book.php" class="btn btn-outline-light" target="_blank">View Issued Books</a></div>
      </div>
    </div>
  </div>
</div>
        <!------------------------------------------------------------------------------------------------------------------------------>
                                    <!-------------------Footer---------------------->
        <!------------------------------------------------------------------------------------------------------------------------------>
                                        
        <footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> Get In Touch</span> 
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 COPYRIGHT :
    <a class="copyright" href="">Schedutron-SHAWN</a>
  </div>
  <!-- Copyright -->
</footer>              
        <!------------------------------------------------------------------------------------------------------------------------------>
       
       <!--Script LINKS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------>
<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
</script>