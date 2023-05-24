<div class="modal fade" id="kt_modal_pendidikan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <?= form_open('/panel/helpers/pendidikan'); ?>
            <?= csrf_field(); ?>
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Tambah Pendidikan Orang Tua</h2>
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
                    <label class="required fs-5 fw-semibold mb-2">Deskripsi</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="" name="description" required/>
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
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Modal footer-->
            <?= form_close(); ?>
            <!--end::Form-->
        </div>
    </div>
</div>

<?php foreach ($pendidikan as $entity):?>
<div class="modal fade" id="kt_modal_pendidikan_<?=$entity['id'];?>" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <?= form_open('/panel/helpers/pendidikan/'.$entity['id']); ?>
            <?= csrf_field(); ?>
            <?= form_hidden('_method', 'PUT'); ?>
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ubah Pendidikan Orang Tua</h2>
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
                    <label class="required fs-5 fw-semibold mb-2">Deskripsi</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="" name="description" value="<?=$entity['description'];?>" required/>
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
<?php endforeach;?>