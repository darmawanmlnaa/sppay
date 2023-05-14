@extends('layouts.guest')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Sudahkah Membayar Tagihan SPP ?</h1>
            <h2>Bayar Tagihan SPP Kamu Dimana Saja Kapan Saja Dengan SPPAY</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('assets/vendor/arsha/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('assets/vendor/arsha/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
            </div>

            </div>

        </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
            <div class="col-lg-6">
                <p>
                Lakukan pembayaran tagihan SPP kamu dimana saja kapan saja dengan SPPAY.
                </p>
                <ul>
                <li><i class="ri-check-double-line"></i> Mudah Digunakan</li>
                <li><i class="ri-check-double-line"></i> Transaksi Aman</li>
                <li><i class="ri-check-double-line"></i> Simpan Bukti Pembayaran</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                SPPAY adalah aplikasi pendataan dan pembayaran SPP dengan berbagai macam metode pembayaran yang memudahkan user dan memudahkan pengelolaan data SPP.
                </p>
                <a href="#" class="btn-learn-more">Pelajari Lebih Lanjut</a>
            </div>
            </div>

        </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        {{-- <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
                </div>

                <div class="accordion-list">
                <ul>
                    <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                    </li>

                    <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                    </li>

                    <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                    </li>

                </ul>
                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('arsha/assets/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
        </section> --}}
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        {{-- <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('arsha/assets/img/skills.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>

                <div class="skills-content">

                <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                </div>

            </div>
            </div>

        </div>
        </section> --}}
        <!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Layanan Kami</h2>
            {{-- <p>Layanan kami dapat dipastikan membuat anda puas, jika anda mengalami kendala anda dapat menghubungi kami, customer service kami akan segera melayani anda.</p> --}}
            </div>

            <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-wallet"></i></div>
                <h4><a href="">Payment</a></h4>
                <p>Berbagai macam tipe pembayaran yang pasti aman, memudahkan user dan petugas</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Data Collection</a></h4>
                <p>Pendataan yang tertata rapih, download dan simpan semua data pembayaran</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Dashboard</a></h4>
                <p>Dashboard yang kekinian dan mudah dimengerti oleh semua kalangan</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-user-plus"></i></div>
                <h4><a href="">Multi Level</a></h4>
                <p>Banyak user dengan level berbeda memudahkan pengelolaan dan meningkatkan keamanan</p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Memiliki Pertanyaan ?</h3>
                <p>Jika anda memiliki pertanyaan segera hubungi kami untuk konsultasi, aktif saat jam bekerja, <b>gratis</b> untuk pertama kali.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Hubungi Kami</a>
            </div>
            </div>

        </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Portfolio</h2>
            {{-- <p>Berikut tangkapan layar dari aplikasi SPPAY. Berbagai fitur dikelompokan sesuai dengan hak akses nya masing - masing. Terdapat admin, petugas dan user atau murid. SPPAY sudah responsive sehingga nyaman digunakan di ponsel anda</p> --}}
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-app">Admin</li>
            <li data-filter=".filter-card">Petugas</li>
            <li data-filter=".filter-web">User</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{asset('assets/vendor/arsha/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Tim Kami</h2>
            </div>

            <div class="row d-flex justify-content-center">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('arsha/assets/img/team/developer.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Muhammad Rizky Maulana Darmawan</h4>
                    <span>Developer | Owner</span>
                    <p>Thanks to Allah, aplikasi sppay ini berjalan dengan lancar</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('arsha/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('arsha/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('arsha/assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Team Section --> --}}

        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Paket Dan Harga</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                <h3>Demo</h3>
                <h4><sup>Rp. </sup>0,00<span>per bulan</span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> Gratis 5 akun selama 7 hari</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Mendapat Semua Fitur</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis Perubahan Minor</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis hosting dan domain</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis Maintenance Selama 3 Bulan</span></li>
                </ul>
                <a href="#" class="buy-btn">Beli Paket</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                <h3>Pro</h3>
                <h4><sup>Rp. </sup>300.000,00<span>per bulan</span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> Unlimited User</li>
                    <li><i class="bx bx-check"></i> Mendapat Semua Fitur</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis Perubahan Minor &#40;5x&#41;</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis hosting dan domain</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Gratis Maintenance Selama 3 Bulan</span></li>
                </ul>
                <a href="#" class="buy-btn">Beli Paket</a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                <h3>Premium</h3>
                <h4><sup>Rp. </sup>5 Juta<span>permanen</span></h5>
                <ul>
                    <li><i class="bx bx-check"></i> Unlimited User</li>
                    <li><i class="bx bx-check"></i> Mendapat Semua Fitur</li>
                    <li><i class="bx bx-check"></i> Gratis Perubahan Minor &#40;5x&#41;</li>
                    <li><i class="bx bx-check"></i> Gratis hosting dan domain</li>
                    <li><i class="bx bx-check"></i> Gratis Maintenance Selama 3 Bulan</li>
                </ul>
                <a href="#" class="buy-btn">Beli Paket</a>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Pricing Section --> --}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Pertanyaan yang sering di ajukan</h2>
            <p>Berikut beberapa pertanyaan yang sering ditanyakan oleh pelanggan kami, jika pertanyaan anda tidak termasuk disini jangan ragu untuk menghubungi customer service kami.</p>
            </div>

            <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa datanya bisa di download ke excel? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                    Ya SPPAY memiliki fitur download ke excel untuk mempermudah pendataan siswa, spp dan pembayaran
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Dalam transaksi pembayaran apakah akan mendapat bukti? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Ya SPPAY memiliki fitur download bukti pembayaran berupa pdf yang dapat di simpan sehingga tidak ada data pembayaran yang hilang
                    </p>
                </div>
                </li>

                {{-- <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                </div>
                </li> --}}

            </ul>
            </div>

        </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Kontak Kami</h2>
            <p>Anda dapat mengunjungi kantor kami atau anda cukup hubungi nomor kami dengan tap informasi nomor atau dengan mengisi email dibawah ini jika anda memiliki pertanyaan atau tertarik dengan produk kami.</p>
            </div>

            <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Lokasi:</h4>
                    <p>Jalan Veteran III, Ciawi, Kabupaten Bogor, Indonesia</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>rrizkyyki@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Telepon:</h4>
                    <p>+62 812 1230 5293</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d680.5540576372067!2d106.87460605503733!3d-6.696010341938268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c9f7661d3963%3A0x7cca2fd10346f01b!2sMarkas%20Sakit%20Hati%20Ciawi!5e0!3m2!1sid!2sid!4v1678540337451!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{route('send-guest-mail')}}" method="post" role="form" class="email-form">
                @csrf
                <!-- if u want use subject -->
                <!--
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Subjek</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="sent-message"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                </form>
                @if (session()->has('success'))
                    <script>alert("Email Berhasil Dikirim.")</script>
                @endif
            </div>

            </div>

        </div>
        </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->

@endsection