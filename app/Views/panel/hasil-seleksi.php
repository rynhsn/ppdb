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
            <div class="card mb-8">
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
                            <th class="min-w-50px">NISN</th>
                            <th class="min-w-50px">NIK</th>
                            <th class="min-w-100px">Nama Lengkap</th>
                            <th class="min-w-10px">Nilai</th>
                            <th class="min-w-10px">Hasil</th>
                            <th class="min-w-10px">Status</th>
                            <th class="min-w-15px text-end rounded-end"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($siswa as $item): ?>
                            <tr>
                                <td class="ps-4 fw-bold text-muted">
                                    <?= $item['no_pendaftaran'] ?>
                                </td>
                                <td class="fw-bold"><?= $item['nisn'] ?></td>
                                <td class="fw-bold"><?= $item['nik'] ?></td>
                                <td class="fw-bold"><?= $item['nama_lengkap'] ?></td>
                                <td class="fw-bold"><?= $item['nilai'] ?></td>
                                <td class="fw-bold">
                                    <?php if ($item['status_kelulusan'] == '1'): ?>
                                        <span class="badge badge-light-success">Lolos</span>
                                    <?php elseif ($item['status_kelulusan'] == '0'): ?>
                                        <span class="badge badge-light-warning">Belum dinilai</span>
                                    <?php else: ?>
                                        <span class="badge badge-light-danger">Tidak lolos</span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold">
                                    <?php if ($item['status_verifikasi'] == '1'): ?>
                                        <span class="badge badge-light-success">Diterima</span>
                                    <?php elseif ($item['status_verifikasi'] == '0'): ?>
                                        <span class="badge badge-light-warning">Belum ditentukan</span>
                                    <?php else: ?>
                                        <span class="badge badge-light-danger">Belum diterima</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end">
                                    <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_<?= $item['id'] ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                        <i class="ki-duotone ki-password-check fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <a href="<?= base_url('panel/hasil-seleksi/terima/'.$item['id']) ?>" type="button" class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1 <?= $item['status_kelulusan'] != 1 ? 'disabled' : '' ?>" title="Terima" onclick="return confirm('Siswa akan diterima, yakin?')">
                                        <i class="ki-duotone ki-check-square fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </a>
                                    <a href="<?= base_url('panel/hasil-seleksi/tolak/'.$item['id']) ?>" type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 <?= $item['status_kelulusan'] != 1 ? 'disabled' : '' ?>" title="Tolak" onclick="return confirm('Siswa akan ditolak, yakin?')">
                                        <i class="ki-duotone ki-cross-square fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                        class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Catatan bukti kelulusan untuk Jenjang <?= $jenjang ?></span>
                                    <!--end::Amount-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <?= form_open('/panel/bukti-kelulusan/' . $jenjang); ?>
                        <?= csrf_field(); ?>
                        <?= form_hidden('_method', 'PUT'); ?>
                        <?= form_hidden('id', $catatan['id']); ?>
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center mt-10">
                            <!--begin::Input group-->
                            <div class="fv-row col-12 mb-6">
                                <textarea name="isi" id="kt_docs_ckeditor_classic"><?= $catatan['isi'] ?></textarea>
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
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Catatan bukti kelulusan</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span
                                    class="text-gray-400 pt-1 fw-semibold fs-6">Untuk jenjang pendidikan <?= $jenjang ?></span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" id="preview_catatan">
                            <!--begin::Wrapper-->
                            <?= $catatan['isi'] ?>
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
<?php foreach ($siswa as $item): ?>
    <div class="modal fade" tabindex="-1" id="kt_modal_<?= $item['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Masukkan Nilai</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <?= form_open('panel/hasil-seleksi')?>
                <?= csrf_field() ?>
                <?= form_hidden('_method', 'PUT')?>
                <?= form_hidden('id', $item['id']) ?>
                <div class="modal-body">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">No. Pendaftaran</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6"><?= $item['no_pendaftaran'] ?></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nilai</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="number" min="0" max="1000" name="nilai" class="form-control form-control-lg form-control-solid" value="<?=$item['nilai']?>" required>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>



<?= $this->endSection(); ?>