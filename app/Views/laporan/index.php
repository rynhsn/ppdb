<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <form class="card mb-5" action="<?= base_url('panel/laporan') ?>">
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <label for="periode" class="col-sm-4 col-form-label">Periode</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-solid" name="periode" required>
                                        <option value="">Pilih Periode</option>
                                        <?php foreach ($periode as $k): ?>
                                            <option
                                                value="<?= $k ?>" <?= $tahun == $k ? 'selected' : '' ?>><?= $k . '-' . ($k + 1) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="jenjang" class="col-sm-4 col-form-label">Jenjang</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-solid" name="jenjang" required>
                                        <option value="">Pilih Jenjang</option>
                                        <?php foreach (JENJANG as $k): ?>
                                            <option
                                                value="<?= $k ?>" <?= $jenjang == $k ? 'selected' : '' ?>><?= $k ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-light-success">
                                <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Filter
                            </button>
                        </div>
                        <?php if (in_groups('admin')): ?>
                            <div class="col">
                                <button type="button" class="btn btn-success" data-bs-target="#tambahLaporan"
                                        data-bs-toggle="modal">
                                    <i class="ki-duotone ki-plus-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    Buat Laporan
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!--end::Card body-->
            </form>

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

            <?php if (session('error')): ?>
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Gagal</h4>
                            <div class="fs-6 text-gray-700"><?= session('error'); ?></div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            <?php endif; ?>

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-filter="search"
                                   class="form-control form-control-solid w-250px ps-14"
                                   placeholder="Cari .."/>
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_datatable_example_1_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4" id="kt_datatable_siswa">
                        <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-50px rounded-start min-w-100px">Periode</th>
                            <th class="min-w-100px">Jenjang</th>
                            <th class="min-w-100px">Keterangan</th>
                            <th class="min-w-100px">Komentar</th>
                            <th class="min-w-50px">Status</th>
                            <th class="min-w-50px">Dibuat</th>
                            <th class="min-w-50px">Diperbarui</th>
                            <th class="min-w-125px text-end rounded-end"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($laporan as $item): ?>
                            <tr>
                                <td class="ps-4 fw-bold"><?= $item['periode_awal'] . '-' . $item['periode_akhir'] ?></td>
                                <td class="fw-bold"><?= $item['jenjang'] ?></td>
                                <td class="fw-bold"><?= $item['keterangan'] ?></td>
                                <td class="fw-bold"><?= $item['komentar'] ?></td>
                                <td class="fw-bold">
                                    <?php if ($item['status'] == 0): ?>
                                        <span class="badge badge-light-warning">Menunggu</span>
                                    <?php elseif ($item['status'] == 1): ?>
                                        <span class="badge badge-light-success">Diterima</span>
                                    <?php elseif ($item['status'] == 2): ?>
                                        <span class="badge badge-light-success">Telah diperbarui</span>
                                    <?php elseif ($item['status'] == 99): ?>
                                        <span class="badge badge-light-danger">Ditolak</span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold"><?= date('d M Y', strtotime($item['created_at'])) ?></td>
                                <td class="fw-bold"><?= date('d M Y', strtotime($item['updated_at'])) ?></td>
                                <td class="text-end">
                                    <a href="<?= base_url('panel/laporan/detail/' . $item['id']) ?>"
                                       class="btn btn-icon btn-active-color-warning btn-sm me-1" title="Detail">
                                        <i class="ki-duotone ki-eye fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </a>
                                    <?php if (in_groups('admin')): ?>
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_perbarui_<?= $item['id'] ?>"
                                                class="btn btn-icon btn-active-color-primary btn-sm me-1 <?= $item['status'] == '1' ? 'disabled' : '' ?>"
                                                title="Perbarui">
                                            <i class="ki-duotone ki-arrows-circle fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    <?php endif; ?>

                                    <?php if (in_groups('pimpinan')): ?>
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_terima_<?= $item['id'] ?>"
                                                class="btn btn-icon btn-active-color-success btn-sm me-1 <?= $item['status'] == 1 ? 'disabled' : '' ?>"
                                                title="Terima">
                                            <i class="ki-duotone ki-check-square fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </button>
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_tolak_<?= $item['id'] ?>"
                                                class="btn btn-icon btn-active-color-danger btn-sm me-1 <?= $item['status'] == 99 ? 'disabled' : '' ?>"
                                                title="Tolak">
                                            <i class="ki-duotone ki-cross-square fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    <?php endif; ?>
                                    <a href="<?= base_url('panel/laporan/cetak/' . $item['id']) ?>"
                                       class="btn btn-icon btn-active-color-info btn-sm me-1 <?= ($item['status'] != 1 ? 'disabled' : '') ?>"
                                       title="Unduh" target="_blank">
                                        <i class="ki-duotone ki-file-down fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

    <div class="modal fade" id="tambahLaporan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/create'); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'POST'); ?>
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Buat laporan</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <div class="row mb-3">
                            <label for="periode" class="col-sm-3 col-form-label">Periode</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-solid" name="periode" required>
                                    <option value="">Pilih Periode</option>
                                    <?php foreach ($periode as $k): ?>
                                        <option
                                            value="<?= $k ?>"><?= $k . '-' . ($k + 1) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenjang" class="col-sm-3 col-form-label">Jenjang</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-solid" name="jenjang" required>
                                    <option value="">Pilih Jenjang</option>
                                    <?php foreach (JENJANG as $k): ?>
                                        <option
                                            value="<?= $k ?>"><?= $k ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <!--                                textarea-->
                                <textarea class="form-control form-control-solid" name="keterangan" id="keterangan"
                                          rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
                <?= form_close(); ?>
                <!--end::Form-->
            </div>
        </div>
    </div>

<?php foreach ($laporan as $item) : ?>
    <div class="modal fade" id="kt_modal_perbarui_<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/perbarui/' . $item['id']); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Perbarui laporan</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <div class="row">
                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <!--                                textarea-->
                                <textarea class="form-control form-control-solid" name="keterangan" id="keterangan"
                                          rows="3"><?= $item['keterangan'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
                <?= form_close(); ?>
                <!--end::Form-->
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php foreach ($laporan as $item) : ?>
    <div class="modal fade" id="kt_modal_tolak_<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/tolak/' . $item['id']); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Tolak laporan</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <div class="row">
                            <label for="komentar" class="col-sm-3 col-form-label">Komentar</label>
                            <div class="col-sm-9">
                                <!--                                textarea-->
                                <textarea class="form-control form-control-solid" name="komentar" id="komentar"
                                          rows="3"><?= $item['komentar'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
                <?= form_close(); ?>
                <!--end::Form-->
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php foreach ($laporan as $item) : ?>
    <div class="modal fade" id="kt_modal_terima_<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/terima/' . $item['id']); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Terima laporan</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <div class="row">
                            <label for="komentar" class="col-sm-3 col-form-label">Komentar</label>
                            <div class="col-sm-9">
                                <!--                                textarea-->
                                <textarea class="form-control form-control-solid" name="komentar" id="komentar"
                                          rows="3"><?= $item['komentar'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
                <?= form_close(); ?>
                <!--end::Form-->
            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>