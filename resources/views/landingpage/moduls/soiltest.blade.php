@extends('landingpage.layouts.master')

@section('title', 'Soil Testing Monitoring')

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
                    <h4 class="mb-0">Soil Testing Monitoring</h4>
                    <p class="text-muted">🌱 Tren Parameter Uji Tanah</p>
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
                    <h5>Data Sensor Uji Tanah</h5>
                    <p class="card-text text-muted">5 data rekaman terakhir</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>pH Tanah</th>
                                <th>Kelembaban (%)</th>
                                <th>Suhu Tanah (°C)</th>
                                <th>EC (mS/cm)</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>soil001</td><td>6.5</td><td>68</td><td>26.5</td><td>1.2</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                            <tr>
                                <td>2</td><td>soil001</td><td>5.8</td><td>72</td><td>27.0</td><td>1.5</td><td>2025-06-17 19:30</td>
                                <td><span class="badge badge-warning">Perlu Perbaikan</span></td>
                            </tr>
                            <tr>
                                <td>3</td><td>soil001</td><td>6.8</td><td>65</td><td>26.0</td><td>1.0</td><td>2025-06-17 19:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                            <tr>
                                <td>4</td><td>soil001</td><td>7.2</td><td>60</td><td>28.3</td><td>2.1</td><td>2025-06-17 18:30</td>
                                <td><span class="badge badge-danger">Tidak Stabil</span></td>
                            </tr>
                            <tr>
                                <td>5</td><td>soil001</td><td>6.4</td><td>66</td><td>25.7</td><td>1.3</td><td>2025-06-17 18:00</td>
                                <td><span class="badge badge-good">Ideal</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-info">📥 Unduh Laporan Soil Testing</a>
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
                label: 'pH Tanah',
                data: [6.4, 7.2, 6.8, 5.8, 6.5],
                borderColor: 'rgb(153, 102, 255)',
                tension: 0.4
            },
            {
                label: 'Kelembaban (%)',
                data: [66, 60, 65, 72, 68],
                borderColor: 'rgb(54, 162, 235)',
                tension: 0.4
            },
            {
                label: 'Suhu Tanah (°C)',
                data: [25.7, 28.3, 26.0, 27.0, 26.5],
                borderColor: 'rgb(255, 99, 132)',
                tension: 0.4
            },
            {
                label: 'EC (mS/cm)',
                data: [1.3, 2.1, 1.0, 1.5, 1.2],
                borderColor: 'rgb(255, 206, 86)',
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
