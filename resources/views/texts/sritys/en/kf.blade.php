<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  padding: 40px;
  height: 250px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
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
.close21 {
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

.close21:hover,
.close21:focus {
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
<button id="myBtn21" class="myBtn">
<img src="/img/vizualai/KF.png" alt="MART1397B.jpg" style="width:50%">
</button>
<!-- The Modal -->
<div id="myModal21" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close21">&times;</span>




    
<img src="/img/padeka/kf_en.png" alt="VU SA KF" style="width:100%">
  </div>
</div>

<script>
// Get the modal
var modal21 = document.getElementById("myModal21");

// Get the button that opens the modal
var btn = document.getElementById("myBtn21");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close21")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal21.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal21.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal21) {
    modal21.style.display = "none";
  }
}
</script>


</body>
</html>
