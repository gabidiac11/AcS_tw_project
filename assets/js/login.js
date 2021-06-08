function loadStorage() {
    if (localStorage.getItem("Check") !== null && localStorage.getItem("Check") === "1") {
        var username = localStorage.getItem("AdminUser");
        var token = localStorage.getItem("AdminToken");
        var payload = {
            user: username,
            token: token,
        };
        fetch(
            `/adminpanel/verify`,
            {
                headers: new Headers(),
                method: "POST",
                body: JSON.stringify(payload),
            }
        )
            .then((response) => {
                if (response.ok) {
                    return response.json();
                }
                throw response;
            })
            .then(function (json) {
                if (json['success'] != true) {
                    removeLogin();
                } else {
                    window.history.pushState('Admin', 'Title', "/AdminPanel");
                    window.history.go();
                }
            })
            .catch((response) => {
                console.log("BAD REQUEST", response);
            });
    }
}

function validate($data) {
    if ($data === 1) {
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        window.history.go();
    }
}

function randomizer() {
    return Math.random().toString(36).substr(2);
};

function createToken() {
    return randomizer() + randomizer();
};

function setToken() {
    var token = createToken()
    document.getElementById("tkn").value = token;
    var username = document.getElementById("name").value
    localStorage.setItem("AdminUser", username);
    localStorage.setItem("AdminToken", token);
}

function rememberMe() {
    var check = document.getElementById("remember_me");
    if (check.checked) {
        localStorage.setItem("Check", "1");
    } else {
        localStorage.setItem("Check", "0");
    }
}
function removeLogin() {
    sessionStorage.removeItem("AdminUser");
    sessionStorage.removeItem("AdminToken");
    window.history.pushState('Admin', 'Title', "/Admin");
    window.history.go();
}