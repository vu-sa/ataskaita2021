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
.close6 {
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

.close6:hover,
.close6:focus {
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
<button id="myBtn6" class="myBtn">
<img src="/img/sveikinimai/radzeviciene.jpg" alt="radzeviciene.jpg" style="width:100%">
</button>
<!-- The Modal -->
<div id="myModal6" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close6">&times;</span>
    <p><strong>Mieli studentai, kolegos, </strong> </p>
    <p>džiugu matyti, kad Jūsų dėka mūsų senasis <i>Alma Mater</i> savo 442-ąjį gimtadienį pasitiko jaunas ir gyvybingas, nenustojantis augti ir keistis, įprasminantis praeitį ir žvelgiantis į ateitį. </p>
    <p>Nors ateitį nuspėti sunku, tyrimai rodo, kad 65 procentai šiandieninių pirmaklasių darbuosis funkcijose ir pareigybėse, kurių pavadinimai šiandien dar nė neegzistuoja. Naujoji informacinė revoliucija žada transformuoti tokias, mūsų supratimu, intelektualias amžinas profesijas kaip gydytojas, teisininkas, ar finansininkas. Atėjus į darbo vietas dirbtiniam intelektui mums teks pasikeisti. Jau dabar, siekiant efektyvumo, darbuotojų funkcijos didelėse kompanijose dažnai yra siaurai specializuotos, todėl nuolat rizikuojame vieną dieną „pralošti“ savo žmogiškąjį pranašumą dirbtiniam intelektui. Todėl būsimiems darbuotojams reikės ne tik konkrečių specialybės žinių, bet ir išlavintų socialinių kompetencijų: komunikacijos, kūrybingumo, bendradarbiavimo ir kritinio mąstymo, bus reikalingi refleksijos (arba mąstymo apie mąstymą) gebėjimai ir tam tikra pasaulėžiūra, nukeipta į nuolatinį mokymąsi bei augimą. </p>
    <p>Esu įsitikinusi, kad Universiteto Studentų organizacija yra kaip tik ta vieta, kurioje galima įgyti visus šiuos gebėjimus ir kompetencijas, išmėginti ir realizuoti save prasmingoje veikloje ir taip pasirengti gyvenimui dirbtinio intelekto amžiuje. </p>
    <p>Visos VU Tarybos vardu dėkoju jums už partnerystę, iniciatyvą ir savanorystę šiuo išskirtiniu pandemijos laikotarpiu ir tikiuosi sėkmingo bendro darbo ateityje! </p>
    <p>Vilniaus universiteto Tarybos pirmininkė <br>dr. Eglė Radzevičienė </p>
  </div>
</div>

<script>
// Get the modal
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close6")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>


</body>
</html>
