document.addEventListener('DOMContentLoaded', function () {
    // Hier kannst du eine Funktion aufrufen, um die ICIDs aus der Datenbank abzurufen
    loadICIDsForDeletion();
});

function loadICIDsForDeletion() {
    const icidDeleteSelect = document.getElementById('icid_delete_select');

    // AJAX-Anfrage, um alle ICIDs aus der Datenbank abzurufen
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Hier kannst du die erhaltenen Daten in die Dropdown-Liste einfügen
            icidDeleteSelect.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', 'php/get-icids-dropdown.php', true);
    xhr.send();
}

function deleteICID() {
    const icidDeleteSelect = document.getElementById('icid_delete_select');
    const selectedICID = icidDeleteSelect.value;

    // Hier kannst du eine Funktion aufrufen, um die ausgewählte ICID in der Datenbank zu löschen
    deleteICIDFromDatabase(selectedICID);
}

function deleteICIDFromDatabase(icid) {
    // AJAX-Anfrage, um die ausgewählte ICID in der Datenbank zu löschen
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            // Du kannst hier weitere Aktionen nach dem Löschen implementieren
        }
    };

    xhr.open('GET', 'php/delete-icid.php?id=' + encodeURIComponent(icid), true);
    xhr.send();
}
