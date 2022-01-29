<?php
 $name = "";
 $email = "";
 $quantity="";
 $add= "";
 $pin= "";
 $state="";
 $number="";
 $card= "";
 

 if($_SERVER["REQUEST_METHOD"]=="POST")
   {

      $name=($_POST["Uname"]);
      $email=($_POST["email"]);
      $quantity=($_POST["quantity"]);
      $add=($_POST["add"]);
      $pin=($_POST["pin"]);
      $state=($_POST["state"]);
      $number=($_POST["number"]);
      $card=($_POST["card"]);
          
   }

?>

<html>
<style>
#second 
{
 font-size: 2rem;
 text-align: center;
 height:15vh;
 line-height: 10vh;
 color: #000000;
 font-family: 'Niconne', cursive;
 font-weight: 400;
}

#first 
{
 font-size: 4rem;
  text-align: center;
 height:36vh;
 line-height: 15vh;
 color: #000000;
 font-family: 'Niconne', cursive;
 font-weight: 500;
}

p
{
 font-size: 1rem;
 text-align: center;
 height:15vh;
 line-height: 15vh;
 color: #000000;
 font-family: 'Niconne', cursive;
 font-weight: 400;
}

#grad1 {
  height: 30px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #000428, #004e92);
}
</style>

<body>
<div id="first"> Your Transaction has been generated sucessfully. Thank You! </div>
<div id="grad1"></div>
</body>
</html>

<?php

function test_input($data)
  {
    $data = trim($data);
    $data = stripslahes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 

?>


<h4 id="second"> YOUR RECEIPT</h4>

 

<?php 
   echo "Name :  ";
   echo "$name ";
   echo "<br>";   
   echo "<br>";

   echo "Email :  ";
   echo "$email ";
   echo "<br>";
   echo "<br>";

   echo "Phone Number :  ";
   echo "$number  " ;
   echo "<br>";
   echo "<br>";

   echo "AMOUNT PAYED : ";
   echo  $quantity * 62.7;
   echo "<br>";
   echo "<br>";
  
   echo "TRANSACTION ID :  ";
   echo(rand() . "<br>");
   echo "<br>"; 

?>
   
