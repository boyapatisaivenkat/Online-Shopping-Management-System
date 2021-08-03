<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "user";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  if (isset($_POST['log']))
  {
    $emailid = $_POST['Uname'];
      $password = $_POST['Pass'];

      $sql = "SELECT * FROM userdt WHERE Username = '$emailid' AND password = '$password' ";
      $result = mysqli_query($conn,$sql);
      if(isset($result)){
            echo "working";
          if(mysqli_num_rows($result)>0){
               $row = mysqli_fetch_array($result);
           
          }
          else{
               echo "not working";
          }
      }
      else{
           echo "not working";
      }

      if($row['Username'] == $emailid && $row['password'] == $password){
           echo "<script>window.location='home.html'</script>";
      }
      else{
           echo "<script>alert('Check your credentials')</script>";
           echo "<script>window.location='loginpagee.html'</script>";
      }
      
  }

?>
