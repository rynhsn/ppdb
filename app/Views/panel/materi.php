<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">

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
                <div class="col">
                    <!--begin::Card widget 17-->
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span
                                        class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Link Test <?= JENJANG[$jenjang] ?></span>
                                    <!--end::Amount-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <?= form_open('/panel/materi/link/' . $jenjang); ?>
                        <?= csrf_field(); ?>
                        <?= form_hidden('_method', 'PUT'); ?>
                        <?= form_hidden('id', $materi['id']); ?>
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center mt-10">
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <input type="text" class="form-control form-control-lg form-control-solid" name="link"
                                       value="<?= $link['link'] ?>"/>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>

                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan
                            </button>
                        </div>
                        <!--end::Actions-->
                        <?= form_close(); ?>
                        <!--end::Form-->
                    </div>
                    <!--end::Card widget 17-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Card widget 17-->
                    <div class="card h-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Amount-->
                                    <span
                                        class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Materi dan Jadwal Ujian untuk Jenjang <?= JENJANG[$jenjang] ?></span>
                                    <!--end::Amount-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <?= form_open('/panel/materi/' . $jenjang); ?>
                        <?= csrf_field(); ?>
                        <?= form_hidden('_method', 'PUT'); ?>
                        <?= form_hidden('id', $materi['id']); ?>
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center mt-10">
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <textarea name="isi" id="kt_docs_ckeditor_classic"><?= $materi['isi'] ?></textarea>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>

                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan
                            </button>
                        </div>
                        <!--end::Actions-->
                        <?= form_close(); ?>
                        <!--end::Form-->
                    </div>
                    <!--end::Card widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
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
                                    class="text-gray-400 pt-1 fw-semibold fs-6">Untuk jenjang pendidikan <?= JENJANG[$jenjang] ?></span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" id="preview_materi">
                            <!--begin::Wrapper-->
                            <?= $materi['isi'] ?>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 10-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>