@extends('layouts.frontpage')
@section('title','Tentang Kami')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            {{-- Heading --}}
            <div class="text-center mb-5">
                <h2 class="fw-bold">CV Kekanan Group</h2>
                <div class="divider mx-auto my-3" style="width:60px; height:4px; background:#ffc107; border-radius:3px;"></div>
                <p class="text-muted">Mitra terpercaya dalam solusi konstruksi modern</p>
            </div>

            {{-- Konten --}}
            <div class="about-content">
                <p class="lead">
                    CV KEKANAN GROUP adalah perusahaan yang bergerak di bidang jasa konstruksi, berdiri sejak tahun 2021 di kota Pontianak, Kalimantan Barat. 
                    Kami hadir sebagai mitra terpercaya dalam menghadirkan solusi konstruksi yang efisien, inovatif, dan berkualitas tinggi untuk berbagai kebutuhan pembangunan di wilayah Kalimantan dan sekitarnya.
                </p>

                <p>
                    Dengan pengalaman yang terus berkembang, kami mengedepankan <strong>profesionalisme</strong> dan <strong>integritas</strong> dalam setiap proyek yang kami tangani. 
                    Tim kami terdiri dari tenaga ahli yang berkompeten di bidangnya, mulai dari perencanaan, pelaksanaan, hingga pengawasan proyek.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- CSS tambahan --}}
<style>
    .about-content p {
        line-height: 1.8;
        margin-bottom: 1.2rem;
        font-size: 1.1rem;
        color: #333;
    }
</style>
@endsection
