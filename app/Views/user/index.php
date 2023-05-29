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

            <!--begin::Tables Widget 11-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Pengguna</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Pengguna terdaftar</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="<?= base_url() ?>panel/user/create" class="btn btn-sm btn-light-primary">
                            <i class="ki-duotone ki-plus fs-2"></i>Daftarkan</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="card  card-p-0 card-flush border-0 bg-transparent">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-filter="search"
                                           class="form-control form-control-solid w-250px ps-14"
                                           placeholder="Cari Pengguna"/>
                                </div>
                                <!--end::Search-->
                                <!--begin::Export buttons-->
                                <div id="kt_datatable_example_1_export" class="d-none"></div>
                                <!--end::Export buttons-->
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Export dropdown-->
                                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Export Pengguna
                                </button>
                                <!--begin::Menu-->
                                <div id="kt_datatable_users_export_menu"
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
                                <div id="kt_datatable_users_buttons" class="d-none"></div>
                                <!--end::Hide default export buttons-->
                            </div>
                        </div>
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4" id="kt_datatable_users">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 min-w-325px rounded-start">Pengguna</th>
                                    <th class="min-w-200px">Email</th>
                                    <th class="min-w-50px">Grup</th>
                                    <th class="min-w-50px">Aktif?</th>
                                    <th class="min-w-125px text-end rounded-end"></th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="<?= base_url() ?>/media/stock/600x400/img-26.jpg" class=""
                                                         alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bold text-hover-primary mb-1 fs-6"><?= $user->fullname ?></a>
                                                    <span
                                                        class="text-muted fw-semibold text-muted d-block fs-7"><?= $user->username ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"><?= $user->email ?></a>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"><?= $user->group_name ?></a>
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-light-<?= $user->active ? 'success' : 'danger' ?> fs-7 fw-bold"><?= $user->active ? 'Aktif' : 'Tidak Aktif' ?></span>
                                        </td>
                                        <td class="text-end">
                                            <?= form_open('/panel/user/setactive', ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?= $user->id ?>">
                                            <input type="hidden" name="active" value="<?= $user->active ? 0 : 1 ?>">
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-<?= $user->active ? 'toggle-on-circle' : 'toggle-off-circle' ?> fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <?= form_close(); ?>

                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_usergroup_<?= $user->id; ?>">
                                                <i class="ki-duotone ki-shield fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>

                                            <a href="<?= base_url('/panel/user/edit/' . $user->username) ?>"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>

                                            <?= form_open('/panel/user/' . $user->username, ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    onclick="return confirm('pengguna akan dihapus, yakin?')"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close(); ?>
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
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 11-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>