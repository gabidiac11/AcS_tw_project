function loadStorage() {
    if (localStorage.getItem("Check") !== null && localStorage.getItem("Check") === "1") {
        let username = localStorage.getItem("AdminUser");
        let value = localStorage.getItem("AdminToken");
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        window.history.go();
        return false;
    }
}

function validate($data) {
    if ($data === 1) {
        let check = document.getElementById("remember_me");
        if (localStorage.getItem("Check") !== null && localStorage.getItem("Check") === "1") {
            rememberMeAfter();
        }
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        window.history.go();
    }
}

function randomiser() {
    return Math.random().toString(36).substr(2);
};

function createToken() {
    return randomiser() + randomiser();
};
function rememberMe(){
    let check = document.getElementById("remember_me");
    if(check.checked){
        localStorage.setItem("Check", "1");
    }else{
        localStorage.setItem("Check", "0");
    }
}
function rememberMeAfter() {
    let username = document.getElementById("name").value;
    let token = createToken();
    localStorage.setItem("AdminUser", username);
    localStorage.setItem("AdminToken", token);
}