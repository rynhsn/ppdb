<?php

use CodeIgniter\I18n\Time;

?>
<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboard</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">

        <?php if (session('pesan')): ?>
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-check-square fs-2tx text-success me-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Berhasil</h4>
                        <div class="fs-6 text-gray-700"><?= session('pesan'); ?></div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
        <?php endif; ?>

        <?php if (in_array('Pengumuman Seleksi', $jadwal_hari_ini)) : ?>
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xxl <?=($siswa['status_verifikasi']!='1') ? 'd-none':'' ?>">
                <!--begin::Engage widget 10-->
                <div class="card card-flush h-md-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/media/stock/900x600/42.png')">
                        <!--begin::Wrapper-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">Selamat, kamu
                                <span class="position-relative d-inline-block text-success">
                                    <span class="text-success opacity-75-hover">diterima</span>
                                    <!--begin::Separator-->
                                    <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-success border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                                    <br>
                                </span> di <?= $lembaga['nama_lembaga'] ?></div>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <div class="text-center">
                                <a href='<?=base_url('panel/cetak-bukti')?>' target="_blank" class="btn btn-sm btn-dark fw-bold">Cetak bukti</a>
                            </div>
                            <!--begin::Action-->
                        </div>
                        <!--begin::Wrapper-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 10-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl <?=($siswa['status_verifikasi']!='2') ? 'd-none':'' ?>">
                <!--begin::Engage widget 10-->
                <div class="card card-flush h-md-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/media/stock/900x600/42.png')">
                        <!--begin::Wrapper-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">Maaf, kamu
                                <span class="position-relative d-inline-block text-danger">
                                    <span class="text-danger opacity-75-hover">belum diterima.</span>
                                    <!--begin::Separator-->
                                    <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                            <!--end::Title-->
                        </div>
                        <!--begin::Wrapper-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 10-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <?php endif ?>

        <!--begin::Row-->
        <div class="row gy-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Engage widget 1-->
                <div class="card h-md-100 bg-success" dir="ltr">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column flex-center">
                        <!--begin::Heading-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <h1 class="fw-semibold text-light text-center lh-lg">Selamat Datang di PPDB Online
                                <br>
                                <span class="fw-bolder"><?= $lembaga['nama_lembaga'] ?></span></h1>
                            <!--end::Title-->
                            <!--begin::Illustration-->
                            <div class="py-10 text-center">
                                <img src="/media/svg/illustrations/easy/8.svg" class="theme-light-show w-200px"
                                     alt="">
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Heading-->
                        <div class="text-center">
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-danger btn-color-white me-2" href="<?= base_url('panel/cetak-biodata') ?>">
                                Unduh Biodata
                            </a>
                            <!--end::Link-->

                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 1-->
            </div>

            <!--begin::Col-->
            <div class="col-xl-4 mb-5 mb-xl-10">
                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-md-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Hari ini</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span
                                class="text-gray-400 pt-1 fw-semibold fs-6"><?= Time::now('Asia/Jakarta', 'id-ID')->format('d M Y') ?></span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end">
                        <span class="text-gray-800">Tahapan yang sedang berlangsung</span>
                        <?php foreach ($jadwal_hari_ini as $item) : ?>
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                                            <i class="bi bi-calendar3"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column">
                                    <p class="text-gray-800 text-hover-primary fs-6 fw-bolder"><?= $item ?></p>
                                </div>
                                <!--end::Text-->
                            </div>
                        <?php endforeach; ?>
                        <?php if (in_array('Tes Seleksi', $jadwal_hari_ini)) : ?>
                            <!--end::Title-->
                            <div class="m-0">
                                <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_create_app">Buka link ujian</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
                <!--begin::Card widget 17-->
                <div class="card bg-danger card-flush carousel carousel-custom carousel-stretch slide h-md-50"
                     id="kt_sliders_widget_2_slider"
                     data-bs-ride="carousel" data-bs-interval="5500">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h4 class="card-title d-flex align-items-start flex-column">
                            <span class="fs-2hx fw-bold text-light me-2 lh-1 ls-n2">Pengumuman</span>
                        </h4>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-light">
                                <?php if ($pengumuman): ?>
                                    <?php $i = 0;
                                    foreach ($pengumuman as $p): ?>
                                        <!--begin::Item-->
                                        <li data-bs-target="#kt_sliders_widget_2_slider"
                                            data-bs-slide-to="<?php echo $i; ?>"
                                            class="ms-1 <?php if ($i == 0) echo 'active'; ?>" <?php if ($i == 0) echo 'aria-current="true"'; ?>></li>
                                        <!--end::Item-->
                                        <?php $i++; endforeach; ?>
                                <?php else: ?>
                                    <li data-bs-target="#kt_sliders_widget_2_slider"
                                        data-bs-slide-to="1"
                                        class="ms-1 active" aria-current="true"></li>
                                <?php endif ?>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-6">
                        <!--begin::Carousel-->
                        <div class="carousel-inner">
                            <?php if($pengumuman):?>
                            <?php $i = 0;
                            foreach ($pengumuman as $p): ?>
                            <!--begin::Item-->
                            <div class="carousel-item <?php if ($i == 0) echo 'show active'; ?>">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px symbol-circle me-5">
                                                <span class="symbol-label bg-light-danger">
                                                    <i class="ki-duotone ki-information fs-2x text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h5 class="fw-bold mb-3 text-light"><?= $p['judul_pengumuman'] ?>
                                            <br>
                                            <span
                                                class="fw-semibold fs-7 text-white-50"><?= date('d M Y', strtotime($p['tgl_pengumuman'])) ?></span>
                                        </h5>
                                        <!--end::Subtitle-->
                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <span class="d-inline-block text-wrap text-light text-break">
                                                                <?= $p['ket_pengumuman'] ?>
                                                            </span>
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <?php $i++; endforeach; ?>
                            <?php else:?>
                            <span class="text-light fs-2">Belum ada pengumuman</span>
                            <?php endif?>
                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 17-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::List widget 10-->
                <div class="card bg-primary card-flush h-md-100 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fs-2hx fw-bold text-light  me-2 lh-1 ls-n2">Jadwal PPDB Online</span>
                            <span
                                class="text-white-50 mt-1 fw-semibold fs-6">Jenjang <?= $siswa['jenjang_daftar'] ?></span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Timeline-->
                        <div class="timeline">
                            <?php foreach ($jadwal as $item) : ?>
                            <!--begin::Timeline item-->
                            <div class="timeline-item align-items-center mb-7">
                                <!--begin::Timeline line-->
                                <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon" style="margin-left: 11px">
                                    <i class="ki-duotone ki-<?= ((Time::now('Asia/Jakarta') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta') <= $item['tgl_selesai'])|| (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_mulai']) && (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_selesai'])
                                    )  ? 'geolocation fs-2' : 'cd fs-3' ?> text-<?= ((Time::now('Asia/Jakarta') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta') <= $item['tgl_selesai'])||(Time::now('Asia/Jakarta')->toDateString() === $item['tgl_mulai']) && (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_selesai'])
                                    ) ? 'danger' : 'success' ?>">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content m-0">
                                    <!--begin::Title-->
                                    <span
                                        class="fs-9 text-white-50 fw-semibold d-block"><?= ($item['tgl_mulai'] == $item['tgl_selesai']) ? $item['tgl_mulai'] : $item['tgl_mulai'] . ' s/d ' . $item['tgl_selesai'] ?></span>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bold text-white"><?= $item['judul'] ?></span>
                                    <!--end::Title-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                            <?php endforeach; ?>
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List widget 10-->
            </div>
            <!--end::Col-->

        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-lg-5 g-xl-10">
            <!--begin::Col-->
            <div class="col">
                <!--begin::Card widget 10-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Materi ujian</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span
                                class="text-gray-400 pt-1 fw-semibold fs-6">Untuk jenjang pendidikan <?= $siswa['jenjang_daftar'] ?></span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Wrapper-->
                        <?= $materi['isi'] ?>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 10-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
<?= $this->endSection(); ?>