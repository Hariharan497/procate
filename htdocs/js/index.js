
function mymedia() {
    var media = window.matchMedia("(max-width: 768px)");
    var nav = document.getElementById("navbar").classList;
    let linkSearch = document.getElementById("link-Search").classList;
    let linkCollection = document.getElementById("link-Collection").classList;
    let collectionItem = document.getElementById("colletionItem").classList;
    if (media.matches) {
        if (nav.contains("offcanvas")) {
            nav.remove("offcanvas");
        }

        if (nav.contains("nav-underline")) {
            nav.remove("nav-underline");
        }

        if (nav.contains("nav-justified")) {
            nav.remove("nav-justified");
        }
        if(collectionItem.contains("navbar-nav")){
            collectionItem.replace("navbar-nav","dropdown-menu")
        }
        linkCollection.add("dropdown-toggle")

    } else {
        nav.add("offcanvas");
        nav.add("nav-underline");
        nav.add("nav-justified");
        linkCollection.remove("dropdown-toggle");
        if(collectionItem.contains("dropdown-menu")){
            collectionItem.replace("dropdown-menu","navbar-nav")
        }
    }
}

mymedia();
