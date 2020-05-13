<?php
     require('functions.php');
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/admin_dashboard.css">
    <title>Admin Dashboard</title>
</head> 

<body>
       <!--Navigation Bar Starts--> 
       <nav class="navbar navbar-expand-lg" style="background-color:#343A40;">
    <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="../index.php"  style="color:white"><i class="fa fa-book"></i> Library Management System</a>
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

        <li><a class="nav-link" href="../logout.php"><center><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></center></a></li> 
		</ul>
    </nav>
    <div class="overlay"></div>
           
      </div>
      </nav>
        <!--Navigation Bar End-->
       
        <!--Admin Control Pannel Navbar-->
    
  <nav class="navbar navbar-expand-sm   navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link"><i class="fas fa-chart-pie"></i> Dashboard</a>
              </li>
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Books
            </a>
            <div class="dropdown-menu sm-menu">
            <a href="add_book.php" class="dropdown-item">Add New Book</a>
            <a href="manage_book.php" class="dropdown-item">Manage Books</a>
            </div>
          </li>
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Categories
            </a>
            <div class="dropdown-menu sm-menu">
            <a href="add_cat.php" class="dropdown-item">Add New Categories</a>
                    <a href="manage_cat.php" class="dropdown-item">Manage Categories</a>
            </div>
          </li>
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Authors
            </a>
            <div class="dropdown-menu sm-menu">
            <a href="add_author.php" class="dropdown-item">Add New Author</a>
            <a href="manage_author.php" class="dropdown-item">Manage Authors</a>
            </div>
          </li>
          <li class="nav-item">
                <a href="issue_book.php" class="nav-link">Issue Book</a>
              </li>
          </ul>
          
        </div>
      </nav>
  <!----------------------------------------------------------------------------------------------------------------------------->

  <!----------------------------------------------------------------------------------------------------------------------------->
  <div class="card-group">
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title  text-center text-white">Registered Users</h5>
      <p class="card-text  text-center text-white">No. of total users: <?php echo get_signup_count(); ?><br><br><i class="fa fa-users" style="font-size:100px; color:white"></i></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><div class="text-center text-white"><a href="reguser.php" class="btn btn-outline-light" target="_blank">View</a></div></small>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title  text-center text-white">Registered Books</h5>
      <p class="card-text  text-center text-white">No. of availbale books: <?php echo get_books_count(); ?><br><br><i class="fa fa-book" style="font-size:100px; color:white"></i></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><div class="text-center text-white"><a href="regbook.php" class="btn btn-outline-light" target="_blank">View</a></div></small>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title  text-center text-white">Registered Category</h5>
      <p class="card-text  text-center text-white">No. of book's category: <?php echo get_cat_count(); ?><br><br><i class="fa fa-sitemap" style="font-size:100px; color:white"></i></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><div class="text-center text-white"><a href="regcat.php" class="btn btn-outline-light" target="_blank">View</a></div></small>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title  text-center text-white">Registered Authors</h5>
      <p class="card-text  text-center text-white">No. of availbale authors: <?php echo get_authors_count(); ?><br><br><i class="fa fa-user" style="font-size:100px; color:white"></i></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><div class="text-center text-white"><a href="regauthor.php" class="btn btn-outline-light" target="_blank">View</a></div></small>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title  text-center text-white">Issued Books</h5>
      <p class="card-text  text-center text-white">No. Issued Books: <?php echo get_issued_books_count(); ?><br><br><i class="fa fa-address-book" style="font-size:100px; color:white"></i></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><div class="text-center text-white"><a href="view_issued_books.php" class="btn btn-outline-light" target="_blank">View</a></div></small>
    </div>
  </div>
</div>
  <!----------------------------------------------------------------------------------------------------------------------------->
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
<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
 
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>

