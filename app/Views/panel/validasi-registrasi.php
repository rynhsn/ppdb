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
                                   placeholder="Cari.."/>
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_datatable_example_1_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-siswa-table-toolbar="base">

                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Export dropdown-->
                                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Export Data
                                </button>
                                <!--begin::Menu-->
                                <div id="kt_datatable_siswa_export_menu"
                                     class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                     data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="copy">
                                            Copy to clipboard
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="excel">
                                            Export as Excel
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                                            Export as CSV
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                            Export as PDF
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Export dropdown-->

                                <!--begin::Hide default export buttons-->
                                <div id="kt_datatable_siswa_buttons" class="d-none"></div>
                                <!--end::Hide default export buttons-->
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4" id="kt_datatable_siswa">
                        <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-50px rounded-start">No. Pendaftaran</th>
                            <th class="min-w-75px">Jenjang</th>
                            <th class="min-w-100px">Pembayaran</th>
                            <th class="min-w-100px">Jumlah</th>
                            <th class="min-w-10px">Tanggal</th>
                            <th class="min-w-125px text-end rounded-end"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($siswa as $item): ?>
                            <tr>
                                <td class="ps-4 fw-bold text-muted">
                                    <?= $item['no_pendaftaran'] ?>
                                </td>
                                <td class="fw-bold"><?= $item['jenjang_daftar'] ?></td>
                                <td class="text-muted">
                                    <span
                                        class="badge badge-light-<?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][1] ?>">
                                        <?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][0] ?>
                                    </span>
                                </td>
                                <td class="fw-bold"><?= $item['jumlah'] ?></td>
                                <td class="fw-bold"><?= $item['tanggal'] ?></td>
                                <td class="text-end">
                                    <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_konfirmasi_<?= $item['uid'] ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1 <?= $item['status_pendaftaran'] != 1 ? 'disabled' : '' ?>">
                                        <i class="ki-duotone ki-check-square fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_tolak_<?= $item['uid'] ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 <?= $item['status_pendaftaran'] != 1 ? 'disabled' : '' ?>">
                                        <i class="ki-duotone ki-cross-square fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_detail_<?= $item['uid'] ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm me-1">
                                        <i class="ki-duotone ki-eye fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_view_<?= $item['uid'] ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 <?= $item['status_pendaftaran'] == 0 ? 'disabled' : '' ?>">
                                        <i class="ki-duotone ki-file fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
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
    <!--Modal detail-->
<?php foreach ($siswa as $item): ?>
    <div class="modal fade" tabindex="-1" id="kt_modal_detail_<?= $item['uid'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Registrasi</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800"><?= $item['nama_lengkap'] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">No. Pendaftaran</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6"><?= $item['no_pendaftaran'] ?></span>

                            <span
                                class="badge badge-<?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][1] ?>"><?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][0] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">NIK</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold fs-6 text-gray-800"><?= $item['nik'] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">NISN</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold fs-6 text-gray-800"><?= $item['nisn'] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <?php if ($item['status_pendaftaran'] > 0): ?>
                        <hr class="text-muted">
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Akun Pengirim</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><?= $item['dari'] ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Ke</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><?= $item['ke'] ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Jumlah</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><?= $item['jumlah'] ?></span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Tanggal</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800"><?= $item['tanggal'] ?></span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php foreach ($siswa as $item): ?>
    <div class="modal fade" tabindex="-1" id="kt_modal_konfirmasi_<?= $item['uid'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Pembayaran</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <?= form_open('panel/validasi-registrasi/konfirmasi')?>
                <?= csrf_field() ?>
                <?= form_hidden('uid', $item['uid']) ?>
                <div class="modal-body">
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">No. Pendaftaran</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6"><?= $item['no_pendaftaran'] ?></span>
                            <span
                                class="badge badge-<?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][1] ?>"><?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][0] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php foreach ($siswa as $item): ?>
    <div class="modal fade" tabindex="-1" id="kt_modal_tolak_<?= $item['uid'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tolak Pembayaran</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <?= form_open('panel/validasi-registrasi/tolak')?>
                <?= csrf_field() ?>
                <?= form_hidden('uid', $item['uid']) ?>
                <div class="modal-body">
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">No. Pendaftaran</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6"><?= $item['no_pendaftaran'] ?></span>
                            <span
                                class="badge badge-<?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][1] ?>"><?= STATUS_PEMBAYARAN[$item['status_pendaftaran']][0] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>

    <!--Modal view file-->
<?php foreach ($siswa as $item): ?>
    <div class="modal fade" tabindex="-1" id="kt_modal_view_<?= $item['uid'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $item['no_pendaftaran'] ?></h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="d-flex align-content-center justify-content-center">
                        <img src="/img/pembayaran/<?= $item['bukti'] ?>" alt="<?= $item['no_pendaftaran'] ?>"
                             width="250vw">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection(); ?>