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
.close5 {
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

.close5:hover,
.close5:focus {
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
<button id="myBtn5" class="myBtn">
<img src="/img/sveikinimai/pociute.jpg" alt="pociute.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal5" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close5">&times;</span>
    <p><strong>Brangūs studentai, Vilniaus Alma Mater mokiniai,</strong> </p>
    <p>šiandieną, kai ne tik mūsų Universitetas, bet ir visas pasaulis gyvena išskirtinėmis sąlygomis, svarbiomis tampa kasdienėms aplinkybėms nepavaldžios, sakytume, dvasinės, mūsų veiklos prasmės. Nepaisant pasikeitusių gyvenimo ir darbo sąlygų, mes ir toliau tęsiame savo veiklą. Tai liudija mūsų gyvenimo svarbiais dėmenimis esant du dalykus: <strong><i>pašaukimą</i></strong> ir <strong><i>išmanumą</i></strong>. Tad šį kartą apie tai, koks yra ryšys tarp mūsų akademinio gyvenimo ir šių dviejų sąvokų. O ryšys yra tiesiogiai susijęs su mūsų Universiteto ir lietuvių kalbos jame istorija. </p>
    <p>2020-aisiais sukako 400 metų nuo pirmojo lietuvių kalbos žodyno, kurį 1620 m. Vilniuje parengė mūsų Universiteto profesorius, vienas pirmųjų lietuvių jėzuitų, Konstantinas Sirvydas. Savo žodyne sąvokai <i>pašaukimas</i> Sirvydas suteikė <i>pavadinimo</i> formą. Sąvokos <i>pašaukimas</i> tarptautinė istorija ir vartosena yra itin iškalbinga, atspindinti skirtingus naujųjų laikų Europos kultūrinius identitetus ir idėjas. Pavyzdžiui, vokiškas jo variantas <i>Beruf</i>, reformacijos laikų protestantiškoje visuomenėje, dėl religinių idėjų poveikio ėmė reikšti pasaulietinę profesiją, verslą, amatą, atspindėjo besikuriančio kapitalizmo veržlumą, mat protestantų mintis darbą laikė dieviškojo pašaukimo išraiška. Lietuviškoji žodžio pavadinimas reikšmė taip pat turi religines, tačiau katalikiškas šaknis. Jėzuitų draugijoje praktikuota autorefleksija, kurią buvo skatinama dokumentuoti savito dienoraštinio žanro – <i>vocatio</i> – forma. Nuo pat Jėzaus draugijos veiklos pradžios, kiekvienas ordino narys buvo kviečiamas suvokti, apmąstyti ir raštu išdėstyti savo pašaukimo istoriją. Sirvydas būtent šią <i>vocatio</i> sąvoką lietuviškai savo senajame žodyne ir apibūdino kaip <i>pavadinimą</i>. Taip gimė lietuviškas žodis, turintis reikšmę būti pašauktam, pavadintam misijai. </p>
    <p>Ir šiandieną Vilniaus universitetas ir mes visi kartu, tebeturime išskirtinę pašaukimo misiją būti atsakingi už mokslą, akademinę mintį, kuri lietuvių visuomenėje visada buvo gerbiama. Tad linkiu visiems studentams, esantiems <i>pavadintųjų</i> gretose, bet kokiomis aplinkybėmis išlikti kūrybiškais mūsų akademinės bendruomenės dalyviais. Sirvydo sukauptas žodžių aruodas mums liudija, kad atlikti darbai nėra tik istorija, akademinės bendruomenės stiprybė – tęstinumas. XVII a. pradžioje užrašytus Sirvydo žodžius, XXI amžiaus gyvenime ne tik pritaikome, bet ir kasdien plečiame jų turinius. Puikiausias to pavyzdys yra žodis <i>išmanus</i>, kuris pirmą kartą taip pat buvo užrašytas senajame Sirvydo žodyne. Mūsų Universitete dabartis neatsiejama nuo istorijos ir tai puikiausias nenykstančių dvasinių dovanų pavyzdys, priimkime jas, puoselėkime ir leiskime joms augti savyje! </p>
    <p>Jūsų Senato pirmininkė, <br>prof. Dainora Pociūtė </p>
  </div>
</div>

<script>
// Get the modal
var modal5 = document.getElementById("myModal5");

// Get the button that opens the modal
var btn = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close5")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
</script>


</body>
</html>
