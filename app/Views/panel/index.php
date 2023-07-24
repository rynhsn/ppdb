<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    <?= $title ?></h1>
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
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-<?=($status['status'] == 'buka')?'success':'danger'?> rounded border-<?=($status['status'] == 'buka')?'success':'danger'?> border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-<?=($status['status'] == 'buka')?'check':'cross'?>-square fs-2tx text-<?=($status['status'] == 'buka')?'success':'danger'?> me-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">PPDB Online</h4>
                        <div class="fs-6 text-gray-700">Masih di<?= $status['status'] ?>, terakhir diubah
                            tanggal <?= $status['updated_at'] ?></div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->

            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #1BC5BD;background-image:url('assets/media/svg/shapes/wave-bg-dark.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #1BC5BD">
                                <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6"><?= $pendaftar ?></span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">Total</span>
                                    <span class="">Pendaftar</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #EE9D01;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #EE9D01">
                                <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6"><?= $totalLulus ?></span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">Total</span>
                                    <span class="">Pendaftar Diterima</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #6ad59b;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-3">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #6ad59b">
                                <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                            </div>
                            <!--end::Icon-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end mb-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6"><?= $totalTidakLulus ?></span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">Total</span>
                                    <span class="">Pendaftar Tidak Diterima</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 3-->
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>