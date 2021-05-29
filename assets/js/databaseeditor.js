function loadPage(){
    addClass("add");
    hideElements("addDiv");
}
function displayAdd(){
    addClass("add");
    removeClass("edit");
    removeClass("remove");
    removeClass("import");
    hideElements("addDiv");
}
function displayEdit(){
    removeClass("add");
    addClass("edit");
    removeClass("remove");
    removeClass("import");
    hideElements("editDiv");
}
function displayRemove(){
    removeClass("add");
    removeClass("edit");
    addClass("remove");
    removeClass("import");
    hideElements("removeDiv");
}
function displayImport(){
    removeClass("add");
    removeClass("edit");
    removeClass("remove");
    addClass("import");
    hideElements("importDiv");
}
function addClass($id) {
    var v = document.getElementById($id);
    v.classList.add("active");
}
function removeClass($id) {
    var v = document.getElementById($id);
    v.classList.remove("active");
}
function hideElements($element){
    var add = document.getElementById("addDiv");
    var edit = document.getElementById("editDiv");
    var remove = document.getElementById("removeDiv");
    var imp = document.getElementById("importDiv");
    if($element === "addDiv"){
        add.style.display = "block";
    }else{
        add.style.display = "none";
    }
    if($element === "editDiv"){
        edit.style.display = "block";
    }else{
        edit.style.display = "none";
    }
    if($element === "removeDiv"){
        remove.style.display = "block";
    }else{
        remove.style.display = "none";
    }
    if($element === "importDiv"){
        imp.style.display = "block";
    }else{
        imp.style.display = "none";
    }
}