<!--
==========================
==author: Muhammad Alaraby
==========================
==Date: 12/7/2019
==========================
==Info: Learn PHP Basic
=========================
--->

<?php

//Change the website theme.
$siteTheme = "main";
if ($siteTheme == "main") {
    $css = "main.css";
} elseif ($siteTheme == "white") {
    $css = "white.css";
} else {
    $css = "main.css";
}


function getTicket ($user, $age) {
    $ticket = rand(5000, 1000000);

    if ($age >= 30){
        $msg = "Hello ". $user . "Your age is " . $age . "<br>" ;
        $msg .=  " Yo uare allowed to Get a Ticket congteraz :)" . "<br>";
        $msg .= " Your Ticket ID is [" . $ticket . " ]" . "<br>";
    } else {
        $msg = "Hello ". $user . "Your age is " . $age . "<br>" ;
        $msg .=  " Yo uare  NOT allowed to get a Ticket congteraz :)" . "<br>";
        
    }

    return $msg;
}

$id = getTicket("Muhammad", "35");

//Print nice frame.
function makeFrame ($element) {
    $frame = "<div class= 'nice-frame'> ";
    $frame .= $element;
    $frame .= "</div>";
    return $frame;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>YouCv - A personal website which you can create your own cv.</title>
       <link rel="stylesheet" href="<?php  echo $css; ?>" />
    </head>
    <body>
   
    <div class="centerPage">

    <?php 
 function copyMe(){
       if (file_exists('Backup')){
           echo "i`ve found it sir" . "<br>";
            //copy this file every time i work in it
            if(!copy(__FILE__, __DIR__ .'/Backup/Resume2019.php')){
                echo "Your file is  [ copied ] again sir". "<br>";
            } else {
                echo "Your file is [ not ] copied". "<br>";
            }
       } else {
        mkdir('Backup');
         //copy this file every time i work in it
         if(!copy(__FILE__, __DIR__ .'/Backup/Resume2019.php')){
            echo "Your file is copied again sir". "<br>";
        } else {
            echo "Your file os not copied". "<br>";
            
        }
       }
 }
 copyMe();

 //=============================================================

 //Path info
  function PathDetails(){
   //  echo "<pre>";
       $link = pathinfo(__FILE__);
       echo $link['basename'] . "<br>";
       echo $link['dirname'] . "<br>";
       echo $link['extension'] . "<br>";
       echo $link['filename'] . "<br>";
    // echo "</pre>";
  }
  
  /*------------------------------------------------------*/

  //Unlink & rmdire
  function RemoveFile(){
      
   /* $file = __Dir__ . '/php/local.php';
      if (file_exists($file) && is_writable($file)){
          unlink($file);
          echo "Your file is deleted";
      } else {
          echo "the file is still exists";
      }
*/

//Remove directory
//rmdir :  remove directory.
//unlink : remove files
$users = __DIR__ . "/users";
echo $users;
rmdir($users);
rmdir('players');
rmdir('games');
rmdir('details');

   /*  if(is_writable($file)) {
          unlink($file);
      } else if(file_exists($file)) {
          echo "Your file is not writable";
          unlink($file);
      } else if(file_exists($textFile)) {
        echo "Your file is not writable";
        unlink($textFile);
      } else if (file_exists($textFile1)) {
        echo "Your file is not writable";
        unlink($textFile1);
      }
*/
  }
 
  /*------------------------------------------------------*/
//Scandir : Find the files inside any directory.

function scanDires(){
createDirectories();
$link = __DIR__;
$files = scandir($link, SCANDIR_SORT_NONE);
echo "<pre>";
print_r($files);
echo "</pre>";

}
/*---------------------------------------------------------------*/

/* fopen modes;
[ r ]: Read only starting from th beginning of the file [File must be exist]
[ r+ ] :- Read & write starting from beginning 
of the file [File must be exist]
[ w ] : Write only and  open and clear the content + if the file is not exists creates it. 
[ w+ ] : Write & Read and if the file is not exists creates it. 
[ a ] : Write only   [Creat the file if it isn`t exist]
[ a+ ] :  Write & Read   start adding from the lst line in the file. + [Creat the file if it isn`t exist]  
[ x] : Write only   [Creat the file if it isn`t exist] [File shouldn`t be extist]
[ x+ ] :  Write & Read   start adding from the lst line in the file. +
 [Creat the file if it isn`t exist]  


*/
function fileOpen () {
$fileHandle = fopen('fileopen.txt', 'r+');
$filecontent = fread($fileHandle, filesize('fileopen.txt'));
fwrite($fileHandle, "Hello from writting process at first glance");

echo $filecontent;
} 

/*----------------------------------------------------- */
//fseek. SEEK_SET, SEEK_CUR, SEEK_END
function fileSeek(){
$fileHandle = fopen('fileopen.txt','r+');
fseek($fileHandle, -11, SEEK_END);
$write = fwrite($fileHandle, "[h]"); 
}
/*----------------------------------------------------- */
// [ fclose ] close the operation on the file.
 function training(){
    //Open the file with write and read.
    $fileHandle = fopen('fileopen.txt', 'r+');
    
    //put the cursor in particular offset using fseek
    fseek($fileHandle, 9, SEEK_CUR );
    fwrite($fileHandle, 'nickname ');
    fclose($fileHandle);

}
/*----------------------------------------------------- */
//Super Scope [Global scope].
function testGlobalScope() {
    $name = "Muhammad";
    $GLOBALS['name'];
}
/*----------------------------------------------------- */
//SERVER
function ServerTest(){
   
    //Print the server address.
    echo $_SERVER['SERVER_ADDR'] . "<br>";

    //Get the server name.
    echo $_SERVER['SERVER_NAME']. "<br>";

    //Print the query string d aafter the question mark in the domain address.
    echo $_SERVER['QUERY_STRING']. "<br>";

    //Know where are you come on the web
    echo $_SERVER['HTTP_REFERER']. "<br>";

    //Get the server port.
    echo "You are using port[". $_SERVER['SERVER_PORT'] ."]";
}


/*----------------------------------------------------- */

function getAndPost(){

}
getAndPost();
?>

</div>

 <form action=" " method="post">
 <input type="text" name="username">
 <input type="password" name="password">
 <input type="submit" value="login">
 </form>

     
    </body>
</html> 
