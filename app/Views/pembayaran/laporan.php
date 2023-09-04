<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h3 class="fw-bolder mb-1">Laporan Pembayaran</h3>
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <?= form_open(''); ?>
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="col-2">
                            <!--begin::Label-->
                            <label class="form-label required fw-semibold fs-6" for="jenjang">Jenjang</label>
                            <!--end::Label-->
                        </div>
                        <div class="col-5">
                            <!--begin::Input-->
                            <select name="jenjang" id="jenjang"
                                    class="form-select form-select-lg form-select-solid"
                                    data-control="select2" data-placeholder="Pilih..."
                                    data-allow-clear="true" required >
                                <option></option>
                                <option value="SMP" selected>SMP</option>
                                <option value="SMK">SMK</option>
                                <option value="Madrasah Aliyah">Madrasah Aliyah</option>
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-3">
                        <!--begin::Label-->
                        <label class="col-2 col-form-label required fw-semibold fs-6">Periode</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-5 fv-row">
                            <div class="row mb-2">
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" name="periode" type="radio" value="bulan" checked/>
                                    <span class="form-check-label">Bulan</span>
                                </label>
                            </div>
                            <div class="row mb-2">
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" name="periode" type="radio" value="tahun"/>
                                    <span class="form-check-label">Tahun</span>
                                </label>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-3" id="radioBulan">
                        <div class="col-2">
                            <!--begin::Label-->
                            <label class="form-label required fw-semibold fs-6" for="bulan">Bulan</label>
                            <!--end::Label-->
                        </div>
                        <div class="col-5">
                            <!--begin::Input-->
                            <select name="bulan" id="bulan"
                                    class="form-select form-select-lg form-select-solid"
                                    data-control="select2" data-placeholder="Pilih..."
                                    data-allow-clear="true">
                                <option></option>
                                <option value="01" <?= (date('m') == '01' ? 'selected' : '')?>>Januari</option>
                                <option value="02" <?= (date('m') == '02' ? 'selected' : '')?>>Februari</option>
                                <option value="03" <?= (date('m') == '03' ? 'selected' : '')?>>Maret</option>
                                <option value="04" <?= (date('m') == '04' ? 'selected' : '')?>>April</option>
                                <option value="05" <?= (date('m') == '05' ? 'selected' : '')?>>Mei</option>
                                <option value="06" <?= (date('m') == '06' ? 'selected' : '')?>>Juni</option>
                                <option value="07" <?= (date('m') == '07' ? 'selected' : '')?>>Juli</option>
                                <option value="08" <?= (date('m') == '08' ? 'selected' : '')?>>Agustus</option>
                                <option value="09" <?= (date('m') == '09' ? 'selected' : '')?>>September</option>
                                <option value="10" <?= (date('m') == '10' ? 'selected' : '')?>>Oktober</option>
                                <option value="11" <?= (date('m') == '11' ? 'selected' : '')?>>November</option>
                                <option value="12" <?= (date('m') == '12' ? 'selected' : '')?>>Desember</option>
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--end::Input group-->
                    <div class="row mb-3">
                        <div class="col-2">
                            <!--begin::Label-->
                            <label class="form-label required fw-semibold fs-6" for="tahun">Tahun</label>
                            <!--end::Label-->
                        </div>
                        <div class="col-5">
                            <!--begin::Input-->
                            <select name="tahun" id="tahun"
                                    class="form-select form-select-lg form-select-solid"
                                    data-control="select2" data-placeholder="Pilih..."
                                    data-allow-clear="true">
                                <option></option>
                                <?php for($i = date('Y') - 2; $i <= date('Y') + 2; $i++): ?>
                                    <option value="<?= $i; ?>" <?= date('Y') == $i ? 'selected' : '' ?>><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->

                <!--begin::Modal footer-->
                <div class="card-footer flex-center">
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-success">
                        <span class="indicator-label">Cetak</span>
                    </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

<!--cek apakah periode yang dipilih bulan atau tahun, jika bulan, maka div dengan id radioBulan akan ditampilkan, jika tahun, maka sembunyikan-->

<?= $this->endSection(); ?>