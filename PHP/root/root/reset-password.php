<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/login.signup.css">

</html>

<?php
include_once "header.php";
?>

<main>
    <div class='section-default'>
        <section class="section-default">
            <h1>Reset your password</h1>
            <p>An e-mail will be sent to you with instructions on how ot reset your password.</p>
            <form action="includes/reset-requests.inc.php" method="post">
                <input type="text" name="email" placeholder="Enter your email address...">
                <button type="submit" name="reset-request-submit">Receive new password by e-mail...</button>
            </form>
            <?php
                if (isset($_GET["reset"])){
                    if ($_GET["reset"] == "success"){
                        echo '<p class"signupsuccess">Check your e-mail!</p>';
                    }
                }
            ?>
        </section>
    </div>
</main>


<?php
include_once "footer.php";
?>