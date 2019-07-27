<?php 
//it`s like cookies should put  before any html code in your website.

/*=================================================== 
============[  Destroy Sessions ]==
====================================================
*/

function endSession(){
    session_start();

    //Unset session
    session_unset();
    
    //Destroy session
    session_destroy();
    
    //Check
    print_r($_SESSION);
} 

/*-----------------------------------*/

function checkText() {
    if(filter_var($_POST['textinput'], FILTER_SANITIZE_STRING) !== FALSE){
        echo "text vertified " . "<br>" . $_POST['textinput'] . "<br>";  
        header('REFRESH:5;URL=sleepandresume.php');
    } else {
        echo "sorry type again ";
        header('REFRESH:5;URL=sleepandresume.php');
    }
}
checkText();




?>