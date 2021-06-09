function loadPage() {
    displayAdd();
}

function displayAdd() {
    addClass("add");
    removeClass("edit");
    removeClass("remove");
    removeClass("import");
    hideElements("addDiv");
}

function displayEdit() {
    removeClass("add");
    addClass("edit");
    removeClass("remove");
    removeClass("import");
    hideElements("editDiv");
}

function displayRemove() {
    removeClass("add");
    removeClass("edit");
    addClass("remove");
    removeClass("import");
    hideElements("removeDiv");
}

function displayImport() {
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
    if (v) {

        v.classList.remove("active");
    }
}

function hideElements($element) {
    var add = document.getElementById("addDiv");
    var edit = document.getElementById("editDiv");
    var remove = document.getElementById("removeDiv");
    var imp = document.getElementById("importDiv");
    if ($element === "addDiv") {
        add.style.display = "block";
    } else {
        add.style.display = "none";
    }
    if ($element === "editDiv") {
        edit.style.display = "block";
    } else {
        edit.style.display = "none";
    }
    if ($element === "removeDiv") {
        remove.style.display = "block";
    } else {
        remove.style.display = "none";
    }
    if ($element === "importDiv") {
        imp.style.display = "block";
    } else {
        imp.style.display = "none";
    }
}

function addElementInDatabase() {
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        user: user,
        token: token,
        ids: document.getElementById("idDb").value,
        severity: document.getElementById("severityDb").value,
        timestart: document.getElementById("timeStartDb").value,
        timeend: document.getElementById("timeEndDb").value,
        latstart: document.getElementById("latitudeStartDb").value,
        latend: document.getElementById("latitudeStartDb").value,
        longstart: document.getElementById("longitudeStartDb").value,
        longend: document.getElementById("longitudeEndDb").value,
        distance: document.getElementById("distanceDb").value,
        description: document.getElementById("descriptionDb").value,
        street: document.getElementById("streetDb").value,
        number: document.getElementById("numberDb").value,
        city: document.getElementById("cityDb").value,
        state: document.getElementById("stateDb").value,
        zipcode: document.getElementById("zipCodeDb").value,
        temperature: document.getElementById("temperatureDb").value,
        windchill: document.getElementById("windChillDb").value,
        humidity: document.getElementById("humidityDb").value,
        pressure: document.getElementById("pressureDb").value,
        visibility: document.getElementById("visibilityDb").value,
        winddirection: document.getElementById("windDirectionDb").value,
        precipitation: document.getElementById("precipitationDb").value,
        generalcondition: document.getElementById("generalConditionDb").value,
        amenity: document.getElementById("amenityDb").checked,
        bump: document.getElementById("bumpDb").checked,
        crossing: document.getElementById("crossingDb").checked,
        giveaway: document.getElementById("giveAwayDb").checked,
        junction: document.getElementById("junctionDb").checked,
        noexit: document.getElementById("noExitDb").checked,
        railway: document.getElementById("railwayDb").checked,
        roundabout: document.getElementById("roundAboutDb").checked,
        station: document.getElementById("stationDb").checked,
        stop: document.getElementById("stopDb").checked,
        trafficcalming: document.getElementById("trafficCalmingDb").checked,
        trafficsignal: document.getElementById("trafficSignalDb").checked,
        trafficloop: document.getElementById("trafficLoopDb").checked,
    };
    fetch(
        `/databaseeditor/addElem`,
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
            console.log(json);
            if (json['success'] != true) {
                document.getElementById("result").innerHTML = "Element not added! Please review your submission!";
            } else {
                document.getElementById("result").innerHTML = "Added";
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
}

function removeElementfromDatabase() {
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        user: user,
        token: token,
        id: document.getElementById("rem").value,
    };
    fetch(
        `/databaseeditor/removeElem`,
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
            console.log(json);
            if (json['success'] != true) {
                document.getElementById("result1").innerHTML = "ID not found!!";
            } else {
                document.getElementById("result1").innerHTML = "Element removed!";
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
}
function removeElementRangeFromDatabase(){
    var user = localStorage.getItem("AdminUser");
    var token = localStorage.getItem("AdminToken");
    var payload = {
        user: user,
        token: token,
        id1: document.getElementById("rem1").value,
        id2: document.getElementById("rem2").value,
    };
    fetch(
        `/databaseeditor/removeRangeElem`,
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
            console.log(json);
            if (json['success'] != true) {
                document.getElementById("result2").innerHTML = "Can't find any elements between these values!";
            } else {
                document.getElementById("result2").innerHTML = "Elements removed!";
            }
        })
        .catch((response) => {
            console.log("BAD REQUEST", response);
        });
}