<?= $this->extend('home/layouts/index'); ?>
<?= $this->section('content'); ?>
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Daftar Section-->
    <div class="mb-0" id="daftar">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-cover bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
             style="background-image: url(<?= base_url(); ?>/media/misc/landing.jpg);">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                 data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="background-image: url(<?= base_url(); ?>/media/misc/landing.jpg);">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2hx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="<?= base_url() ?>">
                                <img alt="Logo" src="<?= base_url(); ?>/media/logos/logo.png"
                                     class="logo-default h-25px h-lg-50px"/>
                                <img alt="Logo" src="<?= base_url(); ?>/media/logos/landing-dark.svg"
                                     class="logo-sticky h-20px h-lg-50px"/>
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                                 data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                 data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                 data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                 data-kt-swapper-mode="prepend"
                                 data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                    id="kt_landing_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#daftar"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Daftar</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#info"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Info</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#syarat"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Persyaratan</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#kontak"
                                           data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Toolbar-->
                        <div class="flex-equal text-end ms-1">
                            <?php if(!logged_in()):?>
                            <a href="<?= base_url('login'); ?>" class="btn btn-success">Masuk</a>
                            <?php else: ?>
                            <a href="<?= base_url('panel'); ?>" class="btn btn-warning">Panel</a>
                            <?php endif ?>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9 bgi-no-repeat bgi-size-cover bgi-position-x-center bgi-position-y-center landing-dark-bg" style="background-image: url(<?= base_url(); ?>/media/misc/landing.jpg);">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20" id="daftar">
                    <!--begin::Title-->
                    <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Selamat Datang di PPDB Online
                        <br>
                        <span
                            style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%); -webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text"><?= ucwords($lembaga['nama_lembaga']) ?></span>
							</span>
                    </h1>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="<?= base_url('daftar') ?>" class="btn btn-success">Daftar Sekarang</a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Daftar Section-->
    <!--begin::Alur Section-->
    <div class="mb-n10 mb-lg-n20 z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="info" data-kt-scroll-offset="{default: 100, lg: 150}">Seputar Yayasan</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold">
                    Yayasan Pondok Pesantren Jamiatul Ikhwan didirikan pada tahun 1982 oleh Almaghfurlah KH. Mohammad Arja yang dulu dikenal dengan Pondok Pesantren Himmatul Aliyah Cigentong. Dalam perkembangan selanjutnya, pada tahun 1996 mengalami proses pengubahan menjadi Yayasan Pondok Pesantren Jamiatul Ikhwan yang dipimpin oleh KH. A. Khudori Yusuf. Yayasan Pondok Pesantren Jamiatul Ikhwan menaungi berbagai bidang baik di bidang Pendidikan formal maupun pendidikan non formal. Bidang pendidikan formal diantaranya: Madrasah Diniyah (MD), Sekolah Menengah Pertama (SMP), Madrasah Aliyah (MA), dan  Sekolah Menengah Kejuruan (SMK). Sedangkan bidang Pendidikan non formal diantaranya: Balai Latihan Kerja Komunitas (BLKK) dan program As-salafiyah takhasus kitab.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20">
                <!--begin::Col-->
                <div class="col-md-6 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Heading-->
                        <div class="d-flex flex-center mb-5">
                            <!--begin::Badge-->
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                            <!--end::Badge-->
                            <!--begin::Title-->
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Visi</div>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                            “Menjadikan Yayasan Pondok Pesantren Jamiatul Ikhwan yang unggul dan terkemuka di tingkat nasional dan internasional dalam pengintegrasian pengembangan studi keislaman dan peradaban.”
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Heading-->
                        <div class="d-flex flex-center mb-5">
                            <!--begin::Badge-->
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                            <!--end::Badge-->
                            <!--begin::Title-->
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Misi</div>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted text-start">
                            <ol>
                                <li>Mengembangkan Pendidikan Yayasan Pondok Pesantren Jamiatul Ikhwan yang interkonektif, integratif dan transformatif</li>
                                <li>Mengembangkan wawasan keislaman dan keilmuan yang tawassuth, tawazun, I’tidal dan tasamuh.</li>
                                <li>Mengembangkan Kerjasama dengan berbagai pihak untuk meningkatkan kualitas pelayanan akademik dan kemasyarakatan.</li>
                            </ol>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Product slider-->
            <div class="tns tns-default">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                     data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                     data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                     data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                    <!--begin::Item-->
                    <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                        <img src="<?= base_url(); ?>/media/preview/demos/demo1/light-ltr.png"
                             class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                        <img src="<?= base_url(); ?>/media/preview/demos/demo2/light-ltr.png"
                             class="card-rounded shadow mh-lg-650px mw-100" alt=""/>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Slider-->
            </div>
            <!--end::Product slider-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Alur Section-->
    <!--begin::Info Section-->
    <div class="mt-sm-n10">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="pb-15 pt-18 landing-dark-bg">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mt-15 mb-18" id="syarat" data-kt-scroll-offset="{default: 100, lg: 150}">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white fw-bold mb-5">Persyaratan</h3>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Statistics-->
                <div class="d-flex flex-center">
                    <!--begin::Items-->
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <!--begin::Badge-->
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                        <!--end::Badge-->
                        <!--begin::Title-->
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy KTP orang tua</div>
                        <!--end::Title-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Statistics-->
                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy Kartu Keluarga</div>
                    </div>
                </div>

                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy akta kelahiran</div>
                    </div>
                </div>

                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">4</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy Surat kelulusan (SKL)</div>
                    </div>
                </div>

                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">5</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy Ijazah</div>
                    </div>
                </div>

                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">6</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Fotocopy KIP (Jika ada)</div>
                    </div>
                </div>

                <div class="d-flex flex-center">
                    <div class="d-flex flex-wrap flex-center justify-content-lg-start mb-15 mx-auto w-xl-900px">
                        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">7</span>
                        <div class="fs-5 fs-lg-3 fw-bold text-light">Foto Background Merah 3x4</div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Info Section-->
    <!--begin::Footer Section-->
    <div class="mb-0" id="kontak">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="landing-dark-bg pt-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row py-10 py-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                        <!--begin::Block-->
                        <div class="rounded landing-dark-border p-9 mb-10">
                            <!--begin::Title-->
                            <h2 class="text-white">Hubungi kami</h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">
                                Asep Imam Munandar
								<span class="text-white opacity-50">083851571992</span>
                            </span>
                            <!--end::Text-->
                            <br>
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">
                                Sartiah
								<span class="text-white opacity-50">081219673718</span>
                            </span>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Separator-->
            <div class="landing-dark-separator"></div>
            <!--end::Separator-->
            <!--begin::Container-->
            <div class="container">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <!--begin::Copyright-->
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/landing.html">
                            <img alt="Logo" src="<?= base_url(); ?>/media/logos/logo.png" class="h-15px h-md-20px"/>
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Logo image-->
                        <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"><?= $lembaga['nama_lembaga'] ?></span>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Copyright-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Footer Section-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
</div>
<!--end::Root-->
<?= $this->endSection() ?>
