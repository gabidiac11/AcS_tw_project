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
        var value = 0;
    } else {
        var value = 1;
    }
    var payload = {
        mode: value,
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

}

function updateText() {
}
