<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">

        <!--begin::Basic info-->
        <div class="card  mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Data Calon Siswa</h3>
                </div>
                <!--end::Card title-->

                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                     data-bs-trigger="hover" data-bs-original-title="Unduh Biodata"
                     data-kt-initialized="1">
                    <a href="<?=base_url('panel/cetak-biodata')?>" class="btn btn-sm btn-light btn-warning">
                        <i class="ki-duotone ki-file-down fs-2">
                            <i class="path1"></i>
                            <i class="path2"></i>
                        </i>Unduh</a>
                </div>
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-10">
                        <div class="col-lg-3">
                            <!--begin::Label-->
                            <label class="form-label required fw-semibold fs-6" for="jenjang_daftar">Jenjang pendidikan
                                yang dipilih</label>
                            <!--end::Label-->
                        </div>
                        <div class="col-lg-3">
                            <!--begin::Input-->
                            <select name="jenjang_daftar" id="jenjang_daftar"
                                    class="form-select form-select-lg form-select-solid"
                                    data-control="select2" data-placeholder="Pilih..."
                                    data-allow-clear="true" disabled>
                                <option></option>
                                <?php foreach ($jenjang as $item): ?>
                                    <option
                                        value="<?= $item['description'] ?>" <?= $siswa['jenjang_daftar'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!--end::Input-->
                        </div>
                        <div class="col-lg ms-20">
                            <!--begin::Label-->
                            <h1>Status Pembayaran</h1>
                            <!--end::Label-->
                            <span
                                class="badge badge-light-<?= STATUS_PEMBAYARAN[$siswa['status_pendaftaran']][1] ?>"><?= STATUS_PEMBAYARAN[$siswa['status_pendaftaran']][0] ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fw-bold m-0">Biodata</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Pendaftaran</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="no_pendaftaran"
                                           class="form-control form-control-lg form-control-solid"
                                           value="<?= $siswa['no_pendaftaran']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">NISN</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="nisn" maxlength="10" minlength="10"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nisn') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nisn') ?? $siswa['nisn']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">NIK</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="nik" maxlength="16" minlength="16"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nik') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nik') ?? $siswa['nik']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="nama_lengkap"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nama_lengkap') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nama_lengkap') ?? $siswa['nama_lengkap']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Kelamin</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <?php foreach (JENIS_KELAMIN as $jk): ?>
                                    <div class="col-lg-4 fv-row">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" name="jk" type="radio"
                                                   value="<?= $jk ?>" <?= $siswa['jk'] == $jk ? 'checked' : '' ?>
                                                   disabled/>
                                            <span class="form-check-label"><?= $jk ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Lahir</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row">
                                            <input type="text" name="tempat_lahir"
                                                   class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('tempat_lahir') ? 'is-invalid' : ''; ?>"
                                                   value="<?= old('tempat_lahir') ?? $siswa['tempat_lahir']; ?>"
                                                   disabled/>
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('tempat_lahir'); ?>
                                            </div>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row">
                                            <input name="tgl_lahir"
                                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('tgl_lahir') ? 'is-invalid' : ''; ?>"
                                                   id="kt_datepicker_flat"
                                                   value="<?= old('tgl_lahir') ?? $siswa['tgl_lahir']; ?>"
                                                   disabled/>
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('tgl_lahir'); ?>
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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Agama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="agama"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true" disabled>
                                        <option></option>
                                        <?php foreach (AGAMA as $agama): ?>
                                            <option
                                                value="<?= $agama ?>" <?= ($agama == $siswa['agama']) ? 'selected' : '' ?>
                                                disabled><?= $agama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Anak ke-</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-3 fv-row">
                                            <input type="number" name="anak_ke" maxlength="2" minlength="1"
                                                   class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('anak_ke') ? 'is-invalid' : ''; ?>"
                                                   value="<?= old('anak_ke') ?? $siswa['anak_ke']; ?>"
                                                   disabled/>
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('anak_ke'); ?>
                                            </div>
                                        </div>
                                        <!--end::Col-->

                                        <label class="col-lg col-form-label required fw-semibold fs-6">Jumlah
                                            saudara</label>
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row">
                                            <input type="number" name="jml_saudara"
                                                   class="form-control form-control-lg form-control-solid <?= validation_show_error('jml_saudara') ? 'is-invalid' : ''; ?>"
                                                   value="<?= old('jml_saudara') ?? $siswa['jml_saudara']; ?>"
                                                   disabled/>
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('jml_saudara'); ?>
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
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Hp</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="no_hp_siswa" maxlength="13" minlength="10"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('no_hp_siswa') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('no_hp_siswa') ?? $siswa['no_hp_siswa']; ?>" disabled/>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold m-0">Alamat</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea name="alamat_siswa" maxlength="255" minlength="5"
                                              class="form-control form-control-lg form-control-solid <?= validation_show_error('alamat_siswa') ? 'is-invalid' : ''; ?>"
                                              disabled><?= old('alamat_siswa') ?? $siswa['alamat_siswa']; ?>
                                    </textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Tinggal</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="jenis_tinggal"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true" disabled>
                                        <option></option>
                                        <?php foreach (JENIS_TINGGAL as $jenis_tinggal): ?>
                                            <option
                                                value="<?= $jenis_tinggal ?>" <?= ($jenis_tinggal == $siswa['jenis_tinggal']) ? 'selected' : '' ?>><?= $jenis_tinggal ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Desa/Kelurahan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="desa"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('desa') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('desa') ?? $siswa['desa']; ?>" disabled/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kecamatan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kec"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('kec') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('kec') ?? $siswa['kec']; ?>" disabled/>
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
                                    <input type="text" name="kab"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('kab') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('kab') ?? $siswa['kab']; ?>" disabled/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Provinsi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="prov"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true" disabled>
                                        <option></option>
                                        <?php foreach (PROVINSI as $prov): ?>
                                            <option
                                                value="<?= $prov ?>" <?= ($prov == $siswa['prov']) ? 'selected' : '' ?>><?= $prov ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kode Pos</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kode_pos" maxlength="5" minlength="5"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('kode_pos') ? 'is-invalid' : ''; ?>"
                                           placeholder="Nama kepala lembaga"
                                           value="<?= old('kode_pos') ?? $siswa['kode_pos']; ?>" disabled/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jarak ke
                                    sekolah</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="jarak"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('jarak') ? 'is-invalid' : ''; ?>"
                                           placeholder="Nama Ketua Panitia"
                                           value="<?= old('jarak') ?? $siswa['jarak']; ?>"
                                           disabled/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kendaraan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="trans"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true" disabled>
                                        <option></option>
                                        <?php foreach (KENDARAAN as $trans): ?>
                                            <option
                                                value="<?= $trans ?>" <?= ($trans == $siswa['trans']) ? 'selected' : '' ?>><?= $trans ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr class="text-muted">
                            <h3 class="fw-bold mt-10">Orang Tua / Wali</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row mb-10">
                                    <div class="col-lg-2">
                                        <!--begin::Label-->
                                        <label class="form-label required fw-semibold fs-6" for="no_kk">No. Kartu
                                            Keluarga</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="col-lg-5">
                                        <!--begin::Input-->
                                        <input name="no_kk" id="no_kk" type="text" maxlength="16" minlength="16"
                                               type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_kk'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!--begin::Label-->
                                        <label class="form-label required fw-semibold fs-6" for="no_hp_ortu">No. Hp
                                            Orang Tua / Wali</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="col-lg-5">
                                        <!--begin::Input-->
                                        <input name="no_hp_ortu" id="no_hp_ortu" type="text" maxlength="16"
                                               minlength="9"
                                               type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_hp_ortu'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="row">
                                <div class="col-lg-4">
                                    <h3 class="fw-bold m-0 mt-5">Data Ayah</h3>
                                    <hr class="text-muted">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nama_ayah">Nama Ayah</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="nama_ayah" id="nama_ayah" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_ayah'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nik_ayah">NIK</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="nik_ayah" id="nik_ayah" type="text"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['nik_ayah'] ?>" disabled/>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('nik_ayah'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required"
                                               for="pekerjaan_ayah">Pekerjaan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pekerjaan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>" <?= $siswa['pekerjaan_ayah'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('pekerjaan_ayah'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="pdd_ayah">Pendidikan
                                            Terakhir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pdd_ayah" id="pdd_ayah"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pendidikan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['pdd_ayah'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('pdd_ayah'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required"
                                               for="penghasilan_ayah">Penghasilan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="penghasilan_ayah" id="penghasilan_ayah"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($penghasilan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['penghasilan_ayah'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('penghasilan_ayah'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!-- Status Hidup Ayah -->
                                    <div class="fv-row mb-10">
                                        <label class="form-label required" for="status_ayah">Status
                                            Ayah</label>
                                        <div class="col">
                                            <select name="status_ayah" id="status_ayah"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <option
                                                    value="Hidup" <?= $siswa['status_ayah'] == 'Hidup' ? 'selected' : '' ?>>
                                                    Hidup
                                                </option>
                                                <option
                                                    value="Meninggal" <?= $siswa['status_ayah'] == 'Meninggal' ? 'selected' : '' ?>>
                                                    Meninggal
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Status Hidup Ayah -->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="th_lahir_ayah">Tahun
                                            Lahir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="th_lahir_ayah" id="th_lahir_ayah" type="number" minlength="4"
                                                   maxlength="4"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['th_lahir_ayah'] ?>" disabled/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="fw-bold m-0 mt-5">Data Ibu</h3>
                                    <hr class="text-muted">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nama_ibu">Nama Ibu</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="nama_ibu" id="nama_ibu" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_ibu'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nik_ibu">NIK</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="nik_ibu" id="nik_ibu" type="text"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['nik_ibu'] ?>" disabled/>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('nik_ibu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required"
                                               for="pekerjaan_ibu">Pekerjaan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pekerjaan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>" <?= $siswa['pekerjaan_ibu'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('pekerjaan_ibu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="pdd_ibu">Pendidikan
                                            Terakhir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pdd_ibu" id="pdd_ibu"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pendidikan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['pdd_ibu'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('pdd_ibu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required"
                                               for="penghasilan_ibu">Penghasilan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="penghasilan_ibu" id="penghasilan_ibu"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($penghasilan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['penghasilan_ibu'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                            <div class="invalid-feedback">
                                                <?= validation_show_error('penghasilan_ibu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!-- Status Hidup Ibu -->
                                    <div class="fv-row mb-10">
                                        <label class="form-label required" for="status_ibu">Status
                                            Ibu</label>
                                        <div class="col">
                                            <select name="status_ibu" id="status_ibu"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <option
                                                    value="Hidup" <?= $siswa['status_ibu'] == 'Hidup' ? 'selected' : '' ?>>
                                                    Hidup
                                                </option>
                                                <option
                                                    value="Meninggal" <?= $siswa['status_ibu'] == 'Meninggal' ? 'selected' : '' ?>>
                                                    Meninggal
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Status Hidup Ibu -->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="th_lahir_ibu">Tahun
                                            Lahir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="th_lahir_ibu" id="th_lahir_ibu" type="number" minlength="4"
                                                   maxlength="4"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['th_lahir_ibu'] ?>" disabled/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="fw-bold m-0 mt-5">Data Wali</h3>
                                    <hr class="text-muted">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label" for="nama_wali">Nama Wali</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="nama_wali" id="nama_wali" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_wali'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label" for="nik_wali">NIK</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="nik_wali" id="nik_wali" type="text"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['nik_wali'] ?>" disabled/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label"
                                               for="pekerjaan_wali">Pekerjaan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pekerjaan_wali" id="pekerjaan_wali"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pekerjaan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>" <?= $siswa['pekerjaan_wali'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label" for="pdd_wali">Pendidikan
                                            Terakhir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="pdd_wali" id="pdd_wali"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($pendidikan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['pdd_wali'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label"
                                               for="penghasilan_wali">Penghasilan</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <select name="penghasilan_wali" id="penghasilan_wali"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Pilih..."
                                                    data-allow-clear="true" disabled>
                                                <option></option>
                                                <?php foreach ($penghasilan as $item): ?>
                                                    <option
                                                        value="<?= $item['description'] ?>"<?= $siswa['penghasilan_wali'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label" for="th_lahir_wali">Tahun
                                            Lahir</label>
                                        <!--end::Label-->
                                        <div class="col">
                                            <!--begin::Input-->
                                            <input name="th_lahir_wali" id="th_lahir_wali" type="number" minlength="4"
                                                   maxlength="4"
                                                   class="form-control form-control-lg form-control-solid"
                                                   value="<?= $siswa['th_lahir_wali'] ?>" disabled/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <hr class="text-muted">
                        <h3 class="fw-bold mt-10">Asal Sekolah</h3>
                        <hr class="text-muted">

                        <div class="col-lg-12">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label required" for="nama_sekolah">Nama
                                        Sekolah</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="nama_sekolah" id="nama_sekolah" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_sekolah'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label required" for="npsn_sekolah">NPSN</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="npsn_sekolah" id="npsn_sekolah" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['npsn_sekolah'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label required" for="lokasi_sekolah">Alamat</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <textarea name="lokasi_sekolah" id="lokasi_sekolah"
                                                  class="form-control form-control-lg form-control-solid"
                                                  rows="3" disabled><?= $siswa['lokasi_sekolah'] ?></textarea>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label" for="no_kks">No. KKS</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_kks" id="no_kks" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_kks'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label" for="no_pkh">No. PKH</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_pkh" id="no_pkh" type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_pkh'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label" for="no_kip">No. KIP</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_kip" id="no_kip" type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_kip'] ?>" disabled/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->

<?= $this->endSection(); ?>















