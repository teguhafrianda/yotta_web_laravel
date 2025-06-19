@extends('landingpage.layouts.master')

@section('title', 'Greenhouse Monitoring')

@section('content')

<div class="container py-5">

    <!-- Chart Section -->
    <div class="row justify-content-center mb-4">
    <div class="col-xl-8">
        <div class="card glow-card">
            <div class="card-header text-center">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <img src="{{ asset('assets/images/IoT/logoum.png') }}" 
                         alt="Logo Universitas Negeri Malang" 
                         style="max-height: 60px;" 
                         class="me-3">
                    <div class="text-start">
                        <h4 class="mb-0">Universitas Negeri Malang</h4>
                        <small class="text-muted">Jl. Semarang No.5, Sumbersari, Lowokwaru, Malang</small>
                    </div>
                </div>
                    <h4 class="mb-0"> Monitoring Greenhouse</h4>
                    <p class="text-muted"> 🌿Trend Data Lingkungan Greenhouse</p>
                </div>
                <div class="card-body">
                    <canvas id="greenhouseChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row">
        <div class="col">
            <div class="card glow-card">
                <div class="card-header">
                    <h5>Data Sensor Greenhouse</h5>
                    <p class="card-text text-muted">5 data rekaman terakhir</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Kelembaban Tanah (%)</th>
                                <th>Kelembaban Udara (%)</th>
                                <th>Suhu Udara (°C)</th>
                                <th>Cahaya (lux)</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>gh001</td><td>65</td><td>58</td>
                                <td>27.4</td><td>11000</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Optimal</span></td>
                            </tr>
                            <tr>
                                <td>2</td><td>gh001</td><td>62</td><td>60</td>
                                <td>28.1</td><td>9500</td><td>2025-06-17 19:30</td>
                                <td><span class="badge badge-warning">Perlu Cek</span></td>
                            </tr>
                            <tr>
                                <td>3</td><td>gh001</td><td>68</td><td>55</td>
                                <td>26.9</td><td>13000</td><td>2025-06-17 19:00</td>
                                <td><span class="badge badge-good">Optimal</span></td>
                            </tr>
                            <tr>
                                <td>4</td><td>gh001</td><td>59</td><td>63</td>
                                <td>29.0</td><td>10200</td><td>2025-06-17 18:30</td>
                                <td><span class="badge badge-danger">Butuh Tindakan</span></td>
                            </tr>
                            <tr>
                                <td>5</td><td>gh001</td><td>66</td><td>59</td>
                                <td>27.0</td><td>11500</td><td>2025-06-17 18:00</td>
                                <td><span class="badge badge-good">Optimal</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-success">📥 Unduh Laporan Greenhouse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('greenhouseChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['18:00', '18:30', '19:00', '19:30', '20:00'],
        datasets: [
            {
                label: 'Suhu Udara (°C)',
                data: [27.0, 29.0, 26.9, 28.1, 27.4],
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                tension: 0.4
            },
            {
                label: 'Kelembaban Tanah (%)',
                data: [66, 59, 68, 62, 65],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                tension: 0.4
            },
            {
                label: 'Kelembaban Udara (%)',
                data: [59, 63, 55, 60, 58],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.4
            },
            {
                label: 'Cahaya (lux)',
                data: [11500, 10200, 13000, 9500, 11000],
                borderColor: 'rgba(255, 206, 86, 1)',
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
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
                beginAtZero: false
            }
        }
    }
});
</script>




@endsection
