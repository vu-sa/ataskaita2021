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
    <p>Mielas (-a) studente, </p>
    <p>savo atida ir reiklumu energingai prisidedi prie studentų interesų atstovavimo skatinant užtikrinti studijų kokybę savo universitete. Studijų kokybė apima daug sudedamųjų, kurių viena sietina ir su akademinės etikos kaip žmogaus teisių puoselėjimu. Nuosekliai puoselėjant akademinę etiką įvairiomis studijų sąlygomis svarbu stiprinti iniciatyvumą, veiklumą ir ryžtingumą – svarbiausia, nesustoti pusiaukelėje. Kartu kūrėme Akademinės etikos kodeksų rengimo, priėmimo ir įgyvendinimo rekomendacijas, dalijomės patirtimis ir įžvalgomis, ieškojome pažangių sprendimų – neabejotina, prisidedi prie reikšmingų Lietuvos studijų ir mokslo sistemos pokyčių. 
    <br>Vertindama Tavo indėlį kviečiu sėkmingai tęsti pradėtus darbus ir išlikti atviru(-a) naujoms galimybėms. </p>
    <p><strong>V</strong>ieningai <strong>U</strong>ž <strong>S</strong>tudentų <strong>A</strong>teitį! </p>
    <p>Akademinės etikos ir procedūrų kontrolierė <br>Dr. Loreta Tauginienė </p>
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
