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
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>