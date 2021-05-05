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
.close2 {
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

.close2:hover,
.close2:focus {
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
<button id="myBtn2" class="myBtn">
<img src="/img/sveikinimai/skvcportraits_91.jpg" alt="skvcportraits_91.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close2">&times;</span>
    <p>Mieli Vilniaus universiteto studentai,</p>
    <p>džiaugiuosi ilgamečiu mūsų bendradarbiavimu puoselėjant aukštojo mokslo kokybės kultūrą Lietuvoje. Jūsų rūpestis, aktyvus dalyvavimas, keliami klausimai, siūlomi sprendimai ir teikiamos idėjos prisideda prie asmeninio, institucijos ir visuomenės tobulėjimo.  </p>
    <p>Man smagu pažymėti, kad Jūsų vertingos įžvalgos, dalijimasis sukaupta patirtimi ir drąsūs sprendimai padeda į aukštojo mokslo iššūkius žvelgti visapusiškiau.   </p>
    <p>Linkiu ir toliau išlikti aktyviais mūsų partneriais ir konstruktyvią kritiką teikiančiais draugais, padedančiais žengti tobulėjimo keliu! </p>
    <p>Studijų kokybės vertinimo centro direktorius<br>Almantas Šerpatauskas </p>
  </div>
</div>

<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>


</body>
</html>
