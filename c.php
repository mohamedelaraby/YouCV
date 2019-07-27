 <?php 

 
function checkNumber() {
    
   $userNumber =  $_POST['number'];
   
   if(filter_var($userNumber, FILTER_VALIDATE_INT) !== FALSE){
       echo "Number vertified " . $userNumber . "<br>";  
       }
   }
checkNumber();
 ?>