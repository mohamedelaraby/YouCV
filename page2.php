<?php 
//Resume the session.
 session_start();
echo  "Welcome " . $_SESSION['userName'] . " How are you?!" . "<br>" ;
echo "Your favourite color is [" . $_SESSION['favColor']. "]<br>";

//Pass those information to page3[Room3].
echo "<a href='page3.php'>Room 3</a>";
?>