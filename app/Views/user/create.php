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

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                 data-bs-target="#kt_account_profile_details" aria-expanded="true"
                 aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0"><?= $title; ?></h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <?= form_open('/panel/user'); ?>
                <?= csrf_field(); ?>
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="fullname"
                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('fullname') ? 'is-invalid' : ''; ?>"
                                   placeholder="Nama lengkap pengguna"
                                   value="<?= old('fullname') ?>" required/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('fullname'); ?>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Username</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="username"
                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('username') ? 'is-invalid' : ''; ?>"
                                   placeholder="username tanpa spasi"
                                   value="<?= old('username') ?>" required/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('username'); ?>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="email" name="email"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('email') ? 'is-invalid' : ''; ?>"
                                           placeholder="contoh@email.com"
                                           value="<?= old('email') ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('email'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <select name="group" aria-label="Pilih group role" data-control="select2"
                                            data-placeholder="Pilih group role.."
                                            class="form-select form-select-solid form-select-lg <?= validation_show_error('group') ? 'is-invalid' : ''; ?>">
                                        <option value="">Pilih group role..</option>
                                        <?php foreach ($groups as $group) : ?>
                                            <option data-bs-offset="-39600"
                                                    value="<?= $group->name; ?>" <?= old('group') == $group->name ? 'selected':'' ?>><?= $group->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <div class="invalid-feedback">
                                        <?= validation_show_error('group'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="password" name="password"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('password') ? 'is-invalid' : ''; ?>"
                                           placeholder="Password" required autocomplete="false"/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('password'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="password" name="pass_confirm"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('password_confirm') ? 'is-invalid' : ''; ?>"
                                           placeholder="Konfirmasi password" required autocomplete="false"/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('password_confirm'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan
                    </button>
                </div>
                <!--end::Actions-->
                <?= form_close(); ?>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->

<?= $this->endSection(); ?>
