@extends('layouts.frontpage')
@section('title', 'Absensi Hari Ini')
@section('content')

<div class="container mt-5" style="max-width: 500px;">
    <h1 class="text-center mb-4">Absensi Hari Ini</h1>

    {{-- Alert sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Tanggal -->
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="text" class="form-control" value="{{ now()->translatedFormat('d F Y') }}" readonly>
            </div>

            <!-- Jam Sekarang -->
            <div class="mb-3">
                <label class="form-label">Jam Sekarang</label>
                <input type="text" class="form-control" id="clock" readonly>
            </div>

            <!-- Status Absensi -->
            <div class="mb-3">
                <label class="form-label">Check In</label>
                <input type="text" class="form-control" value="{{ $attendance->check_in ?? '-' }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Check Out</label>
                <input type="text" class="form-control" value="{{ $attendance->check_out ?? '-' }}" readonly>
            </div>

            <!-- Tombol Aksi -->
            <div class="d-flex justify-content-between">
                @if(!$attendance || !$attendance->check_in)
                    <form action="{{ route('absensi.checkin') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">✅ Check In</button>
                    </form>
                @endif

                @if($attendance && $attendance->check_in && !$attendance->check_out)
                    <form action="{{ route('absensi.checkout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">⏹️ Check Out</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Script Jam Live --}}
<script>
    function updateClock() {
        const now = new Date();
        document.getElementById('clock').value =
            now.toLocaleTimeString('id-ID', { hour12: false });
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>

@endsection
