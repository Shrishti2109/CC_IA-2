
<?php
 $Uname = "";
 $email = "";
 $number = "";
 $pass="";
 $repass= "";
 $number= "";
 $gender="";
 

 if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["Uname"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Name required");}
      </script>';
    }
 else
    {
      $name=($_POST["Uname"]);
    }
    if(empty($_POST["email"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Email required");}
      </script>';
    }
 else
    {
      $email=($_POST["email"]);
    }
    if(empty($_POST["number"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Number required");}
      </script>';
    }
 else
    {
      $number=($_POST["number"]);
    }
    if(empty($_POST["pass"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Password required");}
      </script>';
    }
 else
    {
      $pass=($_POST["pass"]);
    }
    if(empty($_POST["repass"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Re-Enter Password");}
      </script>';
    }
 else
    {
      $repass=($_POST["repass"]);
    }
    if(empty($_POST["gender"]))
    {
      echo '<script language="javascript">
      window.onload = function () { alert ("Select Gender");}
      </script>';
    }
 else
    {
      $gender=($_POST["gender"]);
    }
}
function test_input($data)
  {
    $data = trim($data);
    $data = stripslahes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
      $Uname=($_POST["Uname"]);
      $email=($_POST["email"]);
      $pass=($_POST["pass"]);
      $repass=($_POST["repass"]);
      $number=($_POST["number"]);
      $gender=($_POST["gender"]);

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else
{
  	$sql_e = "SELECT * FROM login WHERE email='$email'";
  	$res_e = mysqli_query($conn, $sql_e);
        if (mysqli_num_rows($res_e) > 0) 
        {
  	 echo '<script language="javascript">
         window.onload = function () { alert ("Sorry... username          already taken");}
         </script>';	

         
  	}
       
        else{
            
           $stmt = $conn->prepare("INSERT INTO login (name, email, pass,          number, gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param ("sssis" ,$name,$email, $pass, $number, $gender);

$stmt->execute();
$stmt->close();
$conn->close();
}
}

?>
<html>
 <body>
      <script>
         setTimeout(function(){
            window.location.href = "register.php";
         }, 1000);
      </script>
     
   </body>
</html>