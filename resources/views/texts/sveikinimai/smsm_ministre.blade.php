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
    <p>Mieli Vilniaus universiteto studentai, </p>
    <p>džiugu, kad Vilniaus universiteto Studentų atstovybė yra nuolatinis aktyvus mūsų partneris siekiant bendrų tikslų – tarptautinės studijų kokybės ir gerų sąlygų studentijai. </p>
    <p>Gyvename nepaprastu pandemijos nulemtų iššūkių laikotarpiu, pakeitusiu kiekvieno mūsų gyvenimus ir jūsų studijų sąlygas. Dabartinė situacija ne tik reikalauja kūrybiškai prisitaikyti prie pasikeitusių aplinkybių. Ji taip pat suteikia galimybę į anksčiau įprastus dalykus pažvelgti kitaip ir siekti naujų, geresnių sprendimų, daryti seniai pribrendusius pokyčius. </p>
    <p>Jaunimas, o ypač studentai, visuomet buvo aktyvūs pokyčių nešėjai ir skatintojai, tad ir dabartinėje situacijoje džiaugiamės aktyviu Vilniaus universiteto dalyvavimu siekiant pokyčių studijų ir mokslo sistemoje. </p>
    <p>Vienas iš XVIII-osios Vyriausybės prioritetų – tarptautinio lygio mokslas ir studijos. Siekiant tvarių sisteminių studijų pokyčių reikės kryptingų mūsų visų bendrų pastangų. </p>
    <p>Tarptautinio lygio studijų kokybė reikalauja atsakingų investicijų. Be adekvataus aukštojo mokslo finansavimo sunku tikėtis geresnės studijų bazės, studentų gyvenimo sąlygų, aukštesnių dėstytojų ir mokslininkų atlyginimų, didesnių skatinamųjų stipendijų gerai besimokantiems. </p>
    <p>Todėl vienas iš pirmųjų Vyriausybės darbų šiais metais buvo padidintas valstybės finansavimas studijoms. Nuo 2022 iki 2027 metų valstybė numato apie 35 mln. eurų aukštojo mokslo finansavimui padidinti. Ankstesnės finansuojamų studijų kainos tik iš dalies dengė realias studijų organizavimo išlaidas, o finansavimas, tenkantis vienai studijų vietai, buvo vienas mažiausių tarp EBPO šalių. </p>
    <p>Šis didinimas – tik pirmas žingsnis, valstybės finansavimas turi ir toliau didėti, o studijų finansavimo principai keistis iš esmės. Tam subūrėme mokslo ir studijų institucijų finansavimo ir veiklos peržiūrėjimo darbo grupę, į kurią tarp visų suinteresuotų šalių įeina ir studentų atstovai. </p>
    <p>Šiuo metu studentai iš valstybės gauna trijų rūšių finansinę paramą studijoms: ne tik valstybės finansuojamas studijų vietas, bet ir stipendijas bei lengvatines paskolas. Visų šių rūšių valstybės parama didėja. Nuo praėjusių metų liepos valstybė skiria dvigubai daugiau lėšų socialinėms stipendijoms, o nuo šių metų rugsėjo lėšos skatinamosioms stipendijoms išaugs dešimtadaliu. </p>
    <p>2020 m. pabaigoje išplėsta paramos besirenkantiems mokamas studijas sistema – pakoreguota valstybės remiamų paskolų teikimo tvarka, kurioje atsižvelgta ir į studentų pasiūlymus: gerinamos paskolos grąžinimo sąlygos, nuo 2022 m. didės maksimali galima paskolos suma tiek studijoms, tiek pragyvenimui. </p>
    <p>Visi šie pokyčiai skatina veržliai eiti į priekį. Tad kviečiu jus ir toliau taip pat aktyviai ir atsakingai dalyvauti tiek keliant probleminius klausimus dėl kokybiškų studijų ir jų sąlygų, tiek ieškant geriausių sprendimų jiems spręsti. </p>
    <p>Tikiu, kad pastaruoju metu atlikti ir toliau daromi žingsniai sudarys tvirtas prielaidas studijų kokybei ir prieinamumui, o pasiekti rezultatai įkvėps naujiems bendriems ambicingiems darbams. </p>
    <p>Švietimo, mokslo ir sporto ministrė <br>Jurgita Šiugždinienė </p>
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
