function addToArray() {
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        user: user,
        token: token,
    };
    fetch(
        `/adminmanager/getAccounts`,
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
            document.getElementById('accNames').innerText = null;
            document.getElementById('editNames').innerText = null;
            var dropdown = document.getElementById("accNames");
            var dropdown2 = document.getElementById("editNames");
            for (var i = 0; i < json['acc'].length; ++i) {
                dropdown[dropdown.length] = new Option(json['acc'][i]['name'], json['acc'][i]['name']);
                dropdown2[dropdown.length] = new Option(json['acc'][i]['name'], json['acc'][i]['name']);
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
}

function addAccount() {
    //<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    //<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        user: user,
        token: token,
        name: document.getElementById('addName').value,
        pass: document.getElementById('addPassword').value,
    };
    fetch(
        `/adminmanager/addAccount`,
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
                document.getElementById("message").innerHTML = "Account not added";
            } else {
                document.getElementById("message").innerHTML = "Account added!";
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
    addToArray();
}

function editAccount() {

    addToArray()
}

function removeAccount() {
        //<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
        //<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        var e = document.getElementById("accNames");
        var strUser = e.options[e.selectedIndex].value;
        var user = localStorage.getItem("AdminUser");
        var token = localStorage.getItem("AdminToken");
        var payload = {
            user: user,
            token: token,
            name: strUser,
        };
        fetch(
            `/adminmanager/removeAccount`,
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
                    document.getElementById("message").innerHTML = "Account not found!";
                } else {
                    document.getElementById("message").innerHTML = "Account removed!";
                }
            })
            .catch((response) => {
                console.log("BAD REQUEST", response);
            });
        addToArray();
}