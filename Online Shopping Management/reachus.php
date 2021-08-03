<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "user";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if(isset($_POST['log'])){
    $cardname = $_POST['Uname'];
    $cardnum = $_POST['id'];
    $expirydate= $_POST['Message'];
    $sql="INSERT INTO contactus (name,email,message) values ('$cardname','$cardnum','$expirydate')";
    $result=mysqli_query($conn,$sql);
    if(isset($result)){

        echo "<script> alert ('Your querys have been reached sucssessfully'); window.location='thanks.html'; </script> ";
      }
      else{
        echo "<script> alert ('could not save'); </script> ";
      }
    }             

?>
