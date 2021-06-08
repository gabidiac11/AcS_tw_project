function verifier() {
    var username = localStorage.getItem("AdminUser");
    var value = localStorage.getItem("AdminToken");
    if (1> 0) {

    } else {
        sessionStorage.removeItem("AdminUser");
        sessionStorage.removeItem("AdminToken");
        window.history.pushState('Admin', 'Title', "/Admin");
    }
}