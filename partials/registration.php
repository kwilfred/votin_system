<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Registratipon Page</title>

     <!--Bootstap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST"
            enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username"
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number"
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password"
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="cpassword" placeholder="Confirm password"
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo"  required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" name="submit" class=" btn btn-dark my-4">Register</button>
                <p>Already have an account? <a href="../index.php" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>

</body>
</html>