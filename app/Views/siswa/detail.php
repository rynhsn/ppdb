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
        <div class="card  mb-3 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                 data-bs-target="#kt_account_profile_details" aria-expanded="true"
                 aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Data Calon Siswa</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <?= form_open('/panel/calon-siswa/update/' . $siswa['id']); ?>
                <?= csrf_field(); ?>
                <?= form_hidden('_method', 'PUT'); ?>
                <?= form_hidden('id', $siswa['id']); ?>
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-3">
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
                                    data-allow-clear="true">
                                <option></option>
                                <?php foreach ($jenjang as $item): ?>
                                    <option
                                            value="<?= $item['description'] ?>" <?= $siswa['jenjang_daftar'] == $item['description'] ? 'selected' : '' ?>><?= $item['description'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="fw-bold m-0">Biodata</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="row mb-3">
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
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">NISN</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="nisn" maxlength="10" minlength="10"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nisn') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nisn') ?? $siswa['nisn']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nisn'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">NIK</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="nik" maxlength="16" minlength="16"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nik') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nik') ?? $siswa['nik']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nik'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="nama_lengkap"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('nama_lengkap') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('nama_lengkap') ?? $siswa['nama_lengkap']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('nama_lengkap'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Kelamin</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <?php foreach (JENIS_KELAMIN as $jk): ?>
                                    <div class="col-lg-4 fv-row">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" name="jk" type="radio"
                                                   value="<?= $jk ?>" <?= $siswa['jk'] == $jk ? 'checked' : '' ?>/>
                                            <span class="form-check-label"><?= $jk ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
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
                                                   required/>
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
                                                   required/>
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
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Agama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="agama"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true">
                                        <option></option>
                                        <?php foreach (AGAMA as $agama): ?>
                                            <option
                                                    value="<?= $agama ?>" <?= ($agama == $siswa['agama']) ? 'selected' : '' ?>><?= $agama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('agama'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold m-0">Alamat</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea name="alamat_siswa" maxlength="255" minlength="5"
                                              class="form-control form-control-lg form-control-solid <?= validation_show_error('alamat_siswa') ? 'is-invalid' : ''; ?>"
                                              required><?= old('alamat_siswa') ?? $siswa['alamat_siswa']; ?>
                                    </textarea>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('alamat_siswa'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Tinggal</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="jenis_tinggal"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true">
                                        <option></option>
                                        <?php foreach (JENIS_TINGGAL as $jenis_tinggal): ?>
                                            <option
                                                    value="<?= $jenis_tinggal ?>" <?= ($jenis_tinggal == $siswa['jenis_tinggal']) ? 'selected' : '' ?>><?= $jenis_tinggal ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('jenis_tinggal'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Desa/Kelurahan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="desa"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('desa') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('desa') ?? $siswa['desa']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('desa'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kecamatan</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kec"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('kec') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('kec') ?? $siswa['kec']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('kec'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kabupaten/Kota</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kab"
                                           class="form-control form-control-lg form-control-solid <?= validation_show_error('kab') ? 'is-invalid' : ''; ?>"
                                           value="<?= old('kab') ?? $siswa['kab']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('kab'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Provinsi</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="prov"
                                            class="form-select form-select-lg form-select-solid"
                                            data-control="select2" data-placeholder="Pilih..."
                                            data-allow-clear="true">
                                        <option></option>
                                        <?php foreach (PROVINSI as $prov): ?>
                                            <option
                                                    value="<?= $prov ?>" <?= ($prov == $siswa['prov']) ? 'selected' : '' ?>><?= $prov ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('jenis_tinggal'); ?>
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-3">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Kode Pos</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="kode_pos" maxlength="5" minlength="5"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 <?= validation_show_error('kode_pos') ? 'is-invalid' : ''; ?>"
                                           placeholder="Nama kepala lembaga"
                                           value="<?= old('kode_pos') ?? $siswa['kode_pos']; ?>" required/>
                                    <div class="invalid-feedback">
                                        <?= validation_show_error('kode_pos'); ?>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr class="text-muted">
                            <h3 class="fw-bold mt-10">Orang Tua</h3>
                            <hr class="text-muted">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!--begin::Label-->
                                        <label class="form-label required fw-semibold fs-6" for="no_hp_ortu">No. Hp
                                            Orang Tua</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="col-lg-5">
                                        <!--begin::Input-->
                                        <input name="no_hp_ortu" id="no_hp_ortu" maxlength="16"
                                               minlength="9"
                                               type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_hp_ortu'] ?>" required/>
                                        <!--end::Input-->
                                        <div class="invalid-feedback">
                                            <?= validation_show_error('no_hp_ortu'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nama_ayah">Nama Ayah</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="col-lg-5">
                                        <!--begin::Input-->
                                        <input name="nama_ayah" id="nama_ayah" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_ayah'] ?>" required/>
                                        <!--end::Input-->
                                        <div class="invalid-feedback">
                                            <?= validation_show_error('nama_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nama_ibu">Nama Ibu</label>
                                        <!--end::Label-->
                                    </div>
                                    <div class="col-lg-5">
                                        <!--begin::Input-->
                                        <input name="nama_ibu" id="nama_ibu" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_ibu'] ?>" required/>
                                        <!--end::Input-->
                                        <div class="invalid-feedback">
                                            <?= validation_show_error('nama_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row">

                        <hr class="text-muted">
                        <h3 class="fw-bold mt-10">Asal Sekolah</h3>
                        <hr class="text-muted">

                        <div class="col-lg-12">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label required" for="nama_sekolah">Nama
                                        Sekolah</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="nama_sekolah" id="nama_sekolah" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['nama_sekolah'] ?>" required/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 form-label required" for="lokasi_sekolah">Alamat</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <textarea name="lokasi_sekolah" id="lokasi_sekolah"
                                                  class="form-control form-control-lg form-control-solid"
                                                  rows="3" required><?= $siswa['lokasi_sekolah'] ?></textarea>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label" for="no_un">No. Ujian Nasional</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_un" id="no_un" type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_un'] ?>"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label" for="no_seri_ijazah">No. Seri Ijazah</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_seri_ijazah" id="no_seri_ijazah" type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_un'] ?>"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label" for="no_seri_skhun">No. Seri SKHUN</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="no_seri_skhun" id="no_seri_skhun" type="number"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_un'] ?>"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label" for="sttb_lulus">No. STTB / Tahun Lulus</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <input name="sttb_lulus" id="sttb_lulus" type="text"
                                               class="form-control form-control-lg form-control-solid"
                                               value="<?= $siswa['no_un'] ?>"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row">

                        <hr class="text-muted">
                        <h3 class="fw-bold mt-10">Berkas-berkas</h3>
                        <hr class="text-muted">

                        <div class="col-lg-12">
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">Surat Kelulusan</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/sk/<?= $siswa['file_surat_kelulusan'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">Kartu Keluarga</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/kk/<?= $siswa['file_kk'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">KTP Ayah</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/ktp_ayah/<?= $siswa['file_ktp_ayah'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">KTP Ibu</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/ktp_ibu/<?= $siswa['file_ktp_ibu'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">Akta Kelahiran</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/akta/<?= $siswa['file_akta'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">Pas Foto</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/foto/<?= $siswa['file_foto'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">Ijazah</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/ijazah/<?= $siswa['file_ijazah'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-3">
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label">KIP</label>
                                    <!--end::Label-->
                                    <div class="col">
                                        <!--begin::Input-->
                                        <a href="<?= base_url() ?>uploads/kip/<?= $siswa['file_kip'] ?>"
                                           class="btn btn-sm btn-light btn-primary" target="_blank">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <i class="path1"></i>
                                                <i class="path2"></i>
                                            </i>Lihat
                                        </a>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
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
