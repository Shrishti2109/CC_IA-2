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


<body>

<h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        
<label><b>Email    
        </b>    
        </label><br>  
        <input type="email" name="Email" id="email" placeholder="abc123@gmail.com">    
        <br><br>   
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
         

   
        <br><br> 
<input type="button" name="log" id="log" value="ENTER ">       
            <br><br>

            
        <br><br>    
            
    </form>     
</div>    
</body>    
</html>   
