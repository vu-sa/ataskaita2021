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
    <p>Dear students of Vilnius University, </p>
    <p>I am glad that the Vilnius University Students‘ Representation is a constant and active partner of ours in achieving common goals – international study quality and good conditions for the students.</p>
    <p>We are living in an extraordinary period of challenges determined by the pandemic that have changed the lives of each of us and the conditions of your studies. The current situation not only demands the creative adaption to changed circumstances, but it also provides an opportunity to take another look at things that were previously common and to seek new and better solutions, to make long-term changes. </p>
    <p>The youth, and especially the students have always been active carriers and promoters of changes, therefore in the current situation we are happy about the active participation of the Vilnius University in seeking for changes in the system of study and research. </p>
    <p>One of the priorities of the 18th government is science and studies at the international level. Sustainable systemic change in studies will require a focused effort made by all of us. </p>
    <p>The quality of international-level studies requires responsible investments. Without the adequate funding for higher education, it is difficult to expect a better study base, living conditions of the students and higher salaries for teachers and researchers, and higher incentive scholarships for good students. </p>
    <p>Therefore, one of the first tasks of the Government this year was to increase state funding for studies. From 2022 to 2027, the state anticipates to provide about 35 million euros to increase funding for higher education. Previous prices for funded studies only partially covered the real costs of organizing studies, and funding per study place was one of the lowest among OECD countries. </p>
    <p>This increase is just the first step, the funding from the state must continue to increase, and the principles of study funding must change fundamentally. For that we have set up a working group on the funding and performance review of research and higher education institutions, which includes student representatives from all stakeholders. </p>
    <p>Right now, the students receive three types of financial support for their studies from the state: not only state-funded study places, but also scholarships and soft loans. State support for all these types is increasing. Since July last year the state has dedicated twice as much funds for social scholarships, and since September this year, funds for incentive Scholarships will increase by a tenth. </p>
    <p>At the end of the year 2020, the system of support for those choosing paid studies was expanded – the procedure for providing state-supported loans was adjusted, which also took into account students’ proposals: loan repayment conditions were improved, the maximum possible loan amount for both, studies and living, will increase. </p>
    <p>All of these changes encourage us to move forward. Therefore, I invite you to continue to participate as actively and responsibly both in raising problematic questions about quality studies and their conditions, and in finding the best solutions to solve them. </p>
    <p>I believe that the recent steps taken to and to be taken will create solid preconditions for the quality and accessibility of studies, and the results achieved will inspire new and ambitious joint work. </p>
    <p>The minister of Education, Science and Sport <br>Jurgita Šiugždinienė </p>
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
