<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "user";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if(isset($_POST['reg'])){
    $cardname = $_POST['cname'];
    $cardnum = $_POST['cnum'];
    $expirydate= $_POST['exp'];
    $sql="INSERT INTO card (cardname,cardnumber,expirydt) values ('$cardname','$cardnum','$expirydate')";
    $result=mysqli_query($conn,$sql);
    if(isset($result)){

        echo "<script> alert ('card details saved Successfully'); window.location='thanks.html'; </script> ";
      }
      else{
        echo "<script> alert ('could not save'); </script> ";
      }
    }             

?>
