<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$cat_name = "";
	$cat_id = "";
	$query = "select * from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$cat_name = $row['cat_name'];
		$cat_id = $row['cat_id'];
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
  <link rel="stylesheet" type="text/css" href="css/edit_cat.css">
    <title>Admin Dashboard</title>
</head>

<body>
      <!--Navigation Bar Starts-->
      <nav class="navbar navbar-expand-lg" style="background-color:#211316;">
          <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand" href="../index.php"  style="color:white"><i class="fa fa-book"></i> Library Management System</a>
              </div>

              <!--User info PHP Script-->
                <span class="username text-white"><b>Admin Name : <?php echo $_SESSION['name'];?></b></span>
 
                 
                <a class="nav-link text-white" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
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
          <div class="social-part">
          <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f"></i></button>
          <button type="button" class="btn btn-tw"><i class="fab fa-twitter"></i></button>
          <button type="button" class="btn btn-ins"><i class="fab fa-instagram"></i></button>
          <button type="button" class="btn btn-yt"><i class="fab fa-youtube"></i></button>
          <button type="button" class="btn btn-li"><i class="fab fa-linkedin-in"></i></button>
          </div>
        </div>
      </nav>
       <br>
<!----------------------------------------------------------------------------------->
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group text-white">
					<label>Category Name:</label>
					<input type="text" name="cat_name" value="<?php echo $cat_name;?>" class="form-control text-white" required="">
				</div>
				<button class="btn btn-outline-light" name="update">Update Category</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
       
       <!--Script LINKS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>


</html>

<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update category set cat_name = '$_POST[cat_name]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
	}
?>

<!---------Dropdown----------->
<script>
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>
