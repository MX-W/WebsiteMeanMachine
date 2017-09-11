function createXMLHttpRequest() {
var xmlhttp = null; // Initialisierung mit NULL
if (window.XMLHttpRequest) {
try {
xmlhttp = new XMLHttpRequest(); // Firefox, Chrome, Opera, Safari, IE7+ ...
} catch (e) {
xmlhttp = false;
}
}
return xmlhttp;
}


function searchDB(type) {
    xhttp = createXMLHttpRequest();
    if(!xhttp)
    {
        alert("Es wurde kein XMLHttpRequest-Objekt erstellt!");
        return;
    }
    if(type === "username")
    {
        var username = document.getElementById("usernameReg").value;
        username = encodeURIComponent(username);
        var params = "q=" + username;

        xhttp.open("POST", "http://localhost/DM1/WebsiteMeanMachine/includes/functions/fetchData.php", true);

        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.setRequestHeader("Content-length", params.length);
        xhttp.setRequestHeader("Connection", "close");
        
        xhttp.onreadystatechange = function() {
            if ((xhttp.readyState == 4) && (xhttp.status == 200)) {
                alert ("Username" + xhttp.responseText);
}
        }
        xhttp.send(params);
    }
    
}

