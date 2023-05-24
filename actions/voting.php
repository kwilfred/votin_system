<?php

session_start();
include('connect.php');

if (isset($_POST['submit'])){
    $votes = $_POST['groupvotes'];
    $totalvotes = $votes+1;

    $gid = $_POST['groupid'];
    $uid =$_SESSION['id'];

    $updatevotes= mysqli_query($con,"UPDATE userdata SET 
    votes ='$totalvotes' WHERE id='$gid'" );

    $updatestatus = mysqli_query($con, "UPDATE userdata SET
     status=1 WHERE id='$uid'");

     if ($updatevotes and $updatestatus){
        $getgroups = mysqli_query($con, "SELECT username, photo,
        votes, id FROM userdata WHERE standard='group'");
        $groups =mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
        $_SESSION['status']=1;
        echo '<script>
        alert("Voting Succesfull");
        window.location="../partials/dashboard.php";
        </script>';

     }else{
        echo '<script>
        alert("Technical Error!! Please vote after some time");
        window.location="../partials/dashboard.php";
        </script>';
     }
} 

?>