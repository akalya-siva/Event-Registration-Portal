console.log("Event Registration Portal Loaded");

const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function(event) {

        event.preventDefault();

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (username === "admin" && password === "admin123") {

            window.location.href = "dashboard.html";

        } else {

            document.getElementById("loginMessage").innerHTML =
            "❌ Invalid Username or Password";

            document.getElementById("loginMessage").style.color = "red";
        }

    });
}