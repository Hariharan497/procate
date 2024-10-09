function search_toggel() {
    const search = document.getElementById("input-search").classList;
    const navbaroffcanvas = document.getElementById("navbaroffcanvas").classList;
    const logo = document.getElementById("logo").classList;
    const linkSearch = document.getElementById("link-Search").classList;
    const media = window.matchMedia("(max-width: 768px)");

    if (search.contains("d-none")) {
        search.remove("d-none");
        navbaroffcanvas.add("d-none");
    } else {
        search.add("d-none");
        navbaroffcanvas.remove("d-none");
    }
    if (media.matches) {
        if (logo.contains("d-none")) {
            logo.remove('d-none')
        } else {
            logo.add("d-none")
        }
    }
    if (linkSearch.contains("d-none")) {
        linkSearch.remove("d-none");
    } else {
        linkSearch.add("d-none");
    }
}

const searchToggler = document.getElementById("link-Search");
if (searchToggler) {
    searchToggler.addEventListener('click', event => {
        search_toggel();
    })
}

const searchTogglerClose = document.getElementById("link-search-close");
if (searchTogglerClose) {
    searchTogglerClose.addEventListener('click', event => {
        search_toggel();
    })
}


var mycarousel = document.querySelector(".mycarousel-inner");
if (mycarousel) {
    document.getElementById("carousel-control-prev").addEventListener("click", function () {

        mycarousel.scrollBy({
            left: -305,
            behavior: "smooth"
        })

    })

    document.getElementById("carousel-control-next").addEventListener("click", function () {

        mycarousel.scrollBy({
            left: 305,
            behavior: "smooth"
        })

    })

    function autoscroll() {
        mycarousel.scrollBy({
            left: 240,
            behavior: "smooth"
        })
        if (mycarousel.scrollLeft + mycarousel.clientWidth >= mycarousel.scrollWidth) {
            mycarousel.scrollBy({
                left: -mycarousel.scrollLeft,
                behavior: "smooth"
            })
        }
    }
}

let view = document.getElementById("container-quick-view");
let popOverly = document.getElementById("pop-overly");
let setImgSrc = document.getElementById("quick-view-img");

function QuickView(event) {
    const node = event.parentNode.parentNode.firstChild.nextSibling
    const imgsrc = node.src;
    const pname = node
    setImgSrc.src = imgsrc

    view.style.cssText = "display : block !important";
    popOverly.style.cssText = "display : block !important";

}

const quickViewClose = document.getElementById("pop-close")
if (quickViewClose) {
    quickViewClose.addEventListener("click", function () {
        view.style.cssText = "display : none !important";
        popOverly.style.cssText = "display : none !important";
    })
}

let filters = document.getElementById("filters");
let items = document.getElementById("items");

const filterToggler = document.getElementById("btn-filter-open");
if (filterToggler) {
    filterToggler.addEventListener("click", function () {
        items.style.cssText = "position : fixed ";
        filters.style.cssText = "display : block ";
        popOverly.style.cssText = "display : block ";
    })
}

const filterTogglerClose = document.getElementById("btn-filter-close")
if (filterTogglerClose) {
    filterTogglerClose.addEventListener("click", function () {

        items.style.cssText = "position : fixed ";
        filters.style.cssText = "display : none ";
        popOverly.style.cssText = "display : none ";

    })
}

const priceRange = document.getElementById("price-range");
if (priceRange) {
    priceRange.addEventListener("input", function () {
        const price_value = document.getElementById("price-value");
        price_value.textContent = this.value;
    })
}

const pagenumber = document.getElementById('grid-limit');
const sort = document.getElementById("sort")
let card = document.getElementById('card-item');

if (pagenumber) {
    pagenumber.addEventListener("change", () => {   //TODO: lazyloading 
        let currentpage = 1;

        console.log(card.childElementCount)
        // if(currentpage < pagenumber.value){

        // }

        const getalldata = getData('/public/api/loadmoreproduct?page=' + pagenumber.value + '&sort=' + sort.value)
        var data = getalldata
        data.then(response => {
            console.log("Data received:", response);  // Handle the response here
            card.innerHTML = "";

            for (const key in response) {
                var data = response[key];
                for (const value in data) {
                    const file = getfile("getcard?pid=" + data[value]['pid'], 'get');

                    file.then(response => {
                        card.innerHTML += response;
                    })
                    file.catch(error => {
                        console.error("Error:", error);  // Handle any errors here
                    })

                }
            }
        })
        data.catch(error => {
            console.error("Error:", error);  // Handle any errors here
        })
    });
}

if (sort) {
    sort.addEventListener('change', event => {
        const getalldata = getData('/public/api/loadmoreproduct?page=' + pagenumber.value + '&sort=' + sort.value)
        var data = getalldata;
        data.then(response => {
            console.log("Data received:", response);  // Handle the response here
            card.innerHTML = "";
            console.clear();

            for (const key in response) {
                var data = response[key]
                for (const value in data) {
                    const file = getfile("getcard?pid=" + data[value]['pid'], 'get');

                    file.then(response => {
                        card.innerHTML += response;
                    })
                    file.catch(error => {
                        console.error("Error:", error);  // Handle any errors here
                    })

                }
            }

        })
        data.catch(error => {
            console.error("Error:", error);  // Handle any errors here
        })

    })
}

