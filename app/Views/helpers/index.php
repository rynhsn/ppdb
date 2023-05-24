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
                <?= $title; ?></h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?= $title; ?>"
                       class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted"><?= $title; ?></li>
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
                                    <th class="p-0 min-w-200px"></th>
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
                                    <th class="p-0 min-w-200px"></th>
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
                                            <?= form_open('/helpers/kompetensi/' . $entity['id'], ['class' => 'd-inline']) ?>
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
                                    <th class="p-0 min-w-200px"></th>
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
                                            <?= form_open('/helpers/penghasilan/' . $entity['id'], ['class' => 'd-inline']) ?>
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
                                    <th class="p-0 min-w-200px"></th>
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
                                            <?= form_open('/helpers/pendidikan/' . $entity['id'], ['class' => 'd-inline']) ?>
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
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-40px"></th>
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
                                            <?= form_open('/helpers/pekerjaan/' . $entity['id'], ['class' => 'd-inline']) ?>
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