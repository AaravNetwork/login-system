<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <input type="text" required name="name" placeholder="Enter Your Name">
            <input type="email" required name="name" placeholder="Enter Your email">
            <input type="password" required name="password" placeholder="Enter Your Password">
            <input type="password" required name="cpassword" placeholder="Check Your Password">
            <select name="" id="">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            <input type="submit" value="register now" class="form-btn" name="submit">
            <p>already have a account? <a href="./login_form.php">login now</a></p>
        </form>

    </div>
    <!-- JS LINK -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>