const form = document.querySelector('form');
const username = document.querySelector('#username');
const password = document.querySelector('#password');
const loginBtn = document.querySelector('#login-btn');

var currentModule = "home";

function showHideModules() {
    var home = document.getElementById("home");
    var login = document.getElementById("login");
    var profile = document.getElementById("profile");

    if (currentModule == "home") {
        home.style.display = "block";
        login.style.display = "block";
        profile.style.display = "none";
    }

    if (currentModule == "login") {
        home.style.display = "block";
        login.style.display = "block";
        profile.style.display = "none";
    }

    if (currentModule == "profile") {
        home.style.display = "none";
        login.style.display = "none";
        profile.style.display = "block";
    }
}

form.addEventListener('submit', function(e) {
	e.preventDefault();
	if (username.value === 'admin' && password.value === 'admin') {
        currentModule = "profile";
        showHideModules();
	} else {
        alert("Incorrect username or password, please try again.");
		showHideModules();
	}
});