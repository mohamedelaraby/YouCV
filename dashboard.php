<?php 

session_start();

//Find the admin permissions.
if  (isset($_SESSION['username'])) {
    echo "Welcome ". $_SESSION['username'] . " to the dashboard";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
} else {
    echo "Back to the home page after five seconds";
    header('REFRESH:10;URL=signin.php');
}

?>