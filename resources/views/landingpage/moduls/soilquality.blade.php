@extends('landingpage.layouts.master')

@section('title', 'Soil Quality Monitoring')

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
                    <h4 class="mb-0"> Monitoring Kualitas Tanah</h4>
                    <p class="text-muted">🌱 Pemantauan parameter lingkungan dan tanah</p>
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
                    <h5>Data Sensor Kualitas Tanah & Lingkungan</h5>
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
                                <th>NPK (ppm)</th>
                                <th>Salinitas (µS/cm)</th>
                                <th>Suhu Lingkungan (°C)</th>
                                <th>Kelembaban Udara (%)</th>
                                <th>NO₂ (ppm)</th>
                                <th>VO (ppm)</th>
                                <th>VOC (ppm)</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td><td>soil001</td><td>45</td><td>25.3</td><td>6.8</td><td>320</td><td>1.2</td><td>27.5</td><td>55</td><td>0.02</td><td>0.03</td><td>0.05</td><td>2025-06-17 20:00</td>
                                <td><span class="badge badge-good">Optimal</span></td>
                            </tr>
                            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-success">📥 Unduh Data Kualitas Tanah</a>
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
                data: [40, 42, 43, 44, 45],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.4
            },
            {
                label: 'pH Tanah',
                data: [6.5, 6.7, 6.6, 6.8, 6.8],
                borderColor: 'rgb(153, 102, 255)',
                tension: 0.4
            },
            {
                label: 'Suhu Tanah (°C)',
                data: [24.5, 25.0, 25.1, 25.2, 25.3],
                borderColor: 'rgb(255, 159, 64)',
                tension: 0.4
            },
            {
                label: 'NPK (ppm)',
                data: [300, 310, 315, 318, 320],
                borderColor: 'rgb(255, 205, 86)',
                tension: 0.4
            },
            {
                label: 'Salinitas (µS/cm)',
                data: [1.1, 1.15, 1.18, 1.2, 1.2],
                borderColor: 'rgb(201, 203, 207)',
                tension: 0.4
            },
            {
                label: 'Suhu Lingkungan (°C)',
                data: [27.0, 27.2, 27.3, 27.4, 27.5],
                borderColor: 'rgb(255, 99, 132)',
                tension: 0.4
            },
            {
                label: 'Kelembaban Udara (%)',
                data: [50, 52, 53, 54, 55],
                borderColor: 'rgb(54, 162, 235)',
                tension: 0.4
            },
            {
                label: 'NO₂ (ppm)',
                data: [0.03, 0.03, 0.025, 0.02, 0.02],
                borderColor: 'rgb(255, 99, 132)',
                borderDash: [5, 5],
                tension: 0.4
            },
            {
                label: 'VO (ppm)',
                data: [0.04, 0.035, 0.032, 0.031, 0.03],
                borderColor: 'rgb(153, 102, 255)',
                borderDash: [5, 5],
                tension: 0.4
            },
            {
                label: 'VOC (ppm)',
                data: [0.06, 0.055, 0.05, 0.045, 0.05],
                borderColor: 'rgb(75, 192, 192)',
                borderDash: [5, 5],
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
