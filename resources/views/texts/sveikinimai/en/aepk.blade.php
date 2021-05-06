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
.close8 {
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

.close8:hover,
.close8:focus {
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
<button id="myBtn8" class="myBtn">
<img src="/img/sveikinimai/MART1397B.jpg" alt="MART1397B.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal8" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close8">&times;</span>
    <p>Dear Student, </p>
    <p>Your attention and particularity contribute significantly to representation of the students’ interests to assure higher education quality at University. The higher education quality covers many components, one of which is related to the promotion of academic ethics as a human right. To foster the academic ethics consistently under various studying conditions, it is important to strengthen initiative, activeness, and determination – the most important thing is not to stop halfway. We have been together developing the Recommendations for preparation, adoption, and implementation of Academic Ethics Codes, we have been exchanging our insights and experience, and we have been searching in tandem for advanced solutions – thus, there is no doubt that you are also contributing to the paramount changes in the Lithuanian research and higher education system. 
    <br>As I appreciate Your input, I invite you to continue the started works and to remain open to new opportunities.  </p>
    <p>Unite for the Future of Students! </p>
    <p>Ombudswoman for academic ethics and procedures  <br>Dr. Loreta Tauginienė </p>
  </div>
</div>

<script>
// Get the modal
var modal8 = document.getElementById("myModal8");

// Get the button that opens the modal
var btn = document.getElementById("myBtn8");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close8")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
}
</script>


</body>
</html>
