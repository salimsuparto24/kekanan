@extends('layouts.admin')
@section('title', 'Data Absensi')

@section('content')
<h1 class="mb-4">Data Absensi</h1>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Tanggal</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($attendances as $absen)
                    <tr>
                        <td>{{ $loop->iteration + ($attendances->currentPage()-1)*$attendances->perPage() }}</td>
                        <td>{{ $absen->user->name ?? '-' }}</td>
                        <td>{{ $absen->date }}</td>
                        <td>{{ $absen->check_in ?? '-' }}</td>
                        <td>{{ $absen->check_out ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $attendances->links() }}
        </div>
    </div>
</div>
@endsection
