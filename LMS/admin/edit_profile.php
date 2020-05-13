<?php
     session_start();
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"lms");
     $name = "";
     $email = "";
     $mobile = "";
	 $query = "select * from admins where email = '$_SESSION[email]'";
	 $query_run = mysqli_query($connection,$query);
	 while($row = mysqli_fetch_assoc($query_run)){
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
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
  <link rel="stylesheet" type="text/css" href="css/edit_profile.css">
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
 
                 
                <a class="nav-link text-white" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
          </div>
       </nav>
       <br>     <br>
        <!--Navigation Bar End-->
       <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4">
             <form action="update.php" method="post">
                <div class="form-group text-white">
                    <label>Name:</lebel>
                    <input type="text" class="form-control text-white" value="<?php echo $name; ?>" name="name" >
                </div>
                <div class="form-group text-white">
                    <label>E-Mail:</lebel>
                    <input type="text" class="form-control text-white" value="<?php echo $email; ?>" name="email" >
                </div>
                <div class="form-group text-white">
                    <label>Mobile:</lebel>
                    <input type="text" class="form-control text-white" value="<?php echo $mobile; ?>" name="mobile" >
                </div>
                <button type="submit" name="update" class="btn btn-outline-light">Update</button>
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