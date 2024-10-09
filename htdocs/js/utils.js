async function getData(url,method = 'GET') {
    try {
        const response = await fetch(url,{method});
        
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        let data = await response.json();
        return data;
    } catch (error) {
        console.error("Fetch error:", error);
    }
}

function getfile(url,method) {
    return new Promise((response,error)=>{
        const xhr = new XMLHttpRequest();

            xhr.open(method,url, false);

            xhr.onload = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    response(xhr.responseText);
                }else{
                    error = "something went wrong!!!!"
                }
            }

            xhr.send();
    })

}