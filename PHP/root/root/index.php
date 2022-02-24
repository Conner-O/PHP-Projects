<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/login.signup.css">

</html>
<?php
include_once "header.php";
?>

<section class="signup-form">
        <form action="includes/print.po.php" method="post">
            <input type="text" name="qty" placeholder="Enter desired number to print...">
            <button type="submit" name="submit">Submit</button>
        </form>
</section>

<?php
include_once "footer.php";
?>

<!-- 

1. Set up PO number database
2. User select PO quantity needed to print, if user selects 1, bring user to PO form where user can fill out and print form.
   Increment PO number in db to display that change. If the user closes the application and does not select print on form page, flag number.
   Add feature later to print unprinted PO numbers and update the value that indicates number has been used.
   For any number greater than 1, initialize counter to 0, run while loop that increments db PO number and counter until counter value is met.
   For each increment, check db to see if PO number has changed by more than 1 unit. This is to handle if there is more than one user creating PO's.
-->