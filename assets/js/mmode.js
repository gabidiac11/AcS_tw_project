
function loadMaintenance(){
    var request = new XMLHttpRequest();
    request.open("GET", "/maintenance");
    request.onreadystatechange = function() {
        if(this.readyState === 4 && this.status === 200) {
            document.getElementById("title").innerHTML = this.responseText;
        }
    };
    request.send();


}
