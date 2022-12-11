let loginbutton = document.getElementById("loginbutton");
let logoutbutton = document.getElementById("logoutbutton");
let submit = document.getElementById("submited");


submit.addEventListener("click",function(){
    loginbutton.style.display="none";
    logoutbutton.style.display="block";
})

logoutbutoon.addEventListener("click",function(){
    loginbutton.style.display="block";
    logoutbutton.style.display="none";
})