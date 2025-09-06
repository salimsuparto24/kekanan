@extends('layouts.frontpage')
@section('title','Layanan Kami')
@section('content')


    <div class="container mt-5 pt-5">
        <!-- Judul Section -->
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Layanan Kami</h2>
        </div>

        <!-- Layanan -->
        <div class="row text-center">
            
            <!-- Renovasi dan Rekonstruksi -->
            <div class="col-md-4 mb-4">
                <span class="fa-stack fa-4x mb-3">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-home fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Renovasi dan Rekonstruksi</h4>
                <p class="text-muted">
                    Kami menyediakan layanan renovasi dan rekonstruksi untuk berbagai jenis bangunan, mulai dari rumah tinggal, gedung perkantoran, hingga fasilitas umum. Proses dilakukan dengan pendekatan yang efisien dan memperhatikan struktur bangunan awal, agar hasil akhir tetap kuat, estetis, dan sesuai dengan standar keselamatan konstruksi.
                </p>
            </div>

            <!-- Manajemen Proyek -->
            <div class="col-md-4 mb-4">
                <span class="fa-stack fa-4x mb-3">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-project-diagram fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Manajemen Proyek</h4>
                <p class="text-muted">
                    CV KEKANAN GROUP menghadirkan layanan manajemen proyek yang terintegrasi, mencakup perencanaan, pelaksanaan, pengawasan, dan evaluasi. Dengan sistem kerja yang profesional, kami memastikan setiap proyek berjalan tepat waktu, sesuai anggaran, dan mencapai hasil maksimal sesuai dengan kebutuhan klien.
                </p>
            </div>

            <!-- Bangunan dan Material -->
            <div class="col-md-4 mb-4">
                <span class="fa-stack fa-4x mb-3">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-building fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Bangunan dan Material</h4>
                <p class="text-muted">
                    Kami mengerjakan pembangunan baru dengan pemilihan material berkualitas dan teknis pelaksanaan yang presisi. Dari tahap pondasi hingga finishing, setiap proses dilakukan oleh tenaga ahli berpengalaman untuk memastikan hasil bangunan yang kokoh, fungsional, dan tahan lama.
                </p>
            </div>

        </div>
    </div>


@endsection
