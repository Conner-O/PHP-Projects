<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/login.signup.css">

</html>

<?php
include_once "header.php";
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdRepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>

        <!-- Reset password -->

    </form>

    <!-- password recovery form starts here -->
    <?php
    if (isset($GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdated") {
            echo '<p class="signupsuccess">Your password has been reset!</p>';
        }
    }
    ?>
    <div class="passwordReset"><a href="reset-password.php">Forgot Password?</a></div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Password doesn't match.</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up</p>";
        }
    }
    ?>

</section>




<?php
include_once "footer.php";
?>