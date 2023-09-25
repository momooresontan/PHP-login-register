<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="register.php" method="POST">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name: ">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address: ">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password: ">
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>