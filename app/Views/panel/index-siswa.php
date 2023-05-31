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

            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
                    <div id="kt_sliders_widget_2_slider"
                         class="card card-flush carousel carousel-custom carousel-stretch slide h-md-50 h-sm-50 h-xl-10 mb-10"
                         data-bs-ride="carousel" data-bs-interval="5500">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Pengumuman</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7"><?= date('d M Y') ?></span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                    <?php $i = 0;
                                    foreach ($pengumuman as $p): ?>
                                        <!--begin::Item-->
                                        <li data-bs-target="#kt_sliders_widget_2_slider"
                                            data-bs-slide-to="<?php echo $i; ?>"
                                            class="ms-1 <?php if ($i == 0) echo 'active'; ?>" <?php if ($i == 0) echo 'aria-current="true"'; ?>></li>
                                        <!--end::Item-->
                                        <?php $i++; endforeach; ?>
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
                                <?php $i = 0;
                                foreach ($pengumuman as $p): ?>
                                    <!--begin::Item-->
                                    <div class="carousel-item <?php if ($i == 0) echo 'show active'; ?>">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-70px symbol-circle me-5">
                                                <span class="symbol-label bg-light-warning">
                                                    <i class="ki-duotone ki-information fs-3x text-warning">
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
                                                <h5 class="fw-bold text-gray-800 mb-3"><?= $p['judul_pengumuman'] ?></h5>
                                                <!--end::Subtitle-->
                                                <!--begin::Items-->
                                                <div class="d-flex d-grid gap-5">
                                                    <!--begin::Item-->
                                                    <span class="d-inline-block text-wrap text-break">
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
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 17-->
                    <!--begin::Card widget 17-->
                    <div id="kt_sliders_widget_2_slider"
                         class="card card-flush carousel carousel-custom carousel-stretch slide h-md-50 h-xl-10 mb-5"
                         data-bs-ride="carousel" data-bs-interval="5500">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Pengumuman</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7"><?= date('d M Y') ?></span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                    <?php $i = 0;
                                    foreach ($pengumuman as $p): ?>
                                        <!--begin::Item-->
                                        <li data-bs-target="#kt_sliders_widget_2_slider"
                                            data-bs-slide-to="<?php echo $i; ?>"
                                            class="ms-1 <?php if ($i == 0) echo 'active'; ?>" <?php if ($i == 0) echo 'aria-current="true"'; ?>></li>
                                        <!--end::Item-->
                                        <?php $i++; endforeach; ?>
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
                                <?php $i = 0;
                                foreach ($pengumuman as $p): ?>
                                    <!--begin::Item-->
                                    <div class="carousel-item <?php if ($i == 0) echo 'show active'; ?>">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-70px symbol-circle me-5">
																			<span class="symbol-label bg-light-warning">
																				<i class="ki-duotone ki-information fs-3x text-warning">
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
                                                <h5 class="fw-bold text-gray-800 mb-3"><?= $p['judul_pengumuman'] ?></h5>
                                                <!--end::Subtitle-->
                                                <!--begin::Items-->
                                                <div class="d-flex d-grid gap-5">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-column flex-shrink-0 me-4">
                                                        <!--begin::Section-->
                                                        <span
                                                            class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>5 Topics</span>
                                                        <!--end::Section-->
                                                        <!--begin::Section-->
                                                        <span
                                                            class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>1 Speakers</span>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-column flex-shrink-0">
                                                        <!--begin::Section-->
                                                        <span
                                                            class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>60 Min</span>
                                                        <!--end::Section-->
                                                        <!--begin::Section-->
                                                        <span
                                                            class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>137 students</span>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Action-->
                                        <div class="m-0">
                                            <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                            <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <?php $i++; endforeach; ?>
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg">
                    <!--begin::Engage widget 10-->
                    <div class="card card-flush h-md-70">
                        <!--begin::Body-->
                        <div
                            class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                            style="background-position: 100% 50%; background-image:url('/media/stock/900x600/42.png')">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                    <span class="me-2">Selamat Datang di PPDB
                                    <br/>
                                    <span
                                        class="me-2 text-success opacity-75-hover"><?= $lembaga['nama_lembaga'] ?>
                                    <span
                                        class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    </span>
                                        <?= $lembaga['th_pelajaran'] ?>
                                    </span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--begin::Wrapper-->

                            <!--begin::Illustration-->
                            <img class="mx-auto h-150px h-lg-300px theme-light-show"
                                 src="/media/illustrations/unitedpalms-1/20.png" alt=""/>
                            <img class="mx-auto h-150px h-lg-300px theme-dark-show"
                                 src="/media/illustrations/unitedpalms-1/20-dark.png" alt=""/>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>