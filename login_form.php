<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="email" required name="name" placeholder="Enter Your email">
            <input type="password" required name="password" placeholder="Enter Your Password">
            
            <input type="submit" value="login now" class="form-btn" name="submit">
            <p>don't have a account? <a href="./register_form.php">register now</a></p>
        </form>

    </div>
    <!-- JS LINK -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>