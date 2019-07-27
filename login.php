

<?php 

function postAndRequest(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo  $_REQUEST['username'] . " YOU are using post to process data" . "<br>";
    }
}

//Set cookies.
/**
 * 
 *    setcookie(name, content, expire, path, domain, secure, httponly);
 * 
 * [ name ] - Name of the cookies.
 * [ content ] - the coojies files content.
 * [ Expire ] - Expiration  date teh time of cookies.
 * [ path ] - the specified path of your cookies like allow all the website of some pages of it to set cookies.
 * [ domain ] - Your site domain.
 * [ secure ] - it should be true.
 * [ httponly ] - protect your
 */


function cookies(){
  setcookie("kandoo", "Channel educational", time() + 3600,"/");
    if(count($_COOKIE) > 0){
        echo "The Cookies are enabled for this website";
    } else {
        echo "Please,  Enable this for best performance";
    }

}

//Change your website background Color using cookies.
function changeColor ()
 {
     $mainColor = '#333';
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
         $mainColor =  $_POST['color']; //Get the color from the form.
         //store the color inside the cookies file.
         setcookie("userBackground", $mainColor, time() + 3600, '/');
     }

     if (isset($_COOKIE['userBackground'])){
         $body = $_COOKIE['userBackground'];
     } else {
         $body = $mainColor;
     }

     return $body;
 }
 //changeColor();

 //Delete the cookies file.
 setcookie("userBackground", "", time() - 3600, '/');
 $mainColor = '#333';
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $mainColor =  $_POST['color']; //Get the color from the form.
     //store the color inside the cookies file.
     setcookie("userBackground", $mainColor, time() + 3600, '/');
 }

 if (isset($_COOKIE['userBackground'])){
     $body = $_COOKIE['userBackground'];
 } else {
     $body = $mainColor;
 }

 echo "<pre>";
 print_r($_COOKIE);
 echo "</pre>"

/*========================================================================= */
/*
//Get the user name and the password from yourResume.php

//How to store in database.
$admins = array("ALi","Martin", "Dara");
$userName = $_POST['username'];
$passWord = $_POST['password'];

echo "You send the data with  [" . $_SERVER['REQUEST_METHOD']."]" . "<br>";

if (in_array($userName, $admins)) {
    echo "Welcome again [ " . $admins[2] . "] , to control panel";
} else {
    echo "Sorry about bad connections";
}
*/

//check for the form validity


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>login</title>
    </head>
    <body style=" background-color: <?php echo $body; ?>">
        <!--Sendd our data chunk to the the same page this page.-->
        <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="POST">
            <input type="color" name="color"/>
            <input type="submit" value="Choose"/>
        </form>
    </body>
</html>

