<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="register.php" method="POST">
            <?php
                if(isset($_POST["submit"])){
                    $fullname = $_POST["fullname"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $passwordConfirm = $_POST["confirm_password"];
                    $errors = array();
                    if(empty($fullname) OR empty($email) OR empty($password) OR empty($passwordConfirm)){
                        array_push($errors, "All field are required!");
                    }
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        array_push($errors, "Invalid email address!");
                    }
                    if(strlen($password) < 8){
                        array_push($errors, "Password must be at least 8 characters long!");
                    }
                    if($password !== $passwordConfirm){
                        array_push($errors, "Password does not match!");
                    }
                    if(count($errors) > 0 ){
                        foreach($errors as $error){
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else{
                        //we will insert data into db
                    }
                }
            ?>

            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name: ">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address: ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password: ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password: ">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>