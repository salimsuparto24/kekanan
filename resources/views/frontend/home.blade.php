@extends('layouts.frontpage')
@section("content")
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang</div>
                <div class="masthead-heading text-uppercase">Kontraktor Terbaik Pontianak</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Selengkapnya</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan Kami</h2>

                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Renovasi dan Rekonstruksi</h4>
                        <p class="text-muted">Kami menyediakan layanan renovasi dan rekonstruksi untuk berbagai jenis bangunan, mulai dari rumah tinggal, gedung perkantoran, hingga fasilitas umum. Proses dilakukan dengan pendekatan yang efisien dan memperhatikan struktur bangunan awal, agar hasil akhir tetap kuat, estetis, dan sesuai dengan standar keselamatan konstruksi.

</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manajemen Proyek</h4>
                        <p class="text-muted">CV KEKANAN GROUP menghadirkan layanan manajemen proyek yang terintegrasi, mencakup perencanaan, pelaksanaan, pengawasan, dan evaluasi. Dengan sistem kerja yang profesional, kami memastikan setiap proyek berjalan tepat waktu, sesuai anggaran, dan mencapai hasil maksimal sesuai dengan kebutuhan klien.

</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Bangunan dan Material</h4>
                        <p class="text-muted">Kami mengerjakan pembangunan baru dengan pemilihan material berkualitas dan teknis pelaksanaan yang presisi. Dari tahap pondasi hingga finishing, setiap proses dilakukan oleh tenaga ahli berpengalaman untuk memastikan hasil bangunan yang kokoh, fungsional, dan tahan lama.

</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container mt-5 pt-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portofolio Kami</h2>
                </div>
                <div class="row">
        @foreach ($portfolios as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $item->image) }}" 
                         class="card-img-top" 
                         alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->description, 80) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('portfolio') }}" class="btn btn-warning text-dark">Lihat Semua</a>
    </div>
            </div>
        </section>
        <!-- About-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>CV Kekanan Group</h2>
                        <p class="lead">CV KEKANAN GROUP adalah perusahaan yang bergerak di bidang jasa konstruksi, berdiri sejak tahun 2021 di kota Pontianak, Kalimantan Barat. Kami hadir sebagai mitra terpercaya dalam menghadirkan solusi konstruksi yang efisien, inovatif, dan berkualitas tinggi untuk berbagai kebutuhan pembangunan di wilayah Kalimantan dan sekitarnya.

Dengan pengalaman yang terus berkembang, kami mengedepankan profesionalisme dan integritas dalam setiap proyek yang kami tangani. Tim kami terdiri dari tenaga ahli yang berkompeten di bidangnya, mulai dari perencanaan, pelaksanaan, hingga pengawasan proyek.</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">TIM KAMI</h2>
                    <h3 class="section-subheading text-muted">Tim Kerja Profesional Kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('frontpage/assets/img/team/1.jpg')}}" alt="..." />
                            <h4>Pertiwi Lara I</h4>
                            <p class="text-muted">Direktur</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('frontpage/assets/img/team/2.jpg')}}" alt="..." />
                            <h4>Pertiwi Lara I</h4>
                            <p class="text-muted">Supervisor</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('frontpage/assets/img/team/3.jpg')}}" alt="..." />
                            <h4>Pertiwi Lara I</h4>
                            <p class="text-muted">Arsitek Senior</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Bersama Kami Membangun Negeri</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Mari Terhubung Dengan Kami</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
@endsection
@section("script")

@endsection