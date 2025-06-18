@extends('landingpage.layouts.master')

@section('title', 'IoT Air Quality')

@section('content')

<div class="container py-5">

    <!-- Chart Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-xl-8">
            <div class="card glow-card">
                <div class="card-header text-center">
                    <h4 class="mb-0">📈 Monitoring PM2.5 & CO₂</h4>
                    <p class="text-muted">Trend Data Terbaru</p>
                </div>
                <div class="card-body">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row">
        <div class="col">
            <div class="card glow-card">
                <div class="card-header">
                    <h5>Data Sensor Terkini</h5>
                    <p class="card-text text-muted">Contoh 5 rekaman dari perangkat IoT</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>ID</th><th>Device</th><th>PM2.5</th><th>CO₂</th>
                                <th>Suhu (°C)</th><th>Kelembaban (%)</th><th>Waktu</th><th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>dev001</td><td>28.5</td><td>420</td>
                                <td>26.5</td><td>60</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Good</span></td>
                            </tr>
                            <tr>
                                <td>2</td><td>dev001</td><td>48.2</td><td>430</td>
                                <td>27.1</td><td>58</td><td>2025-06-17 19:30</td>
                                <td><span class="badge badge-fair">Fair</span></td>
                            </tr>
                            <tr>
                                <td>3</td><td>dev001</td><td>75.0</td><td>450</td>
                                <td>28.3</td><td>55</td><td>2025-06-17 19:00</td>
                                <td><span class="badge badge-fair">Fair</span></td>
                            </tr>
                            <tr>
                                <td>4</td><td>dev001</td><td>90.3</td><td>470</td>
                                <td>29.1</td><td>50</td><td>2025-06-17 18:30</td>
                                <td><span class="badge badge-poor">Poor</span></td>
                            </tr>
                            <tr>
                                <td>5</td><td>dev001</td><td>34.6</td><td>415</td>
                                <td>26.7</td><td>61</td><td>2025-06-17 18:00</td>
                                <td><span class="badge badge-good">Good</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-primary">📥 Unduh Data Bulanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('lineChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['18:00', '18:30', '19:00', '19:30', '20:00'],
            datasets: [
                {
                    label: 'PM2.5 (µg/m³)',
                    data: [34.6, 90.3, 75.0, 48.2, 28.5],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    tension: 0.4
                },
                {
                    label: 'CO₂ (ppm)',
                    data: [415, 470, 450, 430, 420],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection