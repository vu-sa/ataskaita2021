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
.close1 {
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

.close1:hover,
.close1:focus {
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
<button id="myBtn1" class="myBtn">
<img src="/img/sveikinimai/smsm_ministre.jpg" alt="Prezidentas" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close1">&times;</span>
    <p>Labas, studente!</p>
    <p>Po šių išskirtinių metų sveikinuosi su Tavimi virtualios knygelės pavidalu. Ateityje šiuos metus greičiausiai atsiminsime kaip visiškai nestandartinį gyvenimo laikotarpį, kuomet mokėmės gyventi kitokiomis sąlygomis. Visgi džiaugiuosi, kad išlipę iš bet kokių mums įprastų standartų sugebėjome Universitete ir apskritai pasaulyje įnešti naujų idėjų bei veikti reikšmingus darbus studentų labui! </p>
    <p>Naujus studijų metus pasitikome įgyvendindami akademinių diskusijų festivalį „Ad astra“, kuris net karantino sąlygomis didino įsitraukimą į akademinę bendruomenę ir jos pagrindines veiklas. Studentų savivaldoje padėjome pradinius pamatus lygiavertiškam užsienio studentų įsitraukimui ir jų poreikių atstovavimui Studentų atstovybėje bei Universiteto valdymo organuose. </p>
    <p>Šiuos metus taip pat skyrėme perteikti svarbiausiems studentų poreikiams. Džiaugiuosi, kad mūsų suformuluoti pasiūlymai naujosios Vyriausybės programai ir jos įgyvendinimo planui bei Universiteto strateginiam veiklos planui buvo išgirsti ir dabar formuoja tolimesnį Vyriausybės bei Universiteto veiksmų kelią ir prioritetus, kurie ilgainiui gerins studento gyvenimą. Šių prioritetų įgyvendinimas įgalins praturtinti studijas įsitraukiant į mokslinę veiklą, didins studijų ir bendrai aukštojo mokslo įtraukimą pažeidžiamiausių grupių studentams, gerins mūsų socialinę ir laisvalaikio infrastruktūrą, sudarys sąlygas įsidarbinti Universitete ir savarankiškai rinktis savo studijų kelią. </p>
    <p>Šiemet gyvenome ne tik teikdami siūlymus, bet ir priimdami naujus narius į bendruomenę. Tokiomis neįprastomis sąlygomis įvyko Šiaulių universiteto prijungimo prie Vilniaus universiteto žingsnis, po kurio buvo įsteigtas ir 15-asis Studentų atstovybės padalinys – VU SA Šiaulių akademijoje. </p>
    <p>Mums, kaip VU SA, naujo padalinio įsteigimas yra svarbus studentų atstovavimo kultūrų susijungimo ženklas, kuris puoselės tradicijas bei leis kurti aktyvų studentišką judėjimą trijuose Lietuvos miestuose – Vilniuje, Kaune ir Šiauliuose. </p>
    <p>Negana to, labai džiaugiuosi, kad tampame imlesni įvairiems pokyčiams organizacijoje, kurie, viliuosi, ateityje įgalins studentus dar savarankiškiau pasiekti tikslų ir formuos modernų, atvirą Universitetą bei Studentą. </p>
    <p>Vieningai Už Studentų Ateitį! </p>
    <p>VU SA Prezidentas </p>
    <p>BIM BAM</p>
  </div>
</div>

<script>
// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>


</body>
</html>