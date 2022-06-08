<?php

// Initialize the session
session_start();
// include("./includes/header.php");

// include config file
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include './includes/header.php';
 
//check database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=smedia", DB_USERNAME, DB_PASSWORD);
} catch (\PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// POST comment -> START____________________________________________________________________
// is 'REQUEST_METHOD' a post?
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    // insert into database
    $stmt = $pdo->prepare('INSERT INTO comments (user, comment, creation_date) VALUES(?,?, NOW())');
    $stmt->execute([$username, $comment]);
}
// POST comment -> END________________________________________________________________________
// GET comments -> START____________________________________________________________________
$stmt = $pdo->prepare('SELECT * FROM comments ORDER BY creation_date DESC');
$stmt->execute();
?>

<div class="container">
<div class="card mx-auto mt-5" style="width: 50rem;">
    <div class="card-body bg-gradient text-white">
    <h1>Feedback</h1>
    <p>Customer experience is bij ons key, laat een comment achter zodat we weten wat je van onze website vindt.</p>
    <hr>
    <div class="text-center rounded">
    <form action="feedback.php" method="post">
    <input type="text" class="input rounded" id="username-box" name="username" placeholder="Name">
    <textarea name="comment" class="input rounded mt-1 mb-1 " placeholder="comment" id="comment-box" cols="70" rows="5">
    </textarea><br>
    <input type="submit" class="button btn btn-primary" value="Submit">
    </form></div>
    <hr>
    </div>
    <div class="card mx-auto w-75 bg-white">
    <?php
    echo '<div class="card-body">';
    // fetch value from database
    while ($comment = $stmt->fetch()) {
        echo '<div class="comment">';
        $date = new DateTime($comment['creation_date']);
        // comment was created minutes ago
        $diff = $date->diff(new DateTime());

        echo '<h5 class="card-title"><strong>' . "Name: " .  $comment['user'] . '</strong></h5>';
        echo '<p class="card-text">' . 'Note:' . $comment['comment'] . '</p>';
        echo '<p class="card-text"><small class="text-muted">' . $diff->i . ' minutes ago</small></p>';
        echo '<p class="card-text">' . $date->format('d-m-Y H:i:s') . '<hr>';
        echo '</div>';
    }
?>
</div>
    </div>
</div>
    <?php include './includes/footer.php'; ?>
</html>