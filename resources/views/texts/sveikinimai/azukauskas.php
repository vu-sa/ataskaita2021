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
.close3 {
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

.close3:hover,
.close3:focus {
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
<button id="myBtn3" class="myBtn">
<img src="/img/sveikinimai/Zukauskas.jpg" alt="Artūras Žukauskas" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close3">&times;</span>
    <p>Mieli Vilniaus universiteto studentai, </p>
    <p>sveikinu ir dėkoju, kad telkiate, puoselėjate bendradarbiavimo ir kolegiškumo kultūrą, kryptingai ir reikšmingai veikiate, nuolat prisidedate prie teigiamų pokyčių Lietuvos aukštajame moksle, aktyviai dalyvaujate rengiant ir priimant nacionalinės reikšmės sprendimus. Stengiatės, kad Universitetas būtų ne vien profesinių žinių šaltinis, bet drauge teiktų platų išsilavinimą, o gėris, žmogiškas solidarumas ir teisingumas būtų neatsiejamas nuo kasdieninės veiklos. </p>
    <p>XXI-asis amžius reikalauja ugdyti gebėjimus spręsti sudėtingas problemas ir veikti greitai besikeičiančioje aplinkoje, todėl jūsų aktyvumas ir kūrybiškumas dalyvaujant visuomenės pokyčiuose ir studijų inovacijose yra labai svarbus. Kartu turime suvokti, kad bendradarbiaudami galime ir turime siekti aukštesnės studijų kokybės, didesnio valstybės dėmesio talentų ugdymui ir studijų socialinės dimensijos plėtrai. Turėtume kartu stengtis, kad vis daugiau studentų turėtų galimybę dalyvauti tarptautinių mainų ir stažuočių programose, studijų metu būtų įdarbinami pagrindinėse savo Universiteto veiklose ir pabaigę Universitetą gebėtų kurti aukštą ekonominę, socialinę ir kultūrinę vertę. Turime prisiimti pasaulio pažinimo, supratimo ir veikimo atsakomybę. </p>
    <p>Šiandien dar tenka kovoti, kad Lietuvoje išlaidos, tenkančios vienam studentui, artėtų prie tarptautinio standarto – 40 proc. nuo BVP, tenkančio vienam gyventojui, kad išlaidos moksliniams ir eksperimentinei plėtrai priartėtų prie civilizuotų šalių vidurkio. Drauge turime siekti, kad šie rodikliai būtų nuolatinio valstybės dėmesio centre. </p>
    <p>Tuo pačiu turėtume peržiūrėti studijų prieinamumo koncepciją, orientuodamiesi į tai, kad studijuoti aukštosiose mokyklose galėtų visi tam pasirengusieji, nepriklausomai nuo savo socialinės padėties ir gyvenamosios vietos. </p>
    <p>Džiaugiuosi jūsų jaunatvišku aktyvumu, drąsa ir ryžtu. Tikiu, kad nuo jūsų pastangų, talento ir vertybių priklauso ne tik jūsų asmeninių siekių įgyvendinimas, bet ir visos mūsų šalies ateitis. Sėkmės tolimesnėms idėjoms bei veikloms! </p>
    <p>LR Seimo Švietimo ir mokslo komiteto pirmininkas <br>prof. Artūras Žukauskas</p>
  </div>
</div>

<script>
// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>


</body>
</html>
