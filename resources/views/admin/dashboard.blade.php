@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Artikel</h5>
                <p class="card-text fs-3">{{ $totalArticles }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Portofolio</h5>
                <p class="card-text fs-3">{{ $totalPortfolios }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Total User</h5>
                <p class="card-text fs-3">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>
      <div class="col-md-3">
        <div class="card text-white bg-info mb-3">
            <div class="card-body">
                <h5 class="card-title">Absensi Hari Ini</h5>
                <p class="card-text fs-3">{{ $totalAttendanceToday }}</p>
                <a href="{{ route('admin.attendances.index') }}" class="btn btn-light btn-sm mt-2">
                    Lihat Detail
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
