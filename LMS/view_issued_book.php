<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$query = "select book_name,book_author,book_no from issued_books where student_id = $_SESSION[id] and status = 1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/11a408d726.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/view_issued_book.css">
    <title>User Dashboard</title>
</head>

<body>
      <!--Navigation Bar Starts-->
      <nav class="navbar navbar-expand-lg" style="background-color:#211316;">
          <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"  style="color:white"><i class="fa fa-book"></i> Library Management System</a>
              </div>

              <!--User info PHP Script-->
                <span class="username text-white"><b>Username : <?php echo $_SESSION['name'];?></b></span>
 
                 
                <a class="nav-link text-white" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
          </div>
       </nav>
       <br>
        <!--Navigation Bar End-->
<!------------------------------------------------------------------------------------------------------------------->
                                <!----------View Issued Books----------->
<!------------------------------------------------------------------------------------------------------------------->
<div class="table-responsive">

<!--Table-->
<table class="table"  style="text-align:center">

  <!--Table head-->
  <thead>
    <tr>
      
      <th class="th-lg">Book Name</th>
      <th class="th-lg">Book Author</th>
      <th class="th-lg"> Book Number</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
     <!----------- Table Values ------->
     <?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$author = $row['book_author'];
						$book_no = $row['book_no'];
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $book_no;?></td>
						</tr>
						<?php
					}
				?>
  </tbody>
  <!--Table body-->

</table>
<!--Table-->

</div>
<!-------------------------------------------------------------------------------------------------------------------------------->


         
       
       <!--Script LINKS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>


</html>