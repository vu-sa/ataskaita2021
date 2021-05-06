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
    <p>Dear students of Vilnius University, </p>
    <p>I congratulate and thank you for mobilizing, cherishing a culture of cooperation and collegiality, acting purposely and significantly, constantly contributing to positive changes in Lithuanian higher education, and actively participating in the preparation and adoption of decisions of national significance. You strive to make the University not only a source of professional knowledge, but also a provider of broad education, and that goodness, human solidarity and justice would be inseparable from everyday activities. </p>
    <p>The 21st century requires the development of the ability to solve complex problems and operate in a rapidly changing environment, so your activism and creativity in participating in societal change and study innovation is crucial. Together we must understand that by cooperating we can and must strive for a higher quality of studies, a greater state focus on the development of talents and the development of the social dimension of studies. We should work together to ensure that more and more students have the opportunity to participate in international exchange and internship programs, to be employed in their core activities during their studies and to be able to create high economic, social and cultural value after graduation. We must take responsibility for action, knowledge and understanding of the world. </p>
    <p>Today, we still have to fight to bring the costs per student in Lithuanian closer to the international standard – 40% from GDP per capita to bring funding for researchers and experimental development closer to the average of civilized countries. At the same time, we must strive to keep these indicators at the center of the state’s constant attention. </p>
    <p>At the same time, we should review the concept of access to study, focusing on the possibility for all those who are prepared to study in higher education, regardless of their social status and place of residence. </p>
    <p>I rejoice in your youthful activity, courage and determination. I believe that not only the realization of your personal aspirations, but also the future of our entire country depends on your efforts, talents and values. Good luck with further ideas and activities! </p>
    <p>Chairman of the Education and Science Committee of the Seimas of the Republic of Lithuania <br>Professor Artūras Žukauskas </p>
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
