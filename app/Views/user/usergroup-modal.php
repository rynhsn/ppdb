<?php foreach ($users as $user): ?>
    <div class="modal fade" id="kt_modal_usergroup_<?= $user->id; ?>" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <?= form_open('/panel/user/changegroup/' . $user->id); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Ubah user group untuk akun <?= $user->fullname ?></h2>
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
                        <!--begin::Label-->
                        <label class="required fs-5 fw-semibold mb-2">User Group</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="group" aria-label="Pilih group role" data-control="select2"
                                data-placeholder="Pilih group role.."
                                class="form-select form-select-solid form-select-lg <?= validation_show_error('group') ? 'is-invalid' : ''; ?>" required>
                            <option value="">Pilih group role..</option>
                            <?php foreach ($groups as $group) : ?>
                                <option data-bs-offset="-39600"
                                        value="<?= $group->id; ?>" <?= $user->group_name == $group->name ? 'selected' : '' ?>><?= $group->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!--end::Input-->
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
                    <button type="submit" class="btn btn-primary">
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
<?php endforeach; ?>