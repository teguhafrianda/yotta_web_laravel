@extends('landingpage.layouts.master')

@section('title', 'Soil Management Monitoring')

@section('content')

<div class="container py-5">

    <!-- Chart Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-xl-8">
            <div class="card glow-card">
                <div class="card-header text-center">
                    <h4 class="mb-0">🌱 Soil Management Monitoring</h4>
                    <p class="text-muted">Tren Parameter Tanah</p>
                </div>
                <div class="card-body">
                    <canvas id="soilChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row">
        <div class="col">
            <div class="card glow-card">
                <div class="card-header">
                    <h5>Data Sensor Tanah</h5>
                    <p class="card-text text-muted">5 data rekaman terakhir</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Kelembaban Tanah (%)</th>
                                <th>Suhu Tanah (°C)</th>
                                <th>pH Tanah</th>
                                <th>EC (µS/cm)</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>soil001</td><td>62</td><td>24.5</td><td>6.8</td><td>1200</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                            <tr>
                                <td>2</td><td>soil001</td><td>58</td><td>25.2</td><td>6.5</td><td>1150</td><td>2025-06-17 19:30</td>
                                <td><span class="badge badge-warning">Waspada</span></td>
                            </tr>
                            <tr>
                                <td>3</td><td>soil001</td><td>65</td><td>23.9</td><td>7.0</td><td>1250</td><td>2025-06-17 19:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                            <tr>
                                <td>4</td><td>soil001</td><td>54</td><td>26.0</td><td>6.2</td><td>1100</td><td>2025-06-17 18:30</td>
                                <td><span class="badge badge-danger">Perlu Tindakan</span></td>
                            </tr>
                            <tr>
                                <td>5</td><td>soil001</td><td>60</td><td>24.7</td><td>6.6</td><td>1180</td><td>2025-06-17 18:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-info">📥 Unduh Laporan Tanah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('soilChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['18:00', '18:30', '19:00', '19:30', '20:00'],
        datasets: [
            {
                label: 'Kelembaban Tanah (%)',
                data: [60, 54, 65, 58, 62],
                borderColor: 'rgb(54, 162, 235)',
                tension: 0.4
            },
            {
                label: 'Suhu Tanah (°C)',
                data: [24.7, 26.0, 23.9, 25.2, 24.5],
                borderColor: 'rgb(255, 99, 132)',
                tension: 0.4
            },
            {
                label: 'pH Tanah',
                data: [6.6, 6.2, 7.0, 6.5, 6.8],
                borderColor: 'rgb(255, 206, 86)',
                tension: 0.4
            },
            {
                label: 'EC (µS/cm)',
                data: [1180, 1100, 1250, 1150, 1200],
                borderColor: 'rgb(75, 192, 192)',
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
