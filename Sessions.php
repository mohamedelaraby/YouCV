<?php 
//it`s like cookies should put  before any html code in your website.

/*=================================================== 
============[ Sessions ]==
====================================================
*/

//Start the session or resume.
session_start();

//Create the session data.
$_SESSION['userName'] = "Martin";
$_SESSION['favColor'] = "#333";

//Create the page we are going to send data to it like database.
echo "<a href='page2.php'>Room 2</a>";
?>