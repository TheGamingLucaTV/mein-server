document.addEventListener('DOMContentLoaded', function () {
    // Hier kannst du eine Funktion aufrufen, um die ICIDs aus der Datenbank abzurufen
    loadICIDs();
});

function loadICIDs() {
    const icidTableContainer = document.getElementById('icidTableContainer');

    // AJAX-Anfrage, um alle ICIDs aus der Datenbank abzurufen
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Hier kannst du die erhaltenen Daten in die Tabelle einfügen
            const icids = JSON.parse(xhr.responseText);
            displayICIDs(icidTableContainer, icids);
        }
    };

    xhr.open('GET', 'php/get-icids.php', true);
    xhr.send();
}

function displayICIDs(container, icids) {
    // Hier kannst du die erhaltenen ICIDs in die Tabelle einfügen
    let tableHtml = '<table border="1"><tr><th>ID</th><th>ICID-Nummer</th></tr>';

    icids.forEach(function (icid) {
        tableHtml += '<tr><td>' + icid.id + '</td><td>' + icid.icid_number + '</td></tr>';
    });

    tableHtml += '</table>';
    container.innerHTML = tableHtml;
}
