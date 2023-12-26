// (() => {
//   "use strict";
//   const forms = document.querySelectorAll(".needs-validation");

//   Array.from(forms).forEach((form) => {
//     form.addEventListener(
//       "submit",
//       (event) => {
//         if (!form.checkValidity()) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add("was-validated");
//       },
//       false
//     );
//   });
// })();

// window.onload = function () {
//   var today = new Date().toISOString().split("T")[0];
//   document.getElementsByName("setTodaysDate")[0].setAttribute("min", today);
// };

// // let field = document.querySelector("#date");
// // field.valueAsDate = new Date();

// document.getElementById("pickUpDate").onchange = function (e) {
//   //set minimum value to calender 2 - to start with
//   var input = document.getElementById("DropOffDate");
//   input.setAttribute("min", this.value);
// };

// const form = document.getElementById("form");

// const pickDate = document.getElementById("pickUpDate");
// const dropDate = document.getElementById("DropOffDate");

// const pickStat = document.getElementById("station1");
// const dropStat = document.getElementById("station2");

// form.addEventListener("submit", function (e) {
//   e.preventDefault();

//   const pickDateVal = pickDate.value;
//   const dropDateVal = dropDate.value;

//   const pickSataVal = pickStat.value;
//   const dropSataVal = dropStat.value;

//   window.localStorage.setItem("pick-up", pickDateVal);
//   window.localStorage.setItem("drop-off", dropDateVal);

//   window.localStorage.setItem("station1", pickSataVal);
//   window.localStorage.setItem("station2", dropSataVal);

//   window.location.href = "results.html";
// });
