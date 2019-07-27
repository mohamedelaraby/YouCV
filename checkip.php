
<?php 

function checkText() {
    if(filter_var($_POST['ipconfig'], FILTER_VALIDATE_IP) !== FALSE){
        echo "IP vertified " . "<br>" . $_POST['ipconfig'] . "<br>";  
        header('REFRESH:5;URL=sleepandresume.php');
    } else {
        echo "sorry type again ";
        header('REFRESH:5;URL=sleepandresume.php');
    }
}
checkText();

?>