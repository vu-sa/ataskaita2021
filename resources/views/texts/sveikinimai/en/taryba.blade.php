<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 0.5s
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close6 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.myBtn {
    
  width: 30%; /* Full width */
  height: 30%; /* Full height */
  background-color: #ffffff;
  border: 0px;
}

.close6:hover,
.close6:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<button id="myBtn6" class="myBtn">
<img src="/img/sveikinimai/radzeviciene.jpg" alt="radzeviciene.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal6" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close6">&times;</span>
    <p><strong>Dear students and colleagues, </strong> </p>
    <p>It is gratifying to see that, thanks to you, our old Alma Mater welcomed its 442nd birthday young and vibrant, never stopping to grow and change, making the past meaningful and looking to the future.  </p>
    <p>Although the future is difficult to predict, research shows that 65% of today‘s first-graders will work in functions and positions whose names do not yet exist today. The new information revolution promises to transform such intelligent eternal professions as physician, lawyer, or financier in our understanding. When it comes to jobs, artificial intelligence will have to change. Even now, the interests of efficiency, the functions of employees in large companies are often narrowly specialized, so we constantly risk one day „losing“ our human advantage to artificial intelligence. Therefore, future employees will need not only specific specialty knowledge, but also developed social competencies: communication, creativity, collaboration and critical thinking, reflection (or thinking about thinking) skills and a certain worldview translated into continuous learning and growth. </p>
    <p>I am convinced that the University Student Organization is just the place where you can acquire all these skills and competencies, try and realize yourself in a meaningful activities and thus prepare for life in the age of artificial intelligence. </p>
    <p>On behalf of the entire VU Council, thank you for your partnership, initiative and volunteering in this exceptional period of the pandemic and I look forward to successful joint work in the future. </p>
    <p>Chairwoman of the VU Council,<br>dr. Eglė Radzevičienė </p>
  </div>
</div>

<script>
// Get the modal
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close6")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>


</body>
</html>
