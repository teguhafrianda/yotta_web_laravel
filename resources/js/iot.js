function fetchIotData(apiUrl) {
    $.getJSON(apiUrl, function (data) {
        let rows = "";

        data.forEach(function (row, index) {
            const temp = isNaN(row.temperature) ? "-" : row.temperature;
            const humidity = row.humidity ?? "-";
            const timestamp = row.timestamp
                ? new Date(row.timestamp).toLocaleString("id-ID")
                : "-";

            rows += `
                <tr>
                    <td>${row.id ?? "-"}</td>
                    <td>${row.device ?? "-"}</td>
                    <td>${temp}</td>
                    <td>${humidity}</td>
                    <td>${timestamp}</td>
                </tr>
            `;
        });

        $("#iot-data-body").html(rows);
    });
}
