<?php
include("connect.php");

if(isset($_POST['submit'])){
    
    $name =$_POST['username'];
    $mobile =$_POST['mobile'];
    $pswd =$_POST['password'];
    $cpswd =$_POST['cpassword'];
    $std =$_POST['std'];
    $image =$_FILES['photo']['name'];
    $tmp_name =$_FILES['photo']['tmp_name'];
    $std = $_POST['std'];

if($pswd!=$cpswd){
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
  }
  
  else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql = "INSERT INTO userdata (username,mobile,password,photo,standard,status,votes)
    values('$name','$mobile','$pswd','$image','$std',0,0)";

    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Succesful!");
        window.location="../index.php";
        </script>';
    }else{
        die(mysqli_error($con));
    }
  }


}

?>