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
                <?= form_open_multipart('panel/lembaga'); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <?= form_hidden('imageLama', $lembaga['logo']); ?>
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                 style="background-image: url('<?= base_url(); ?>/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                     style="background-image: url(<?= base_url(); ?>/media/logos/<?= $lembaga['logo']; ?>)"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="avatar_remove"/>
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																	<i class="ki-duotone ki-cross fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <?php if (validation_show_error('image')): ?>
                                <div class="form-text text-danger"><?= validation_show_error('image'); ?></div>
                            <?php endif; ?>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lembaga</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="nama_lembaga"
                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('nama_lembaga') ? 'is-invalid' : ''; ?>"
                                   placeholder="Nama lembaga penyelenggara"
                                   value="<?= old('nama_lembaga') ?? $lembaga['nama_lembaga']; ?>" required/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('nama_lembaga'); ?>
                            </div>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea name="alamat"
                                      class="form-control form-control-lg form-control-solid <?= validation_show_error('alamat') ? 'is-invalid' : ''; ?>"
                                      placeholder="Alamat lembaga"
                                      required><?= old('alamat') ?? $lembaga['alamat']; ?></textarea>
                            <div class="invalid-feedback">
                                <?= validation_show_error('alamat'); ?>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kabupaten/Kota</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="kab_lembaga"
                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('kab_lembaga') ? 'is-invalid' : ''; ?>"
                                   placeholder="Kabupaten/Kota lembaga penyelenggara"
                                   value="<?= old('kab_lembaga') ?? $lembaga['kab_lembaga']; ?>" required/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('kab_lembaga'); ?>
                            </div>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kontak</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="email" name="email"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('email') ? 'is-invalid' : ''; ?>"
                                           placeholder="contoh@lembaga.sch.id"
                                           value="<?= old('email') ?? $lembaga['email']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('email'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="telp"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('telp') ? 'is-invalid' : ''; ?>"
                                           placeholder="(021) 1234567" value="<?= old('telp') ?? $lembaga['telp']; ?>"
                                           required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('telp'); ?>
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
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Website</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="website"
                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('website') ? 'is-invalid' : ''; ?>"
                                   placeholder="https://contoh.sch.id"
                                   value="<?= old('website') ?? $lembaga['website']; ?>" required/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('website'); ?>
                            </div>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kepala Lembaga</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="kepsek"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('kepsek') ? 'is-invalid' : ''; ?>"
                                           placeholder="Nama kepala lembaga"
                                           value="<?= old('kepsek') ?? $lembaga['kepsek']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('kepsek'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="nip_kepsek"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nip_kepsek') ? 'is-invalid' : ''; ?>"
                                           placeholder="NIP kepala lembaga"
                                           value="<?= old('nip_kepsek') ?? $lembaga['nip_kepsek']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nip_kepsek'); ?>
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
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Ketua Panitia</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="ketua_panitia"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('ketua_panitia') ? 'is-invalid' : ''; ?>"
                                           placeholder="Nama Ketua Panitia"
                                           value="<?= old('ketua_panitia') ?? $lembaga['ketua_panitia']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('ketua_panitia'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="nip_ketua"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nip_ketua') ? 'is-invalid' : ''; ?>"
                                           placeholder="NIP Ketua Panitia"
                                           value="<?= old('nip_ketua') ?? $lembaga['nip_ketua']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nip_ketua'); ?>
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
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="no_surat"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('no_surat') ? 'is-invalid' : ''; ?>"
                                           placeholder="No. Surat PPDB"
                                           value="<?= old('no_surat') ?? $lembaga['no_surat']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('no_surat'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="th_pelajaran"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('th_pelajaran') ? 'is-invalid' : ''; ?>"
                                           placeholder="Tahun ajaran"
                                           value="<?= old('th_pelajaran') ?? $lembaga['th_pelajaran']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('th_pelajaran'); ?>
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
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
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
