<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>Hello...</span>Welcome!!!</h1>
    <div class="wrapper">
      <div class="company-info">
        <h3></h3>
        <ul>
         
          <li><i class="fa fa-envelope"></i> repmo@gmail.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Enter One's Details</h3>
        <div class="alert">Your message has been sent</div>
        <form id="contactForm" method="POST" action="details.php">
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name" required>
          </p>
          <p>
            <label>Age</label>
            <input type="text" name="age" id="age">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="email" required>
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
          </p>
          <p>
            <label>Height</label>
            <input type="number" name="height" id="height">
          </p>
           <p>
           <label>Weight</label>
            <input type="number" name="weight" id="weight">
          </p>
         <p>
            <label>Blood Pressure</label>
            <input type="number" name="bp" id="bp">
          </p>
           <p>
           <label>Pulse</label>
            <input type="number" name="pulse" id="pulse">
          </p>
	  <p>
	     <label for="date">Select Date</label>
  <input type="date" id="date" name="date">
</p>

           <p>
           <label>Street Address</label>
            <input type="add" name="add" id="add">
          </p>
           <p>
           <label>Landmark/ City</label>
            <input type="text" name="city" id="city">
          </p>
           <p>
           <label>PinCode</label>
            <input type="text" name="pincode" id="pincode">
          </p>
           <p>
           <label>State</label>
            <input type="text" name="state" id="state">
          </p>
          <p class="full">
            <label>Undergoing Treatment</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
        <p class="full">
            <label>Medication(If Taken)</label>
            <textarea name="medication" rows="5" id="medication"></textarea>
          </p>
          <p class="full">
            <button type="submit" id="submit">Submit</button>
          </p>
<p class="full">
      <button onclick="window.print()">Download</button>
          </p>
    <div id="chartContainer" style="height: 270px; width: 80%;">
    </div>
<p>
</p>
<p>
YOURS BP
<svg width="20" height="20">
<rect width="60" height="60" style="fill:#c1544d;stroke-width:3;stroke:rgb(0,0,0)" />
</svg>
</p>
<p>
</p>
<p>
&nbsp;&nbsp;MAX  BP
<svg width="20" height="20">
<rect width="60" height="60" style="fill:#4f81bc;stroke-width:3;stroke:rgb(0,0,0)" />
</svg>
</p>
        </form>
      </div>
    </div>
  </div>

        </form>
      </div>
    </div>
  </div>

  

  <script src="please.js"></script>
</body>
</html>
    <script type="text/javascript">
        window.onload = function() {
            var dps = []; //dataPoints. 

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Blood Pressure Graph"
                },
                data: [
 {        
       type: "column",
       name: "MAX",
       dataPoints: [
       { label: "Blood Pressure", y: 120 }
       ]
     },
{
                    type: "column",
			 name: "YOURS",
                    dataPoints: dps
                }]
            });

            function addDataPointsAndRender() {
                
                yValue = Number(document.getElementById("bp").value);
                dps.push({
                    label: "",
                    y: yValue
                });
                chart.render();
            }

            var submit = document.getElementById("submit");
            submit.addEventListener("click", addDataPointsAndRender);
        }
    </script>

    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>