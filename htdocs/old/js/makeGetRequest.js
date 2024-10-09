function makeGetRequest(method,url) {
    const xhr = new XMLHttpRequest();
    // let method = method;
    // let url = url; // Example API endpoint

    xhr.open(method, url, true); // Initialize a GET request

    // Event listener for when the request is completed
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
           return "create successfully" 
        }
        else{
            return "Something Wrong";
        }
    };

    xhr.send(); // Send the request
}