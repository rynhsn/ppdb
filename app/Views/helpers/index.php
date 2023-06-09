<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">

        <?= validation_list_errors(); ?>

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

        <!--begin::Notice-->
        <div class="notice d-flex bg-light-<?=($statusPpdb['status'] == 'buka')?'success':'danger'?> rounded border-<?=($statusPpdb['status'] == 'buka')?'success':'danger'?> border border-dashed mb-9 p-6">
            <!--begin::Icon-->
            <i class="ki-duotone ki-<?=($statusPpdb['status'] == 'buka')?'check':'cross'?>-square fs-2tx text-<?=($statusPpdb['status'] == 'buka')?'success':'danger'?> me-4">
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
                    <div class="fs-6 text-gray-700">Masih di<?=$statusPpdb['status']?>, terakhir diubah pada <?=$statusPpdb['updated_at']?></div>
                    <!-- tombol -->
                    <div class="d-flex flex-stack mt-3">
                        <?php if($statusPpdb['status'] == 'buka'): ?>
                            <a href="/panel/helpers/status-ppdb/tutup" class="btn btn-sm btn-danger" onclick="return confirm('PPDB Online akan ditutup, yakin?')">Tutup</a>
                        <?php else: ?>
                            <a href="/panel/helpers/status-ppdb/buka" class="btn btn-sm btn-success" onclick="return confirm('PPDB Online akan dibuka, yakin?')">Buka</a>
                        <?php endif; ?>
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->

        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Jenjang Pendidikan</span>
                            <span class="text-muted fw-semibold fs-7">Lembaga</span>
                        </h3>

                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                             data-bs-trigger="hover" data-bs-original-title="Tambah Jenjang Pendidikan Lembaga"
                             data-kt-initialized="1">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_jenjang">
                                <i class="ki-duotone ki-plus fs-2"></i>Baru</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <tr>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-40px"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($jenjang as $entity): ?>
                                    <tr>
                                        <th>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $entity['description']; ?></a>
                                        </th>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_jenjang_<?= $entity['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <?= form_open('/panel/helpers/jenjang/' . $entity['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close();?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--endW::Tables Widget 1-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Kompetensi Pendidikan</span>
                            <span class="text-muted fw-semibold fs-7">Lembaga</span>
                        </h3>

                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                             data-bs-trigger="hover" data-bs-original-title="Tambah Kompetensi Pendidikan Lembaga"
                             data-kt-initialized="1">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_kompetensi">
                                <i class="ki-duotone ki-plus fs-2"></i>Baru</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <tr>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-40px"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($kompetensi as $entity): ?>
                                    <tr>
                                        <th>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $entity['description']; ?></a>
                                        </th>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_kompetensi_<?= $entity['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <?= form_open('/panel/helpers/kompetensi/' . $entity['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                    onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close();?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--endW::Tables Widget 1-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Penghasilan</span>
                            <span class="text-muted fw-semibold fs-7">Orang Tua</span>
                        </h3>

                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                             data-bs-trigger="hover" data-bs-original-title="Tambah Penghasilan Orang Tua"
                             data-kt-initialized="1">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_penghasilan">
                                <i class="ki-duotone ki-plus fs-2"></i>Baru</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <tr>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-40px"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($penghasilan as $entity): ?>
                                    <tr>
                                        <th>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $entity['description']; ?></a>
                                        </th>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_penghasilan_<?= $entity['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <?= form_open('/panel/helpers/penghasilan/' . $entity['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                    onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close();?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--endW::Tables Widget 1-->
            </div>
            <!--end::Col-->

        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Pendidikan</span>
                            <span class="text-muted fw-semibold fs-7">Orang Tua</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                             data-bs-trigger="hover" data-bs-original-title="Tambah Pendidikan Orang Tua"
                             data-kt-initialized="1">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_pendidikan">
                                <i class="ki-duotone ki-plus fs-2"></i>Baru</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_datatable_pendidikan" class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <tr>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-40px"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($pendidikan as $entity): ?>
                                    <tr>
                                        <th>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $entity['description']; ?></a>
                                        </th>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_pendidikan_<?= $entity['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <?= form_open('/panel/helpers/pendidikan/' . $entity['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                    onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close();?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--endW::Tables Widget 1-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Tables Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Pekerjaan</span>
                            <span class="text-muted fw-semibold fs-7">Orang Tua</span>
                        </h3>

                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                             data-bs-trigger="hover" data-bs-original-title="Tambah Pekerjaan Orang Tua"
                             data-kt-initialized="1">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_pekerjaan">
                                <i class="ki-duotone ki-plus fs-2"></i>Baru</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_datatable_pekerjaan" class="table align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <tr>
                                    <th class="p-0 min-w-70px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($pekerjaan as $entity): ?>
                                    <tr>
                                        <th>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $entity['description']; ?></a>
                                        </th>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_pekerjaan_<?= $entity['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <?= form_open('/panel/helpers/pekerjaan/' . $entity['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                    onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close();?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--endW::Tables Widget 1-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
<?= $this->endSection(); ?>