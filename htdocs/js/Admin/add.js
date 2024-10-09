
const img_file = document.getElementById("formFileMultiple");

// img_file.addEventListener("change", event => {

//     console.log(img_file.files[0].type);

//     if (img_file.files[0].size > 500000) {
//         alert("image should be below 500kb.")
//         return false;
//     }

//     if (img_file.files[0].type != "image/jpeg") {
//         alert("invalid image type.")
//         return false;
//     }

//     if (img_file.files[0].length != 0) {
//         const file = event.target.files[0]; // Get the selected file
//         console.log(file);
//         if (file) {
//             const reader = new FileReader(); // Create a new FileReader instance

//             // Define what happens when the file is successfully read
//             reader.onload = function (e) {
//                 const img = document.getElementById('img');
//                 const img_label = document.getElementById('img-label');
//                 img_label.style.display = "none";
//                 img.src = e.target.result; // Set the image source to the result
//                 img.style.display = 'block'; // Make the image visible
//             };

//             // Start reading the file as a Data URL (for images)
//             reader.readAsDataURL(file);
//         }
//         else {
//             console.log(img_file.files[0]);
//             console.log("error");
//         }
//     }
//     else {
//         alert("pls select image");
//     }
// })

function inputvalidate(event) {
    if (
        event.key === "Backspace" ||
        event.key === "Delete" ||
        event.key === "ArrowLeft" ||
        event.key === "ArrowRight" ||
        event.key === "Tab"
    ) {
        return; // Allow these keys
    }

    if (event.target.id == "Pname") {
        // Restrict input to digits 0-9
        if (!/^[a-zA-Z0-9]$/.test(event.key)) {
            return false; // Prevent any other keys
        }
    }
    if (event.target.id == "Pcolor") {
        // Restrict input to digits 0-9
        if (!/^[a-zA-Z]$/.test(event.key)) {
            return false; // Prevent any other keys
        }
    }

    if (event.target.id == "Pprice") {
        // Restrict input to digits 0-9
        if (!/^[0-9]$/.test(event.key)) {
            return false; // Prevent any other keys
        }
    }

    if (event.target.id == "Poffer") {
        // Restrict input to digits 0-9
        if (!/^[0-9]$/.test(event.key)) {
            return false; // Prevent any other keys
        }

    }
}

document.getElementById("Poffer").addEventListener("change", function (event) {
    if (event.target != "") {
        let price = document.getElementById("Pprice");
        let offer = event.target;
        let Nprice = document.getElementById("Nprice");

        Nprice.value = price.value - Math.round((price.value * offer.value) / 100);
    }
})

// document.getElementById("form").addEventListener("submit", function (event) {

//     const method = "post";
//     const url = "/public/api/add"

//     const xhr = new XMLHttpRequest();

//     xhr.open(method, url, true); // Initialize a GET request

//     // Event listener for when the request is completed
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             return "create successfully"
//         }
//         else {
//             return "Something Wrong";
//         }
//     };

//     xhr.send(data); // Send the request

// })

