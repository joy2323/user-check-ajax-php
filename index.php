<?php
$db = mysqli_connect('localhost', 'root', '', 'taken');
if (isset($_POST['username_check'])) {
    $username = $_POST['username'];
    $sql = "SELECt * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo "taken";
    } else {
        echo 'not taken';
    }
    exit();
}
if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo "taken";
    } else {
        echo 'Not Taken';
    }
    exit();
}

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
    } else {
        $query = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '".md5($password)."')";
        $results = mysqli_query($db, $query);
        echo 'Saved!';
        exit();
        
    }
}










?>