
// DISPLAY LOGIN FORM
// --------------------------------------------
var loginbtn = document.querySelector("#loginBtn");
var form = document.querySelector(".form_container");
var overlay = document.querySelector(".overlay");

loginbtn.addEventListener('click', displayLoginForm);
overlay.addEventListener('click', closeLoginForm);

function displayLoginForm(){
	overlay.style.display = "block";
	form.style.display = "block";
}

function closeLoginForm(){
	overlay.style.display = "none";
	form.style.display = "none";

}
