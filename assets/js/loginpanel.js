async function verifier($data) {
    const username = localStorage.getItem("AdminUser");
    const token = localStorage.getItem("AdminToken");
    var payload = {
        user: username,
        token: token
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
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
}

function removeLogin() {
    sessionStorage.removeItem("AdminUser");
    sessionStorage.removeItem("AdminToken");
    window.history.pushState('Admin', 'Title', "/Admin");
    window.history.go();
}