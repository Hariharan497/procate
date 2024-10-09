
// import { getallproduct } from "./http.js";
// import { myFirstClass } from "./class.js";

// // const myFirstClass = require("./class.js");
// const mycls = new myFirstClass("hariharan");
// mycls.myfunc();

// // console.log(getallproduct);

// function hello() {
//     hello()
// };

// // hello()

 // Use fetch to read the file
 fetch('_templates/_card.php')
 .then(response => {
     if (!response.ok) {
         throw new Error('Network response was not ok');
     }
     return response.text(); // Get the file content as text
 })
 .then(data => {
     console.log('File content:', data); // Log the file content
     // You can manipulate or display this data as needed
     document.getElementById('file-content').textContent = data;
 })
 .catch(error => {
     console.error('There was a problem with the fetch operation:', error);
 });