document.addEventListener('DOMContentLoaded', function () {
    const icidInput = document.getElementById('icid_number');

    icidInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            addICID(icidInput.value);
        }
    });

    function addICID(icidNumber) {
        // Hier kannst du die Logik für das Hinzufügen der ICID implementieren
        // Zum Beispiel: AJAX-Anfrage an den Server, um die ICID zu speichern
        const xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                // Du kannst hier weitere Aktionen nach dem Speichern implementieren
            }
        };

        xhr.open('POST', 'php/add-icid.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('icid_number=' + encodeURIComponent(icidNumber));
    }
});
