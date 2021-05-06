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
.close {
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

.close:hover,
.close:focus {
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
<button id="myBtn" class="myBtn">
<img src="/img/sveikinimai/prezidentas.jpg" alt="Prezidentas" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Hello student! </p>
    <p>After such an exceptional year I am greeting you in the form of a virtual book. In the future, we will most likely remember this year as a completely non-standard period of life, where we learned to live in different conditions. Still, I am glad that after stepping out of any usual standards we still managed to bring new ideas and significant deeds for the sake of students at the University and the world in general! </p>
    <p>We greeted the new year by implementing the academic discussion festival “Ad Astra”, which increased the involvement into the academic community and its main activities even in the conditions of quarantine. In the Students’ Self-Government we laid the initial foundations for equal involvement of the foreign students and the representation of their needs at the Students’ Representation and the governing bodies of the University. </p>
    <p>This year has also been dedicated to conveying the most important needs of the students. I am pleased that our proposals for the new Government program and the plans for its implementation, as well as the University’s strategic action plan have been heard and are now shaping the further path of actions of the Government and the University and are raising priorities which, in the long run, will improve the student life. The implementation of these priorities will enable to enrich the studies by engaging into scientific activities, increase the involvement of students of the most vulnerable groups into the studies and higher education in general, improve our social and leisure infrastructure, and create the conditions for employment at the University and choosing their study path independently.  </p>
    <p>This year, we lived not only by making proposals, but also by accepting new members into the community. Under such conditions, the step of connecting Šiauliai University to Vilnius University took place, after which the 15th branch of the Students’ Representation was established – the VU SR in Šiauliai Academy. </p>
    <p>For us, as VU SR, the establishment of the new unit is the sign of unification of student representation cultures, which will nurture traditions and allow creating an active student movement in three Lithuanian cities – Vilnius, Kaunas and Šiauliai. </p>
    <p>Moreover, I am happy that we are becoming more receptive to various changes in the organization, which, I hope, will enable students to achieve their goals even more independently in the future and form a modern, open University and Student. </p>
    <p>Unitedly for the Future of Students! </p>
    <p>VU SR president </p>
    <p>Justas Kvedaravičius</p>
  </div>
</div>

<script>
// Get the modal
var modal0 = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal0.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal0.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal0) {
    modal0.style.display = "none";
  }
}
</script>


</body>
</html>
