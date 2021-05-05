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
    <p>Mieli studentai, </p>
    <p>noriu padėkoti Jums už kartu išgyvenamus sudėtingus pandeminius mokslo metus. Tiek studijų procesą, tiek visų mūsų veiklą bei iniciatyvų įgyvendinimą trikdė karantino ribojimai, būtinybė persikelti į virtualią nuotolinio darbo ir nuotolinio bendravimo erdvę. </p>
    <p>Reikia pripažinti, kad tai nebuvo idealios sąlygos pokyčiams, glaudesniam bendradarbiavimui, tačiau galiu pasidžiaugti, kad Studentų atstovybė išliko aktyvia ir efektyvia bendruomenės dalimi. </p>
    <p>Universiteto studentai tapo aktyviais savanoriais įvairiose srityse – nuo medicinos iki švietimo sistemos – ir ši Jūsų veikla prisidėjo prie visuomenės gerovės. </p>
    <p>Linkėčiau Jums ne tik išsaugoti aktyvumą ir motyvaciją, bet ir toliau drąsiai kelti svarbius, ne visada patogius klausimus – tiek politikams, tiek Universitete. </p>
    <p>Universitetas yra atviras dialogui ir visada pasirengęs įvertinti ir priimti kintančią socialinę aplinką. Svarbu, kad studentai jaustų šį pasitikėjimą ir matytų galimybę tapti aktyviais, savo aplinką keisti pasiryžusiais piliečiais. </p>
    <p>Linkiu mums visiems su nauja patirtimi grįžti į auditorijas, laboratorijas, bibliotekas, į gyvas diskusijas, kurios kuria tikrąjį Universitetą. </p>
    <p>Vilniaus universiteto rektorius <br>prof. Rimvydas Petrauskas </p>
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
