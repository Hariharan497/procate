export function buildcard(query){
    const getalldata = new httpController('/public/api/loadmoreproduct?'+query) 
    var data  = getalldata.getData();
data.then(response => {
    console.log("Data received:", response);  // Handle the response here
    card.innerHTML = "";

    for(const key in response){
        var data =response[key]
        Object.keys(data).forEach(function(value){
            console.log(typeof  data[value]);

            const getfile = new httpController("getcard?pid="+data[value]['pid']) ;
            var getcontent = getfile.getfile();

            getcontent.then(content => {
                 card.innerHTML +=(content)
             })
             getcontent.catch(error => {
                 console.error('There was a problem with the fetch operation:', error);
            });
        })
    }
})
data.catch(error => {
    console.error("Error:", error);  // Handle any errors here
})
}