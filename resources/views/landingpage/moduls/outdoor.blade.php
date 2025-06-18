@extends('landingpage.layouts.master')

@section('title', 'Solar Dome Monitoring')

@section('content')

<div class="container py-5">

    <!-- Chart Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-xl-8">
            <div class="card glow-card">
                <div class="card-header text-center">
                    <h4 class="mb-0">🔆 Solar Dome Monitoring</h4>
                    <p class="text-muted">Tren Parameter Lingkungan Solar Dome</p>
                </div>
                <div class="card-body">
                    <canvas id="solarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row">
        <div class="col">
            <div class="card glow-card">
                <div class="card-header">
                    <h5>Data Sensor Solar Dome</h5>
                    <p class="card-text text-muted">5 data rekaman terakhir</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Kelembaban Udara (%)</th>
                                <th>Cahaya (lux)</th>
                                <th>Suhu (°C)</th>
                                <th>Tekanan Udara (hPa)</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>sd001</td><td>58</td><td>11500</td><td>27.3</td><td>1012</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Stabil</span></td>
                            </tr>
                            <tr>
                                <td>2</td><td>sd001</td><td>60</td><td>9800</td><td>28.1</td><td>1010</td><td>2025-06-17 19:30</td>
                                <td><span class="badge badge-warning">Waspada</span></td>
                            </tr>
                            <tr>
                                <td>3</td><td>sd001</td><td>57</td><td>13000</td><td>26.8</td><td>1013</td><td>2025-06-17 19:00</td>
                                <td><span class="badge badge-good">Stabil</span></td>
                            </tr>
                            <tr>
                                <td>4</td><td>sd001</td><td>63</td><td>9200</td><td>29.0</td><td>1008</td><td>2025-06-17 18:30</td>
                                <td><span class="badge badge-danger">Perlu Tindakan</span></td>
                            </tr>
                            <tr>
                                <td>5</td><td>sd001</td><td>59</td><td>11200</td><td>27.0</td><td>1011</td><td>2025-06-17 18:00</td>
                                <td><span class="badge badge-good">Stabil</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-warning">📥 Unduh Data Solar Dome</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('solarChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['18:00', '18:30', '19:00', '19:30', '20:00'],
        datasets: [
            {
                label: 'Kelembaban Udara (%)',
                data: [59, 63, 57, 60, 58],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.4
            },
            {
                label: 'Cahaya (lux)',
                data: [11200, 9200, 13000, 9800, 11500],
                borderColor: 'rgb(255, 206, 86)',
                tension: 0.4
            },
            {
                label: 'Suhu Udara (°C)',
                data: [27.0, 29.0, 26.8, 28.1, 27.3],
                borderColor: 'rgb(255, 99, 132)',
                tension: 0.4
            },
            {
                label: 'Tekanan Udara (hPa)',
                data: [1011, 1008, 1013, 1010, 1012],
                borderColor: 'rgb(54, 162, 235)',
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' }
        }
    }
});
</script>
@endpush

@endsection
