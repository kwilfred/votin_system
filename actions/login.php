<?php
session_start();
include('connect.php');

if (isset($_POST['submit'])){

   $name=$_POST['username'];
   $mobile=$_POST['mobile'];
   $pswd=$_POST['password'];
   $std=$_POST['std'];

   $sql = "SELECT *FROM userdata WHERE username='$name' and
    mobile='$mobile' and password='$pswd' and standard='$std'";

    $result=mysqli_query($con,$sql); 
    if(mysqli_num_rows($result)>0){
      $sql ="SELECT username,photo,votes,id FROM userdata WHERE 
      standard='group'";
      $resultgroup=mysqli_query($con,$sql);

      if(mysqli_num_rows($resultgroup)>0){
         $groups=mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
         $_SESSION['groups']=$groups;
      }
      $data =mysqli_fetch_array($result);
      $_SESSION['id']=$data['id'];
      $_SESSION['status']=$data['status'];
      $_SESSION['data']=$data;
      
      echo '<script>
      window.location="../partials/dashboard.php";
      </script>';

    }else{
      echo '<script>
      alert("Invalid Credentials!");
      window.location="../";
      </script>';
    }


}

?>