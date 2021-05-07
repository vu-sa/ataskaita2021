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
    <p>Dear students, </p>
    <p>For more than a year, we have been living in the global COVID-19 pandemic which has fundamentally changed our living, working, and learning habits and ways. The introduction of quarantines for libraries in Lithuania, including VU libraries, primarily meant closing the doors. Closing the physical library spaces was difficult for everyone: both, staff and students. Thank you very much, dear students, for your understanding, kindness and patience – your support was extremely important when it was necessary to quickly reorient to remote information services. I am glad that, now that I’m writing these lines, the VU Library can once again accept people from the VU community in all its departments. True, to a very limited extent, but the library is open again and waiting for you! </p>
    <p>The library is sincerely grateful to you for the regular meetings with the representatives of VU SR, which have already become a tradition, during which we discuss issues relevant to students and look for possible solutions. In response to your critical remarks and suggestions on how information services could be improved, the library developed the functionality of the mobile app during the reporting period, the equipment of the Scientific Communication and Information Center wireless network access points was updated, and the Aleph library information system ordered publications from all reading rooms. </p>
    <p>As the database subscription project draws to a close, you have resolutely and actively addressed the issue of access to securing quality electronic resources in the future. On the other hand, you, the youngest group in the VU community, are close to the ideas of open science and open access – let’s hope that with your active involvement and participation in the support of ideas, we will gradually move to open science initiatives at out University.</p>
    <p>You are beautiful in your youth, fascinating with a determination to move forward, an enthusiasm to learn, to seek, and to discover, Your activities at VU SR, the experience gained here will last a lifetime. By thanking you so much for your sincere cooperation I wish you to maintain youthful maximalism and activeness, to find career and personal life paths that meet your expectations. </p>
    <p>Sincerely, </p>
    <p>General Director of the VU Library <br>Irena Krivienė </p>
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
