<?php 
function newSession () {
    session_start();

//Admins array.
$admins = array("osama", "Ali","ahmed", "sayed");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $userName = $_POST['username'];
    if (in_array($userName, $admins)) {
        $_SESSION['username'] = $userName;
        echo "you [ ". $_SESSION['username'] . " ] are admin, 
        in five second you will be in the dashboard room";

        //Waiting five seconds.
        header('REFRESH:5;URL=dashboard.php');

    } else {
        echo "NOT aLLOWED to GET in dashboard";
    }

} else {
    echo 'you can`t view this page directely';
}

}

function checkEmail() {
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== FALSE){
echo "Email vertified " . "<br>". $_POST['email'] . "<br>";  
echo "redirected to Home page after five seconds";
header('REFRESH:5;URL=sleepandresume.php');
} else {
    echo "sorry type again ";
    header('REFRESH:5;URL=sleepandresume.php');
}

}
checkEmail();






?>
