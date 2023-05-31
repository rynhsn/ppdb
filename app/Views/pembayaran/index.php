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
                <div class="col-xl">
                    <!--begin::Card widget 20-->
                    <div class="card h-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Metode Pembayaran</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-dark opacity-75 pt-1 fw-semibold fs-6">Silahkan lakukan pembayaran ke salah satu nomor rekening di bawah ini</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body text-dark opacity-75 fw-bold pt-0 mt-10">
                            Rekening atas nama<h2> <?= $lembaga['nama_lembaga'] ?></h2>
                            <h1 class="mb-10">Biaya registrasi:
                                <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">Rp.</span><span
                                    class="text-danger"><?= BIAYA_PENDAFTARAN[$siswa['jenjang_daftar']] ?></span></h1>
                            <?php foreach (REKENING as $key => $value): ?>
                                <div class="row mb-5">
                                    <div class="col-2">
                                        <img src="media/logos/<?= $key ?>.png" alt="" width="50vw">
                                    </div>
                                    <div class="col">
                                        <h1><?= $value ?></h1>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 20-->
                </div>
                <!--end::Col-->
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
                                        class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Unggah Bukti Pembayaran</span>
                                    <!--end::Amount-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <?= form_open_multipart('/panel/pembayaran'); ?>
                        <?= csrf_field(); ?>
                        <?= form_hidden('_method', 'POST'); ?>
                        <?= form_hidden('id', $siswa['id']); ?>
                        <?= form_hidden('jumlah', BIAYA_PENDAFTARAN[$siswa['jenjang_daftar']]); ?>
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center mt-10">
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <!--begin::Label-->
                                <label class="form-label required fw-semibold fs-6">Akun Pengirim</label>
                                <!--end::Label-->
                                <input type="number" name="dari"
                                       class="form-control form-control-lg form-control-solid <?= ($validation->hasError('dari')) ? 'is-invalid' : ''; ?>"
                                       placeholder="No. Rekening" required/>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('dari'); ?>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <!--begin::Label-->
                                <label class="form-label required fw-semibold fs-6">Akun Tujuan</label>
                                <!--end::Label-->
                                <select type="number" name="ke"
                                        class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Pilih..."
                                        data-allow-clear="true" required>
                                    <?php foreach (REKENING as $key => $value): ?>
                                        <option value="<?= $key ?>"><?= $key ?> | <?= $value ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= validation_show_error('ke'); ?>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <!--begin::Label-->
                                <label class="form-label required fw-semibold fs-6">Tanggal</label>
                                <!--end::Label-->
                                <input name="tanggal" id="kt_datepicker_flat"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggal') ?>"
                                       required/>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tanggal'); ?>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <!--begin::Label-->
                                <label class="form-label required fw-semibold fs-6">Foto Bukti Transfer</label>
                                <!--end::Label-->
                                <input name="bukti" type="file" accept="image/*"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= ($validation->hasError('bukti')) ? 'is-invalid' : ''; ?>" max required/>
                                <small
                                class="form-text text-muted required"> Ukuran maksimal 1MB</small>

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
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>