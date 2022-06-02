<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brave</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="d-flex p-2 justify-content-center ">
                <div class="card rounded shake">
                    <button type="button" class="btn btn-primary btn-sm rounded">Change image</button><br>
                    <div class=""><img src="./assets/img/woods.jpg" alt="Avatar" width="240" height="300">
                        <!-- /// htmlspecialchars makes sure that the user input is not interpreted as HTML -->
                        <h4><?php echo htmlspecialchars($_SESSION["username"]); ?></h4> 
                        <h5>Interior Designer</h5>
                        <div class="">
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>              
                </div>
                    </div>
                        </div>
        </div>
    </div>
</body>
</html>

