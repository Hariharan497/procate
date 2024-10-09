var ul = document.getElementById("menu-ul");
var menu_open = document.getElementById("menu-open");
var menu_close = document.getElementById("menu-close");
var brand_name = document.getElementById("brand-name");

menu_open.addEventListener("click",function(){
    ul.style.display="block";
    menu_close.style.display="block";
    menu_open.style.display="none";
})

menu_close.addEventListener("click",function(){
    ul.style.display="none";
    menu_open.style.display="block";
    menu_close.style.display="none";
})