<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data =$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted<b>';
}else{
    $status='<b class="text-danger">Not Voted<b>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System -Dashboard</title>

    <!--Bootstap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Style CSS link -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary text-white">
    <div class="container my-5">
        <a href="../home"><button class="btn btn-dark text-white px-3">Back</button></a>
        <a href="logout.php"><butto class="btn btn-dark text-white px-3">Logout</butto></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!-- user groups -->
                <?php
                if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups']; 

                    for($i=0;$i<count($groups);$i++){
                        ?>
                        <html></html>
                        <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo']?>" class="w-50 h-50" alt="Group Image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group Name:</strong><br>
                        <?php echo $groups[$i]['username'];?>
                        <strong class="text-dark h5">Votes:</strong><br>
                        <?php echo $groups[$i]['votes'];?>
                    </div>
                </div>
                <form action="../actions/voting.php" method="POST">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">


                <?php
                if($_SESSION['status']==1){
                    ?><button disabled="true" class="bg-success my-3 text-white px-3">Voted</button>
                    <?php
                }else{
                    ?>
                    <button class="bg-danger my-3 text-white px-3" type="submit" name="submit">Vote</button>
                    <?php
                }
                ?>
                </form>
                <hr>
                 <?php
                 }
                }else{
                    ?>
                    <div class="container">
                        <p>No Groups to display</p>
                    </div>
                    <?php
                }
                ?>
                <!-- user groups -->
            </div>
            <div class="col-md-5">
                <!-- user profile -->
                <img src="../uploads/<?php echo $data['photo'];?>" class="w-50 h-50" alt="User Image">
                <br>
                <br>
                <strong class="text-dark h5">Name:</strong>
                <?php echo $data['username'];?><br><br>
                <strong class="text-dark h5">Mobile:</strong>
                <?php echo $data['mobile'];?><br><br>  
                <strong class="text-dark h5">Status:</strong>
                <?php echo $status;?><br><br>
            </div>
        </div>

    </div>
</body>
</html>