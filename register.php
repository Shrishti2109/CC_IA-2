<html>
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#000428;  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #ACCBAF;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: white;  
    padding: 20px;  
}  
label{  
    color: #000000;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#repass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}

#email{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#number{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}
 
#{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}

#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;    
}  

span{  
    color: white;  
    font-size: 17px;  
}  

</style>


<script>
function validate()
{

  var y=document.getElementById("Uname").value;
  if(y=="")
{
   alert("UserName to be  filled");
   return false;
}

 var d=document.getElementById("email").value;
  if(d=="")
{
   alert("Email to be  filled");
   return false;
}
 var a=document.getElementById("pass").value;
  if(a=="")
{
   alert("Password field to be  filled");
   return false;
}
 var b=document.getElementById("repass").value;
  if(b=="")
{
   alert("Re-Enter Password field to be  filled");
   return false;
}
  var x=document.getElementById("number").value;
  if(x=="")
{
   alert(" Mobile Number Cannot Be Empty");
   return false;
}

if(a!=b)
{
  alert("Password don't match");
   return false;
}
if((x.charAt(0)!=9) && (x.charAt(0)!=8) && (x.charAt(0)!=7))
{
    alert("Number should start with 9,8 or 7");  
    return false;
}
}

</script>

<body>

<h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username" required>    
        <br><br> 
<label><b>Email    
        </b>    
        </label><br>  
        <input type="email" name="email" id="email" placeholder="abc123@gmail.com" required>    
        <br><br>   
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="pass" id="pass" placeholder="Password" required>    
        <br><br>    
        <label><b> Re-Enter Password     
        </b>    
        </label>    
        <input type="Password" name="repass" id="repass" placeholder="Re-Enter Password" required><br>   
        <br><label><b>Mobile Number     
        </b><br>    
        </label>    
        <input type="text" name="number" id="number" placeholder="Number should start from 7,8,9" required>    
        <br><br>

<label><b>Gender    
        </b><br>    
        </label>    
        <input type="radio" id="gender" name="gender" value="male"> Male
<input type="radio" name="gender" id="gender" value="female"> Female
   
        <br><br> 
<input type="submit" name="submit" value="Submit" onclick="validate()">      
            <br><br>
<h3>Already a member? <span><a href="sign_in.php">Sign In</a></span></h3>
            
        <br><br>    
            
    </form>     
</div>    
</body>    
</html>   
