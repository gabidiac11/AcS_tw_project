function loadStorage() {
    if (localStorage.getItem("Check") !== null && localStorage.getItem("Check") === "1") {
        var username = document.getElementById("name");
        var password = document.getElementById("pass");
        var check = document.getElementById("remember_me");
        document.getElementById("name").innerHTML= "text";
        username.value = localStorage.getItem("AdminUser");
        password.value = localStorage.getItem("AdminPass");
        document.getElementById("remember_me").checked = true;
    }
}
function validate(){
    var username = document.getElementById("name").value;
    var password = document.getElementById("pass").value;
    if ( username == "test" && password == "test"){
        rememberMe();
        sessionStorage.setItem("TokenAdminPanel", "123456");
        window.history.pushState('Admin', 'Title', "/AdminPanel");
        return false;
    }
}
function rememberMe(){
    var check = document.getElementById("remember_me");
    if(check.checked){
        var username = document.getElementById("name").value;
        var password = document.getElementById("pass").value;
        localStorage.setItem("AdminUser", username);
        localStorage.setItem("AdminPass", password);
        localStorage.setItem("Check", "1");
    }else{
        localStorage.setItem("Check", "0");
    }
}