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
.close9 {
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

.close9:hover,
.close9:focus {
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
<button id="myBtn9" class="myBtn">
<img src="/img/sveikinimai/R_Simasius.jpeg" alt="R_Simasius.jpeg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal9" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close9">&times;</span>
    <p>Mieli studentai, </p>
    <p>nors šie metai paženklinti neeilinių iššūkių, sveikinu Jus, aktyviai priėmusius kvietimą susitelkti, nepasidavusius ir jaunatviškomis iniciatyvomis įkvėpusius visus aplinkinius. </p>
    <p>Jūsų pasiryžimas ir pasitikėjimas savimi įtikina, kad Vilnius, o ir Lietuva, ir ateityje išliks pozityvios energijos, kūrybos ir galimybių kalve. </p>
    <p>Kviečiu Jus ir po studijų likti sostinėje, siekti lyderystės ir profesionalumo savo srityse bei kurti ateities Lietuvą ir Vilnių. </p>
    <p>Vilniaus miesto meras <br>Remigijus Šimašius </p>
  </div>
</div>

<script>
// Get the modal
var modal9 = document.getElementById("myModal9");

// Get the button that opens the modal
var btn = document.getElementById("myBtn9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close9")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal9.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal9.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal9) {
    modal9.style.display = "none";
  }
}
</script>


</body>
</html>
