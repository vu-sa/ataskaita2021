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
.close4 {
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

.close4:hover,
.close4:focus {
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
<button id="myBtn4" class="myBtn">
<img src="/img/sveikinimai/Rektorius R. Petrauskas.jpg" alt="Rektorius R. Petrauskas.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal4" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close4">&times;</span>
    <p>Dear students,  </p>
    <p>I want to thank you for experiencing a difficult pandemic school year together. Both the study process and the implementation of all our activities and initiatives were hampered by quarantine restrictions, the need to move to virtual space in order to be able to work and study online. </p>
    <p>We must admit that this was not an ideal condition for change, for closer collaboration, but I can rejoice that Students‘ Representation has remained an active and effective part of the community. </p>
    <p>University students have become active volunteers in a wide range of fields, from medicine to education, and this activity has contributed to the well-being of the society. </p>
    <p>I would like to wish you to not only remain active and motivated, but also to boldly raise important and not always convenient questions – both for politicians and the University. </p>
    <p>The University is open to dialogue and is always ready to appreciate and accept the changing social environment. It is important that students feel this confidence and see an opportunity to become active citizens who are determined to change the environment.  </p>
    <p>I wish all of us, with new experiences, to return to the auditoriums, laboratories, libraries, to the lively discussions that make up the real University. </p>
    <p>Rector of Vilnius University  <br>Prof. Rimvydas Petrauskas  </p>
  </div>
</div>

<script>
// Get the modal
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
</script>


</body>
</html>
