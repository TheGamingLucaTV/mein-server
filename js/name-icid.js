document.addEventListener('DOMContentLoaded', function () {
    // Hier kannst du eine Funktion aufrufen, um die ICIDs aus der Datenbank abzurufen
    loadICIDs();
});

function loadICIDs() {
    const icidSelect = document.getElementById('icid_select');

    // AJAX-Anfrage, um alle ICIDs aus der Datenbank abzurufen
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Hier kannst du die erhaltenen Daten in die Dropdown-Liste einfügen
            icidSelect.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', 'php/get-icids-dropdown.php', true);
    xhr.send();
}

function assignName() {
    const icidSelect = document.getElementById('icid_select');
    const nameInput = document.getElementById('name_input');

    const selectedICID = icidSelect.value;
    const assignedName = nameInput.value;

    // Hier kannst du eine Funktion aufrufen, um den Namen zur ausgewählten ICID in der Datenbank zu speichern
    saveNameToICID(selectedICID, assignedName);
}

function saveNameToICID(icid, name) {
    // AJAX-Anfrage, um den Namen zur ausgewählten ICID in der Datenbank zu speichern
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            // Du kannst hier weitere Aktionen nach dem Speichern implementieren
        }
    };

    xhr.open('POST', 'php/save-name-to-icid.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('icid=' + encodeURIComponent(icid) + '&name=' + encodeURIComponent(name));
}
