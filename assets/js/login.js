function loadStorage() {
    if (localStorage.getItem("Check") !== null && localStorage.getItem("Check") === "1") {
        var username = localStorage.getItem("AdminUser");
        var value = localStorage.getItem("AdminToken");
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        window.history.go();
        return false;
    }
}

function validate() {
    var username = document.getElementById("name").value;
    var password = document.getElementById("pass").value;
    var check = document.getElementById("remember_me");
    if (username == "test" && password == "test") {
        if (check.checked) {
            rememberMe();
        }
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        return false;
    }
}

function randomiser() {
    return Math.random().toString(36).substr(2);
};

function createToken() {
    return randomiser() + randomiser();
};

function rememberMe() {
    var check = document.getElementById("remember_me");
    var username = document.getElementById("name").value;
    localStorage.setItem("AdminUser", username);
    localStorage.setItem("AdminToken", createToken());
    localStorage.setItem("Check", "1");
}