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
    <p><strong>Dear students, pupils of Vilnius Alma Mater, </strong> </p>
    <p>Today, when not only our University, but also the world lives in exceptional conditions, the meaning of our activities, the meanings of our activities, which are, so to speak, spiritual, independent of everyday circumstances, become important. Despite the changed living and working conditions, we continue to operate. This testifies to the existence of two things as important elements of our lives: vocation and intelligence. So, this time about the connection between our academic life and these two concepts. And the connection is directly related to the history of our University and the Lithuanian language in it. </p>
    <p>In 2020, it was 400 years since the first dictionary of the Lithuanian language was published in 1620. Prepared in Vilnius by a professor of our University, one of the first Lithuanian Jesuits, Konstntinas Sirvydas. In his dictionary, the term vocation gave Sirvydas the form of a name. The international history and usage of the term vocation is extremely eloquent, reflecting the different cultural identities and ideas of modern Europe. For example, its German version Beruf, in Protestant society during the Reformation, because of the influence of religious ideas began to express a secular profession, business, craft, reflecting the vigor of emerging capitalism, as Protestant thought considered work an expression of divine vocation. The Lithuanian meaning of the term also has religious but Catholic roots. Self-reflection was practiced in the Jesuit society, which was encouraged to be documented in the form of a peculiar diary genre – vocatio. From the beginning of the Society of Jesus, each member of the Order was called to comprehend, reflect, and set out in writing the story of his vocation. Sirvydas described precisely the concept of vocatio in Lithuanian in his old dictionary as a name. This is how the Lithuanian word was born, which means to be called, called a mission. </p>
    <p>In the 21st century, we not only adapt the words of Sirvydas written at the beginning of the 17th century, but also expand their contents on a daily basis. The best example of this is the word sage, which was also first written in Sirvydas‘s  old dictionary. At our University, the present is inseparable from history and it is the best example of endless spiritual gifts, let us accept them, nurture them and let them grow within ourselves! </p>
    <p>Chairwoman of the VU senate, <br>Prof. Dainora Pociūtė </p>
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
