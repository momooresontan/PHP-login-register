<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
            if(isset($_POST["login"])){

            }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address: ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password: ">
            </div>
            <div class="form-btn">
                 <input type="submit" value="Login" class="btn btn-primary" name="login">
            </div>
        </form>
    </div>
</body>
</html>