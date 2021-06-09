function getStatus() {
    fetch(`/MaintenanceMode/getStatus`)
        .then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw response;
        })
        .then(function (json) {
            if (json[0]['mode'] === '2') {
                var radiobtn = document.getElementById("disabled");
                radiobtn.checked = true;
            } else {
                var radiobtn = document.getElementById("enabled");
                radiobtn.checked = true;
            }
        });
}

function updateStatus() {
    if (document.getElementById("disabled").checked) {
        var value = 2;
    } else {
        var value = 1;
    }
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        mode: value,
        token: token,
        user: user,
    };
    fetch(
        `/MaintenanceMode/updateMaintenance`,
        {
            headers: new Headers(),
            method: "POST",
            body: JSON.stringify(payload),
        }
    ).catch((response) => {
            console.log("BAD REQUEST", response);
        });
}

function getText() {
    fetch(`/MaintenanceMode/getText`)
        .then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw response;
        })
        .then(function (json) {
            document.getElementById("message").value = json[0]['description'];
            document.getElementById("message").innerHTML = json[0]['description'];
        });
}

function updateText() {
    var value = document.getElementById("message").value;
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        description: value,
        token: token,
        user: user,
    };
    fetch(
        `/MaintenanceMode/updateText`,
        {
            headers: new Headers(),
            method: "POST",
            body: JSON.stringify(payload),
        }
    ).catch((response) => {
        console.log("BAD REQUEST", response);
    });
}
