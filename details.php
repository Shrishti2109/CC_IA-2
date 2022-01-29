<?php

 $name = "";
 $age = "";
 $email = "";
 $phone="";
 $height= "";
 $weight= "";
 $bp="";
 $pulse="";
 $date= "";
 $add= "";
 $city="";
 $state= "";
 $pincode= "";
 $message="";
 $medication="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
   {

      $name=($_POST["name"]);
      $age=($_POST["age"]);
      $email=($_POST["email"]);
      $phone=($_POST["phone"]);
      $height=($_POST["height"]);
      $weight=($_POST["weight"]);
      $bp=($_POST["bp"]);
      $pulse=($_POST["pulse"]);
      $date=($_POST["date"]);
      $add=($_POST["add"]);
      $city=($_POST["city"]);
      $state=($_POST["state"]);
      $pincode=($_POST["pincode"]);
      $message=($_POST["message"]);
      $medication=($_POST["medication"]);
   
          
   }

?>
<?

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "test";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) 
{
 die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
} 
else 
{
  $SELECT = "SELECT email From data1 Where email = ? Limit 1";
  $INSERT = "INSERT into data1 (name, add, phone, city, state, age, height, weight, bp, pulse, medication, message, email, date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//Prepare statement

$stmt = $conn-&gt;prepare($SELECT);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum = $stmt->num_rows;
if ($rnum==0) {
$stmt-&gt;close();
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ssssssssssssds";, $name, $add, $phone, $city, $state,
$age, $height, $weight, $bp, $pulse, $medication, $message, $date, $email);
$stmt-&gt;execute();

} 

else {
echo '<script language="javascript">
      window.onload = function () { alert ("Someone with this Email ID had alreagy registered before.");}
      </script>';
       return false;
}
$stmt->close();
$conn->close();
}
} 
else 
{

die();
}
?>
   
      

       
       
   }
function test_input($data)
  {
    $data = trim($data);
    $data = stripslahes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 

?>