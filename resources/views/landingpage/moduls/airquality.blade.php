@extends('landingpage.layouts.master')

@section('title', 'IoT Air Quality')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-xl-8">
            <div class="card glow-card">
                <div class="card-header text-center">
                    <h4 class="mb-0">📈 Monitoring Kualitas Udara</h4>
                    <p class="text-muted">Data dari perangkat IoT (Google Sheets)</p>
                </div>
                <div class="card-body">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Bar Section -->
    <div class="rbt-progressbar-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row justify-content-center" id="iot-progress-display">
                <div class="col-12 text-center">
                    <p>📡 Memuat data sensor terakhir...</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
function fetchIotData(apiUrl) {
    $.getJSON(apiUrl, function(data) {
        if (!data || data.length === 0) return;

        const last = data[data.length - 1];
        const suhu = parseFloat(last.temperature) || 0;
        const kelembaban = parseFloat(last.humidity) || 0;

        const html = `
    <!-- Suhu -->
    <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="radial-progress-single text-center">
            <div class="radial-progress" data-percent="${suhu}" data-bar-color="#00BFA5" data-track-color="#ECECEC">
                <canvas></canvas>
                <div class="circle-text">
                    <h4 class="title">Suhu</h4>
                    <span class="count">${suhu}</span><span class="unit">°C</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Kelembaban -->
    <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="radial-progress-single text-center">
            <div class="radial-progress" data-percent="${kelembaban}" data-bar-color="#FFA000" data-track-color="#ECECEC">
                <canvas></canvas>
                <div class="circle-text">
                    <h4 class="title">Kelembaban</h4>
                    <span class="count">${kelembaban}</span><span class="unit">%</span>
                </div>
            </div>
        </div>
    </div>
`;


        $('#iot-progress-display').html(html);

        // Init EasyPieChart
        $('.radial-progress').each(function () {
            const $this = $(this);
            const value = parseFloat($this.data('percent')) || 0;
            const barColor = $this.data('bar-color') || '#059DFF';
            const trackColor = $this.data('track-color') || '#F6F6F6';

            const canvas = $('<canvas></canvas>').get(0);
            canvas.width = 120;
            canvas.height = 120;

            // Simpan text
            const $text = $this.find('.circle-text');

            // Masukkan canvas ke dalam .radial-progress
            $this.html(canvas).append($text);

            // Init chart
            new EasyPieChart(canvas, {
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'round',
                lineWidth: 10,
                size: 120,
                animate: 1000
            }).update(value);
        });
    });
}

const apiUrl = @json(route('airquality.data'));
fetchIotData(apiUrl);
setInterval(() => fetchIotData(apiUrl), 10000);
</script>

<style>
    .radial-progress {
  position: relative;      /* Menjadi acuan untuk positioning anak-anak */
  width: 140px;
  height: 140px;
}

.radial-progress canvas {
  position: absolute;
  top: 0;
  left: 0;
}

..circle-text {
  position: absolute;      /* Supaya bisa ditempatkan bebas dalam parent */
  top: 50%;                /* Pusat vertikal */
  left: 50%;               /* Pusat horizontal */
  transform: translate(-50%, -50%); /* Benar-benar center */
}

.circle-text .count {
  font-size: 1.5rem;
  font-weight: bold;
  color: #555;
}

.circle-text .unit {
  font-size: 1rem;
  color: #777;
  margin-left: 2px;
}

.radial-progress-single h4.title {
  font-weight: bold;
  font-size: 1rem;
  margin-bottom: 0.5rem;
  color: #111;
}

</style>

@endpush
