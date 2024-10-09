export function getallproduct(){
    // makeGetRequest('get','/public/api/getallproduct');
    const xhr = new XMLHttpRequest();
    // let method = method;
    // let url = url; // Example API endpoint

    xhr.open('get', '/public/api/getallproduct', true); // Initialize a GET request

    // Event listener for when the request is completed
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
           let  response = xhr.responseText
           console.log(response)


         
        }
        else{
            return "Something Wrong";
        }
    };

    xhr.send(); // Send the request
}

export let hello = "hello Welcome !";