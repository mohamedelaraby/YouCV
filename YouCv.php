<!--
==========================
==author: Muhammad Alaraby
==========================
==Date: 12/7/2019
==========================
==Info: Learn PHP Basic
=========================
-->
<?php

#Shell unix comment
# hello from unix comment
//variables.
$pageTitle = "YouCV ";
$heading = "Welcome to "."$pageTitle"."website.";
$brief = "A personal website which 
you can create your own cv";

//Langauage that i love.
$language = "<h1>The language i love</h1>";
$language .= "<ul>";
$language .= "<li>PHP</li>";
$language .= "<li>HTMl</li>";
$language .= "<li>Javascript</li>";
$language .= "</ul>"

?>




<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle ?></title>
    </head>
    <body>
    <?php  echo "
   <h1>$heading</h1>
    <p> $brief</p>";
    ?>
    <p><?php  echo  $pageTitle.  " is for apply to a job easily "." so welcome again" ;?></p>


    <!--print ul-->
       <?php echo $language; ?>
     


   
    
    </body>
</html>