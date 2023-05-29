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
                <div class="col-xxl <?=($siswa['status_pendaftaran']=='1') || ($siswa['status_pendaftaran']=='2')? 'd-none':'' ?>">
                    <!--begin::Engage widget 10-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/media/stock/900x600/42.png')">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Silahkan lakukan
														<br />
														<span class="position-relative d-inline-block text-danger">
															<a href="<?=base_url('panel/pembayaran')?>" class="text-danger opacity-75-hover">pembayaran</a>
                                                            <!--begin::Separator-->
															<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                            <!--end::Separator-->
														</span></span> untuk melanjutkan registrasi</div>
                                <!--end::Title-->
                                <!--begin::Action-->
                                <div class="text-center">
                                    <a href='<?=base_url('panel/pembayaran')?>' class="btn btn-sm btn-dark fw-bold">Bayar Sekarang</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->

                            <!--begin::Illustration-->
                            <img class="mx-auto h-150px h-lg-250px theme-light-show" src="/media/illustrations/unitedpalms-1/11.png" alt="" />
                            <img class="mx-auto h-150px h-lg-250px theme-dark-show" src="/media/illustrations/unitedpalms-1/11-dark.png" alt="" />
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 10-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl <?=($siswa['status_pendaftaran']!='1')? 'd-none':'' ?>">
                    <!--begin::Engage widget 10-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/media/stock/900x600/42.png')">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                    <span class="me-2">Pembayaran sedang dalam proses validasi</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--begin::Wrapper-->

                            <!--begin::Illustration-->
                            <img class="mx-auto h-150px h-lg-250px theme-light-show" src="/media/illustrations/unitedpalms-1/5.png" alt="" />
                            <img class="mx-auto h-150px h-lg-250px theme-dark-show" src="/media/illustrations/unitedpalms-1/5-dark.png" alt="" />
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