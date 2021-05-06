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
.close10 {
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

.close10:hover,
.close10:focus {
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
<button id="myBtn10" class="myBtn">
<img src="/img/sveikinimai/Arminas_profilis_2019.jpg" alt="Arminas_profilis_2019.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal10" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close10">&times;</span>
    <p>VU SA, </p>
    <p>egzistuoja du žiūros kampai į daugelį situacijų: arba gali į viską, kas vyksta aplinkui, žiūrėti kaip į problemą (grėsmę), nuo kurios reikia apsiginti, arba į galimybę, kurią reikia išnaudoti. Gal „bendru sutarimu“ galim pritarti, kad antras požiūris yra geresnis? </p>
    <p>Tam, kad organizacija (ar žmogus, ar organizacijos žmonės) galėtų matyti daugiau galimybių nei grėsmių, reikia vos dviejų dalykų. Pirmiausia, nebijoti neapibrėžtumo. Teisingiau, nepradėti panikuoti dėl to, kad smegenys negali visko sudėti į stalčiukus. Nes tada įsijungia gynybinės funkcijos, orientuotos į išgyvenimą ir <i>status quo</i> tampa tuo metu vienintele priimtina alternatyva.  </p>
    <p>Galvojat: „kokį <i>briedą</i> jis čia rašo?“ Geriau pagalvokite apie paskutinę situaciją, kuomet kas nors pasiūlė, kokį nors didelį pokytį, kažką ne savaime suprantamo ir kasdienio? Jūsų pirma reakcija: <i>a) omg, čia gi galima dar tą ir aną padaryti; </i>b)<i> wtf?!?! O kaip tas, o kaip anas? Čia gi bus ****.</i> Didžioji dalis žmonijos istorijos – bandymas sudėlioti pasaulį į stalčiukus. Mes negalime eliminuoti to, bet suprasdami tai mes galime tam nepasiduoti: atmesti pirmines apsaugines reakcijas ir <i>open-minded</i> diskutuoti bei ieškoti galimybių. </p>
    <p>Visgi neapibrėžtumas neveda prie neplanuoto <i>ad hoc</i> veikimo (kuris visada tam tikru lygiu neišvengiamas). Anaiptol. Neapibrėžtumo baisumus reikšmingai sumažinti gali krypties (vizijos, strategijos) turėjimas. Čia gi kaip su Češyro katinu. Įsivaizduokit, esate pasiklydęs, nežinote, kur esate (neapibrėžtumas). Prieinate kryžkelę, bet net nežinote, kur norite nueiti (strategija). Katinas tada ir sako, kad tiek dešinė, tiek kairė vienodai geros, nes vis tiek nežinai, kur nori nueiti. Situaciją neaiškėja – stresas didėja. O jei esat lygiai taip pat pasiklydę (neapibrėžtumas), bet atėję į kryžkelę žinote, kad norite pasiekti artimiausią vietą x, tai tada žinosite, kurion pusėn pasukti. Ar šiame scenarijuje dingo neapibrėžtumas? Ne. Vis dar esate pasiklydę, bet bent jau žinote į kurią pusę turite eiti. One step at a time. </p>
    <p>Tai, kai aiškiai žinai, ką nori pasiekti, net kai nutinka tokie dalykai kaip pandemija – nenustoji veikti. Net kai aplink toks milžiniškas neapibrėžtumas – gali suvokti, kurie sprendimai veda tavo (organizacijos) vizijos link. Jums pavyko įrodyti, jog sugebate veikti ir tinkamai atstovauti studentams – kovos dėl paskaitų įrašinėjimo ar jų turinio davimo studentams, pandemijos akivaizdoje kylančių socialinių iššūkių studentams mažinimas. Galiausiai – nacionalinis socialinės dimensijos planas, kuris, rodos, pagaliau virs realybe! VU SA buvo pirmoji organizacija, kuri pradėjo kalbėti apie soc. dimensiją Lietuvoje dar 2013 m. Ir tik dėl ilgalaikių VU SA pastangų ši sritis pagaliau gali reikšmingai pajudėti į priekį. </p>
    <p>Ar šiemet buvo sunku? Niekas ir nesakė, kad bus lengva. Ar kitąmet bus sunku? (žr. praeitą atsakymą). </p>
    <p>Klaida būtų neišnaudoti galimybių, kurias sukūrė pandemija. Jų yra daug tiek atstovavime, tiek organizacijos viduje. To ir linkiu! One step at a time. </p>
    <p>Vieningai </p>
    <p>Asociacijos Žinių ekonomikos forumas direktorius <br>Arminas Varanauskas </p>
  </div>
</div>

<script>
// Get the modal
var modal10 = document.getElementById("myModal10");

// Get the button that opens the modal
var btn = document.getElementById("myBtn10");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close10")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal10.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal10.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal10) {
    modal10.style.display = "none";
  }
}
</script>


</body>
</html>
