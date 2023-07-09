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
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-siswa-table-toolbar="base">
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_perbarui"
                                        class="btn btn-light-primary <?= $laporan['status'] == '1' ? 'disabled' : '' ?>">
                                    <i class="ki-duotone ki-arrows-circle fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Perbarui
                                </button>
                                <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_terima"
                                        class="btn btn-light-success <?= $laporan['status'] == 1 ? 'disabled' : '' ?>">
                                    <i class="ki-duotone ki-check-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    Terima
                                </button>
                                <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_tolak"
                                        class="btn btn-light-danger <?= $laporan['status'] == 99 ? 'disabled' : '' ?>">
                                    <i class="ki-duotone ki-cross-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Tolak
                                </button>
                                <a href="<?= base_url('panel/laporan/cetak/'.$laporan['id']) ?>" class="btn btn-light-info">
                                    <i class="ki-duotone ki-file-down fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    Unduh
                                </a>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenjang</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" class="form-control form-control-lg form-control-transparent"
                                           value="<?= $laporan['jenjang']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Periode</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" class="form-control form-control-lg form-control-transparent"
                                           value="<?= $laporan['periode_awal'] . '-' . $laporan['periode_akhir'] ?>"
                                           disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <?php if ($laporan['status'] == 0): ?>
                                        <span class="badge badge-light-warning">Menunggu</span>
                                    <?php elseif ($laporan['status'] == 1): ?>
                                        <span class="badge badge-light-success">Diterima</span>
                                    <?php elseif ($laporan['status'] == 2): ?>
                                        <span class="badge badge-light-success">Telah diperbarui</span>
                                    <?php elseif ($laporan['status'] == 99): ?>
                                        <span class="badge badge-light-danger">Ditolak</span>
                                    <?php endif; ?>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Keterangan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea class="form-control form-control-lg form-control-transparent"
                                              disabled><?= $laporan['keterangan']; ?></textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">komentar</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea class="form-control form-control-lg form-control-transparent"
                                              disabled><?= $laporan['komentar']; ?></textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>


                    <h3 class="fw-bold m-0">Detail</h3>
                    <hr class="text-muted">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4" id="kt_datatable_siswa">
                        <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-100px rounded-start">NISN</th>
                            <th class="min-w-75px">Nama Siswa</th>
                            <th class="min-w-100px">Tempat, Tanggal Lahir</th>
                            <th class="min-w-200px">Alamat</th>
                            <th class="min-w-100px">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--                        --><?php //dd($detail)?>
                        <?php foreach ($detail as $item): ?>
                            <tr>
                                <td class="ps-4 fw-bold text-muted">
                                    <?= $item['nisn'] ?>
                                </td>
                                <td class="fw-bold"><?= $item['nama_lengkap'] ?></td>
                                <td class="fw-bold"><?= $item['tempat_lahir'] . ', ' . date('d M Y', strtotime($item['tgl_lahir'])) ?></td>
                                <td class="fw-bold"><?= $item['alamat_siswa'] ?></td>
                                <td>
                                    <?php if ($item['status_verifikasi'] == '1'): ?>
                                        <span class="badge badge-light-success">Diterima</span>
                                    <?php elseif ($item['status_verifikasi'] == '0'): ?>
                                        <span class="badge badge-light-warning">Belum ditentukan</span>
                                    <?php else: ?>
                                        <span class="badge badge-light-danger">Belum diterima</span>
                                    <?php endif; ?>
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

    <div class="modal fade" id="kt_modal_perbarui" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/perbarui/' . $laporan['id']); ?>
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
                                <textarea class="form-control form-control-solid" name="keterangan" id="keterangan" rows="3"><?= $laporan['keterangan'] ?></textarea>
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

    <div class="modal fade" id="kt_modal_tolak" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/tolak/' . $laporan['id']); ?>
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
                                <textarea class="form-control form-control-solid" name="komentar" id="komentar" rows="3"><?= $laporan['komentar'] ?></textarea>
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

    <div class="modal fade" id="kt_modal_terima" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/laporan/terima/' . $laporan['id']); ?>
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
                                <textarea class="form-control form-control-solid" name="komentar" id="komentar" rows="3"><?= $laporan['komentar'] ?></textarea>
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

<?= $this->endSection(); ?>