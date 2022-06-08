<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include("./includes/header.php");
?>
    <div class="card mx-auto mt-5" style="width: 50rem;">
  <img class="card-img-top" id="upload-img" src="./assets/img/woods.jpg" alt="Card image cap" width="40" height="400">
  <div class="card-body  bg-gradient text-white">
<label class="btn btn-primary btn-sm rounded mb-2"><i class="fa fa-image">Change profile picture</i>
  <input type="file" onchange="loadFile(event)" style="display: none;"  name="image"/>
</label>

<script>
    // upload image and display
var loadFile = function (event) {
  var image = document.getElementById("upload-img");
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

  <h5 class="card-title">Account name:  <?php echo htmlspecialchars($_SESSION["username"]); ?></h5>
    <p class="card-text">Aliquip ullamco consectetur aliquip elit irure.</p>
    <p class="card-text">
        Incididunt cillum exercitation velit dolore nulla et aute nostrud irure officia laboris non. Nulla in adipisicing duis elit aute. Deserunt ipsum et tempor nisi ad quis ex excepteur. Veniam mollit sit quis exercitation. 
        Qui proident reprehenderit elit ullamco occaecat ipsum cupidatat eu tempor nisi.
        Laboris sit ullamco nisi voluptate in non ipsum. 
    <p class="card-text">
        Quis nisi culpa deserunt do exercitation laboris sunt. Ea tempor nostrud sint eu amet culpa ad Lorem laborum ut proident ex laboris ad. 
        Quis nostrud labore non dolore nisi non. Dolor fugiat officia labore sint esse tempor excepteur et tempor adipisicing duis aliqua. 
    </p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a> 
  </div>
</div>

<?php include("./includes/footer.php"); ?>
