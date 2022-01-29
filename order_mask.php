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
        background: #F6B5A8;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: white;  
    padding: 10px;  
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
#quantity{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#add{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}
#card{  
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
#pin{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}
 
#state{  
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
 var a=document.getElementById("quantity").value;
  if(a=="")
{
   alert("Quantity field to be  filled");
   return false;
}

  var x=document.getElementById("number").value;
  if(x=="")
{
   alert(" Mobile Number Cannot Be Empty");
   return false;
}
var crd=document.getElementById("card").value;
  if(crd=="")
{
   alert(" Credit Card Field Cannot Be Empty");
   return false;
}
if((x.charAt(0)!=9) && (x.charAt(0)!=8) && (x.charAt(0)!=7))
{
    alert("Number should start with 9,8 or 7");  
    return false;
}
if(((crd.charAt(0)!=4)))
{
    alert("Credit Card Number should start from 4");  
    return false;
}
}
</script>

<body>

<h2>Masks</h2>
<h2><span style="color:yellow"> Medicine ID: 52WER</span></h2>
   
    <div class="login">    
    <form id="login" method="post" action="">    
        <label><b>Name     
        </b><br>   
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username" required>    
        <br><br> 

<label><b>Email    
        </b>    
        </label><br>  
        <input type="email" name="email" id="email" placeholder="abc123@gmail.com" required>    
        <br><br>   
        <label><b>Quantity    
        </b>    
        </label><br>   
        <input type="number" name="quantity" id="quantity"required>    
        <br><br>    
        <label><b> Address    
        </b>    
        </label><br>    
        <input type="text" name="add" id="add" required><br><br> 
<label><b> Pincode   
        </b>    
        </label><br>   
        <input type="text" name="pin" id="pin" required><br>  
        <br><label><b>State    
        </b><br>    
        </label>    
        <input type="text" name="state" id="state"  required>    
        <br><br>

<label><b>Mobile Number     
        </b><br>    
        </label>    
        <input type="text" name="number" id="number" placeholder="Number should start from 7,8,9" required>    
        <br><br>

<label><b>Credit Card Number (VISA)   
        </b><br>    
        </label>    
        <input type="text" name="card" id="card" required>    
        <br><br>
        <br><br> 
<input type="submit" name="submit" value="Submit" onclick="validate()">      
            <br><br>
      
            
    </form>     
</div>    
</body>    
</html>   
