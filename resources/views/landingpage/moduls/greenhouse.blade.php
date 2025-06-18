@extends('landingpage.layouts.master')

@section('title', 'Greenhouse Monitoring')

@section('content')

<div class="container py-5">

    <!-- Chart Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-xl-8">
            <div class="card glow-card">
                <div class="card-header text-center">
                    <h4 class="mb-0">🌿 Monitoring Greenhouse</h4>
                    <p class="text-muted">Trend Data Lingkungan Greenhouse</p>
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


@endsection
