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

<?php 



#Data type
//String.
$var1 = "Welcome to php";
$var2 = 100;
$var3 = true;
$var4 = 100.0;
 
//String array.
$stringArray = array(
    "a" => "A"."</br>",
    "b"  => "B"."</br>",
    "c" => "C",
);



 

echo "<h1>Get Type</h1>";
 echo gettype($var1)."</br>";
echo "<h2>Variable dump</h2>"."</br>";
echo var_dump($var1)."</br>";
echo var_dump($var2)."</br>";
echo var_dump($var3)."</br>";
echo var_dump($var4)."</br>";
echo var_dump($stringArray)."</br>";
?>
     
    
    </body>
</html>