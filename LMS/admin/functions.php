<?php 
   function get_signup_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $signup_count = "";
    $query = "select count(*) as signup_count from signup";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $signup_count = $row['signup_count'];

    }
      return($signup_count);
   }

   function get_books_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $books_count = "";
    $query = "select count(*) as books_count from books";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $books_count = $row['books_count'];

    }
      return($books_count);
   }

   function get_cat_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $cat_count = "";
    $query = "select count(*) as cat_count from category";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $cat_count = $row['cat_count'];

    }
      return($cat_count);
   }

   function get_authors_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $authors_count = "";
    $query = "select count(*) as authors_count from authors";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $authors_count = $row['authors_count'];

    }
      return($authors_count);
   }

   function get_issued_books_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $issued_books_count = "";
    $query = "select count(*) as issued_books_count from issued_books";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $issued_books_count = $row['issued_books_count'];

    }
      return($issued_books_count);
   }
?>