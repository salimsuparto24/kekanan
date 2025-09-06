@extends('layouts.frontpage')
@section('title','Hubungi Kami')
@section('content')

<section class="page-section" id="contact" style="background-color: #ffffff;">
    <div class="container py-5">
        <!-- Judul Section -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">HUBUNGI KAMI</h1>
        <p class="text-muted">Silakan hubungi kami melalui alamat dan informasi di bawah ini.

</p>
    </div>
        <div class="row">
            <!-- Info Perusahaan -->
            <div class="col-md-6 mb-4">
                <div class="p-4 shadow-sm rounded">
                    <h4 class="mb-3">Informasi Perusahaan</h4>
                    <ul class="list-unstyled text-muted">
                        <li><strong>Nama Perusahaan:</strong> KEKANAN GROUP</li>
                        <li><strong>Alamat Lengkap:</strong> Jalan Kebangkitan Nasional, Komplek D’Kasio, Desa/Kelurahan Batulayang, Kec. Pontianak Utara, Kota Pontianak, Provinsi Kalimantan Barat.</li>
                        <!-- Tambahkan kontak lain jika ada, misal telepon/email -->
                    </ul>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-md-6 mb-4">
                <div class="p-4 shadow-sm rounded">
                    <h4 class="mb-3">Lokasi Kami</h4>
                    <div class="ratio ratio-16x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.545838959528!2d109.33955561517376!3d-0.002345835543679295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31f5ab0f6c7c6a55%3A0x123456789abcdef!2sKEKANAN%20GROUP!5e0!3m2!1sid!2sid!4v1693955400000!5m2!1sid!2sid" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
