// function myFunction() {
//     document.getElementsByClassName("drop-down").classList.toggle("show");
//   }
  
//   // Close the dropdown menu if the user clicks outside of it
//   window.onclick = function(event) {
//     if (!event.target.matches('.nav-icon')) {
//       var dropdowns = document.getElementsByClassName(".drop-down");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show')) {
//           openDropdown.classList.remove('show');
//         }
//       }
//     }
//   }

var dropDown = document.querySelector(".nav-icon");
var dropDownDiv = document.querySelector("#drop-nav");
dropDown.addEventListener("click", function(){
  dropDownDiv.classList.toggle('show-menu');
});