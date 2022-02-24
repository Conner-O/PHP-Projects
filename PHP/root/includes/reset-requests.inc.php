
<?php
# Create table in phpmyadmin

#CREATE TABLE pwdReset(
#	pwdResetId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
#   pwdResetEmail TEXT NOT NULL,
#   pwdResetSelector TEXT NOT NULL,
#   pwdResetToken LONGTEXT NOT NULL,
#    pwdResetExpires TEXT NOT NULL
#);

if (isset($_POST["reset-request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    #Change to iastate url pre-upload "www.apps.centralstores.iastate.edu/forgottenpwd/create-new-password.php?"
    $url = "https://apps.centralstores.iastate.edu/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 450;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?, ?, ?, ?);";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn); #Could be an error

    $to = $userEmail;

    $subject = 'Reset your password for CS Apps';

    $message = '<p>We receiving a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email.</p>';
    $message .= '<p>Here is your password reset link:</br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: CS Apps <osborcon@iastate.edu>\r\n";
    $headers .= "Reply-To: osborcon@iastate.edu\r\n";
    $headers .= "Content-type: text/html\r\n"; #Makes html/css work

    mail($to, $subject, $message, $headers); #Mail function needed

    header("Location: ../reset-password.php?reset=success");
} else {
    header("Location: ../index.php");
}
