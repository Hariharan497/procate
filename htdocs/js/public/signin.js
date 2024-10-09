let debounceTimer;
function debounceCheckUserInput(event) {
    clearTimeout(debounceTimer);  // Clear the previous timer
    debounceTimer = setTimeout(() => {  // Set a new timer
        checkUser(event);
    }, 300);  // Delay in milliseconds
}

function checkUser(event) {
    event.preventDefault();
    // ==============================================================================================
    // for username input handling
    // ==========================================START=============================================== 
    if (event.target.id == "floatinguserName") {
        const user_Exist = document.getElementById("alert");
        const username = document.getElementById('floatinguserName').value;
        let data = new FormData;

        // for checking username already exits or not 
        if (username != "") {
            data.append("username", username);

            const xhr = new XMLHttpRequest();

            xhr.open("POST", "/public/api/getuser", true); // Initialize a POST request

            // Event listener for when the request is completed
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    user_Exist.textContent = 'Username alredy Exsit '; // Display error message
                    user_Exist.style.cssText = 'display:block !important';
                }
                else {
                    user_Exist.textContent = '';
                    user_Exist.style.cssText = 'display:none !important';
                    return false;
                }
            };
            xhr.send(data); // Send the request
        }
        // end
    }

    // ===========================================END=================================================

    // ==============================================================================================
    // for password input handling document.getElementById('floatingPassword')
    // ==========================================START=============================================== 

    if (event.target.id == "floatingPassword") {
        const password = event.target.value;
        const PasswordError = document.getElementById("alert");
        const button = document.getElementById("btn-eye");

        const minLength = 8;
        const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/; // At least 8 characters, 1 letter, 1 number

        // for check password length 
        if (password.length < minLength && password != "") {
            button.disabled = false;
            PasswordError.textContent = 'Password must be at least ' + minLength + ' characters long.'; // Display error message
            PasswordError.style.cssText = 'display:block !important';
            return false;
        } else {
            PasswordError.style.cssText = 'display:none !important';
        }
        // end

        // check password escape from HTMLSpacial character
        if (regex.test(password) | password == "") {
            PasswordError.textContent = "";
            PasswordError.style.display = "none";
            return true;
        } else {
            button.disabled = false;
            PasswordError.textContent = "Password must contain at least one letter, one number, and be 8 characters long"; // Display error message
            PasswordError.style.cssText = 'display:block !important';
            return false;
        }
        // end
    }

    // ===========================================END=================================================


    // ==============================================================================================
    // for email input handling
    // ==========================================START=============================================== 

    if (event.target.id == "floatingEmail") {

        const email = document.getElementById('floatingEmail').value;
        const emailError = document.getElementById("alert");
        // Restrict input to digits 0-9
        if (/^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[com]{3,3}$/.test(email) | email == "") {
            emailError.textContent = "";
            emailError.style.display = "none";
        } else {
            emailError.textContent = "Invalid email address"; // Display error message
            emailError.style.cssText = 'display:block !important';
            return false;
        }

        // for check email already exits or not
        let data = new FormData;
        if (email != "") {
            data.append("username", email);
            const xhr = new XMLHttpRequest();

            xhr.open("POST", "/public/api/getuser", true); // Initialize a POST request

            // Event listener for when the request is completed
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    emailError.textContent = 'Email alredy Exsit '; // Display error message
                    emailError.style.cssText = 'display:block !important';
                }
                else {
                    emailError.textContent = '';
                    emailError.style.cssText = 'display:none !important';
                    return false;
                }
            };
            xhr.send(data); // Send the request
            return false;
        }
        // end
        return true; // If the password is valid
    }

    // ===========================================END=================================================

}


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

    if (event.target.id == "floatinguserName") {
        // Restrict input to digits 0-9
        if (!/^[a-zA-Z0-9]$/.test(event.key)) {
            return false; // Prevent any other keys
        }
    }

    if (event.target.id == "floatingEmail") {
        // Restrict input to digits 0-9
        if (!/^[a-zA-Z0-9@.]$/.test(event.key)) {
            return false; // Prevent any other keys
        }

    }

    if (event.target.id == "floatingPassword") {
        const button = document.getElementById("btn-eye");
        if (/^[&<>"'/]/.test(event.key)) {
            console.log(event.key);
            return false; // Prevent any other keys
        }

        if (event.target.value != "") {
            button.disabled = false;
        }


    }
    return true;
}

function passwordVisibility(event) {
    event.stopPropagation();
    const btn = document.getElementById("bi-eye").classList;
    const password = document.getElementById('floatingPassword');

    if (btn.contains("bi-eye-fill")) {
        btn.replace("bi-eye-fill", "bi-eye-slash-fill");
        password.style.cssText = 'margin-bottom: 10px !important; \
        border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;\
        border-bottom-left-radius: 6px;border-bottom-right-radius: 6px';
        password.type = "text";

    } else {
        btn.replace("bi-eye-slash-fill", "bi-eye-fill");
        password.type = "password";
    }

}

document.getElementById("form").addEventListener("submit", (event) => {
    try {
        event.preventDefault();
        const Error_msg = document.getElementById("alert");
        const cls = Error_msg.classList;
        const Error = false;
        // alert("hello");
        let data = new FormData;
        const name = document.getElementById("floatinguserName").value;
        if (name == "") {
            Error_msg.textContent = "Pls Fill Username";
            Error = true;
            return false;
        }
        data.append("username", name)

        const email = document.getElementById("floatingEmail").value;
        if (email == "") {
            Error_msg.textContent = "Pls Fill Email";
            Error = true;
            return false;
        }
        data.append("email", email)

        const Password = document.getElementById("floatingPassword").value;
        if (Password == "") {
            Error_msg.textContent = "Pls Fill Password";
            Error = true;
            return false;
        }
        data.append("password", Password);

        // const response = makeGetRequest("POST","/public/api/signup",data);

        if (Error == false) {
            const xhr = new XMLHttpRequest();
            const method = "POST";
            const url = '/public/api/signup'; // Example API endpoint

            xhr.open(method, url, false); // Initialize a GET request

            // xhr.setRequestHeader('Content-Type', 'application/json');

            // Event listener for when the request is completed
            xhr.onreadystatechange = function () {

                if (xhr.readyState === 4 && xhr.status === 200) {
                    // document.cookie="signin=true";
                    Error_msg.textContent = "Account Create Successfully <a class=\" \" href=\"login.php\" >click login here</a>"
                    Error_msg.style.cssText = 'display:block !important';
                    if (cls.contains("alert-danger")) {
                        cls.replace("alert-danger", "alert-success")
                    }
                    document.write("<h3>signin successfull <a href=\"log-in.php\">login</a></h3>");
                    setTimeout(() => { window.location.assign('login.php') }, 2000);
                }
                else {
                    Error_msg.textContent = "Something Wrong";
                    Error_msg.style.cssText = 'display:block !important';
                    if (cls.contains("alert-success")) {
                        cls.replace("alert-success", "alert-danger")
                    }
                }
            };
            xhr.send(data); // Send the request
        }
    }
    catch (err) {
        console.log(err);
    }

});
