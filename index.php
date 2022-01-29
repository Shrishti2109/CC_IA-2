<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">

#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}

.cnt223 a{
text-decoration: none;
}

.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}

.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}

.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}

.cnt223 p a{
color: #d91900;
font-weight: bold;
}

.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}

.cnt223 .x:hover{
cursor: pointer;
}



#first {

		  font-size: 4rem;
	    text-align: center;
      height:36vh;
      line-height: 40vh;
	    color: #000000;
	    
	   	font-family: 'Niconne', cursive;
	    font-weight: 700;
      
             
}
#grad1 {
  height: 1000px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #000428, #004e92);
}

 .social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.text-center{
    text-align: center;
}


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: auto;
  width: 50%;
  height: 40;
}

h2
{
color:white;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  height: 40%;
}

</style>

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<div class='popup'>
<div class='cnt223'>
<h1><span style="color:blue"><u>Important</u></span></h1>
<p>
Use CODE: <span style="color:red">FIRST502314</span> to get 10% off on buying medicines.
<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>

<div id="first"> Remote Patient Monitoring System </div>
  
<div id="grad1">

               <table>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="50" class=""></td>
                              </tr>
                              <!-- Spacing -->
            </table>
<h2 align="center">Who Are You ??</h2>
<br>

<a href="option.php"><img src="patient.png" alt="Paris" class="center"></a>
<br>
<br>
<br>
<a href="register.php"><img src="doctor.png" alt="Paris" class="center"></a>
<br>
<br>
</div>
<div>
<br>
<br>
<br>
</div>