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
.close7 {
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

.close7:hover,
.close7:focus {
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
<button id="myBtn7" class="myBtn">
<img src="/img/sveikinimai/Fotografija parasui (1).jpg" alt="Fotografija parasui (1).jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal7" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close7">&times;</span>
    <p><strong>Mieli studentai, mielos studentės, </strong> </p>
    <p>daugiau nei metus gyvename pasaulį ištikusios COVID-19 pandemijos sąlygomis, iš esmės pakeitusiomis mūsų visų gyvenimo, darbo, mokymosi įpročius ir būdus. Lietuvoje įvestas karantinas bibliotekoms, tarp jų ir VU bibliotekai, pirmiausia reiškė durų užvėrimą. Fizinių bibliotekos erdvių uždarymas buvo sunkus visiems: ir darbuotojams, ir studentams. Nuoširdžiai dėkoju Jums, mieli studentai ir mielos studentės, už supratingumą, geranoriškumą ir kantrybę – Jūsų palaikymas, kai reikėjo greitai ir operatyviai persiorientuoti į nuotolines informacines paslaugas, buvo itin svarbus. Džiaugiuosi, kad dabar, kai rašau šias eilutes, VU biblioteka visuose savo padaliniuose vėl gali priimti VU bendruomenės žmones. Tiesa, labai ribotomis apimtimis, tačiau biblioteka vėl atidaryta ir laukia Jūsų! </p>
    <p>Biblioteka yra Jums nuoširdžiai dėkinga už jau tradiciniais tapusius reguliarius susitikimus su VU SA atstovais, kurių metu aptariame studentams aktualius klausimus ir ieškome galimų sprendimų. Reaguodama į Jūsų kritines pastabas ir siūlymus, kaip galėtų būti pagerintos informacinės paslaugos, atsiskaitomuoju laikotarpiu biblioteka išplėtojo mobiliosios programėlės funkcionalumus, buvo atnaujinta Mokslinės komunikacijos ir informacijos centro bevielio tinklo prieigos taškų įranga, bibliotekinės informacinės sistemos <i>Aleph</i> priemonėmis įgyvendintas leidinių iš visų skaityklų atvirų fondų užsakymas. </p>
    <p>Duomenų bazių prenumeratos projektui artėjant link pabaigos, Jūs ryžtingai ir aktyviai kėlėte klausimą dėl prieigos prie kokybiškų el. išteklių užtikrinimo ateityje. Kita vertus, Jums, jauniausiai VU bendruomenės grupei, artimos atvirojo mokslo, atvirosios prieigos idėjos – tikėkimės, kad Jums aktyviai įsijungiant ir dalyvaujant nuo idėjų palaikymo pamažu pereisime prie atvirojo mokslo nuostatas įtvirtinančių iniciatyvų mūsų Universitete. </p>
    <p>Esate gražūs savo jaunyste, žavūs pasiryžimu veržliai eiti į priekį, užsidegimu mokytis, ieškoti ir atrasti. Jūsų veikla VU SA, čia įgyta patirtis išliks visam gyvenimui. Dėkodama už nuoširdų bendradarbiavimą linkiu išsaugoti jaunatvišką maksimalizmą ir aktyvumą, surasti Jūsų lūkesčius atitinkančius karjeros ir asmeninio gyvenimo kelius. </p>
    <p>Nuoširdžiai, </p>
    <p>VU bibliotekos generalinė direktorė <br>Irena Krivienė </p>
  </div>
</div>

<script>
// Get the modal
var modal7 = document.getElementById("myModal7");

// Get the button that opens the modal
var btn = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close7")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}
</script>


</body>
</html>
