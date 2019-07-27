<?php 


/*

sleep(Seconds)
usleep(Microseconds) 1 second = 1000000 seconds. 

*/

  
  function exitAndDie(){
    $name = "martin.txt";
    $handle = fopen($name, 'w');
       sleep(10)
   or die( "We can not find your file $handle");
  }
/*--------------------------*/

function uniqidproerty(){
    $name = uniqid('da_', TRUE);
    echo $name . "<br";
    var_dump($name);
}

?>
<!---email form-->
<h1>type  your email</h1>
<form style="color: #f5f5f5;
          background-color: #d6e6f2;
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 25px;
          width: 50vw;
          height: 10vh;
          margin: 20px auto;
          text-align: center;" 
        action="chk.php" method="POST">
  <input type="email" name="email">
  <input type="submit" value="login">
</form>

<!---numbers form-->
<h1>type  your number</h1>
<form style="color: #f5f5f5;
          background-color: #b94e8a;
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 25px;
          width: 50vw;
          height: 10vh;
          margin: 20px auto;
          text-align: center;" 
        action="c.php" method="POST">
  <input type="number" name="number">
  <input type="submit" value="login">
</form>

<!---string form-->
<h1>type  your user name</h1>
<form style="color: #f5f5f5;
          background-color: #d87ca1;
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 25px;
          width: 50vw;
          height: 10vh;
          margin: 20px auto;
          text-align: center;" 
        action="logput.php" method="POST">
  <input type="text" name="textinput">
  <input type="submit" value="login">
</form>


<form style="color: #f5f5f5;
          background-color: #d87ca1;
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 25px;
          width: 50vw;
          height: 10vh;
          margin: 20px auto;
          text-align: center;" 
        action="checkip.php" method="POST">
  <input type="text" name="ipconfig">
  <input type="submit" value="login">
</form>