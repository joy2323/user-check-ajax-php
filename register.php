<?php
    include('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Check with Ajax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="" id="register_form">
        <h1>
            Register
        </h1>
        <div id="error_msg"></div>
        <div>
            <input type="text" name="username" placeholder="Username" id="username">
            <span></span>
        </div>
        <div>
            <input type="email" name="email" placeholder="Email" id="email">
            <span></span>
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" id="password">
        </div>
        <div>
            <button type="button" name="register" id="reg_btn"> Register </button>
        </div>
    </form>

</body>
</html>
    <!-- Scripts -->
    <script src="jquery-3.2.1.min.js"></script>
    <script src="script.js"></script>