<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
 <div class="row">
    <div class="col-md-4">
        <img src="../uploads/<?php echo $groups[$i]['photo']?>" class="w-50 h-50" alt="Group Image">
        </div>
            <div class="col-md-8">
                <strong class="text-dark h5">Group Name:</strong><br>
                <?php echo $groups[$si]['username']?>
                <strong class="text-dark h5">Votes:</strong><br>
                <?php echo $groups[$i]['votes']?>
    </div>
</div>
<hr>

</body>
</html>