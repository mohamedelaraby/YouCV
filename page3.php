<?php 
//Resume the session.
 session_start();
echo  "Welcome " . $_SESSION['userName'] . " [  you are in room 3 ]" . "<br>" ;

//Pass those information to the kitchen.
echo "<a href='page4.php'>Kitchen</a>"


?>