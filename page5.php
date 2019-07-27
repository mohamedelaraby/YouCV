<?php 
//Resume the session.
 session_start();
$_SESSION['favColor'] = '#ffff00';

echo  "Welcome " . $_SESSION['userName'] . " How are you?!" . "<br>" ;
echo "Your favourite NOw color is [" . $_SESSION['favColor']. "]<br>";

echo "<a href='logout.php'>Exit</a>";

?>