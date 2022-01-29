<html>
<style>

#grad1 {
  height: 1000px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #000428, #004e92);
}

h1,a
{
color:white;
}

button
{
color:white;
}

tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: white;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

#cf6_image {
  margin:0 auto;
  width:470px;
  height:450px;
  transition: background-image 1s ease-in-out;
  background-image:url("medicine1.jpg");
  border-radius: 10%;
}

#cf6_image:hover {
  background-image:url("medicine2.jpg");
}

</style>
<body>
<div id="grad1">
     <table>
         <!-- Spacing -->
            <tr>
               <td width="100%" height="0.5" class=""></td>
             </tr>
.          <!-- Spacing -->
       </table>
<h1>&nbsp;&nbsp;&nbsp;Medicine Store</h1>
<hr>

<div class="tab">
    <button class="tablinks"><a href="index.html">HOME</a</button>
    <button class="tablinks" onclick="clickHandle(event, 'Bear')">ALL MEDICINES</button>
    <button class="tablinks" onclick="clickHandle(event, 'Dog')">YOUR ODERS</button>
  </div>
<br>
<br>
<br>
<div id="cf6_image" class="shadow"></div>
<html>