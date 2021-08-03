<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "user";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if(isset($_POST['login'])){
    $emailid = $_POST['Uname'];
    $password = $_POST['Pass'];
    $repassword= $_POST['RePass'];
    if($password==$repassword){
      $sql="INSERT INTO userdt (Username,password) values ('$emailid','$password')";
      $result=mysqli_query($conn,$sql);
      if(isset($result)){

        echo "<script> alert ('Account ccreated Successfully'); window.location='loginpagee.html'; </script> ";
      }
      else{
        echo "<script> alert ('Not created contact admin'); </script> ";
      }
    }
    else {
      echo " <script> alert ('Re-password is wrong');window.location='loginpagee.html'; </script> </script>";
    }

  }
      
  

?>
