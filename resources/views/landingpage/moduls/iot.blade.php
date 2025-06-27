<!DOCTYPE html>
<html>
<head>
    <title>Data IoT dari Google Sheet</title>
</head>
<body>
    <h2>Log Sensor IoT</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Device</th>
                <th>Suhu (°C)</th>
                <th>Kelembaban (%)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row['timestamp'] }}</td>
                <td>{{ $row['device'] }}</td>
                <td>{{ $row['temperature'] }}</td>
                <td>{{ $row['humidity'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
