<?= $this->extend('home/layouts/index'); ?>
<?= $this->section('content'); ?>
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Multi-steps-->
        <div
                class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
                id="kt_create_account_stepper">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div
                        class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center"
                        style="background-image: url(<?= base_url() ?>/media/misc/auth-bg.png)">
                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Ketentuan</h3>
                                        <div class="stepper-desc fw-normal">Pendaftaran</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Jenjang</h3>
                                        <div class="stepper-desc fw-normal">Pilih salah satu jenjang pendidikan</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Biodata</h3>
                                        <div class="stepper-desc fw-normal">Biodata calon peserta didik baru</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Berkas</h3>
                                        <div class="stepper-desc fw-normal">Upload berkas persyaratan</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Konfirmasi</h3>
                                        <div class="stepper-desc fw-normal"></div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Step 6-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">6</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Selesai</h3>
                                        <div class="stepper-desc fw-normal"></div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 6-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" enctype="multipart/form-data" action="<?= base_url('daftar') ?>" method="post">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark">Ketentuan
                                            Pendaftaran</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Setujui ketentuan pendaftaran untuk
                                            melanjutkan.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row mb-5 pb-lg-5">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark mb-7">Ketentuan Pendaftaran:</h2>
                                        <!--end::Title-->
                                        <!--begin::List-->
                                        <ul>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Calon Peserta Didik Baru hanya diijinkan mendaftar sekali, dan setelah terdaftar tidak dapat membatalkan pendaftaran.</span>
                                            </li>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Calon Peserta Didik Baru hanya dapat memilih 1 (satu) jenis satuan Pendidikan tujuan saja yaitu SMP, SMK atau Madrasah Aliyah.</span>
                                            </li>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Calon Peserta Didik Baru yang diterima, wajib menaati peraturan Pondok Pesantren yang berlaku.</span>
                                            </li>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Calon Peserta Didik Baru yang telah diterima wajib mendaftar ulang dengan menyerahkan tanda bukti pendaftaran dan berkas yang sudah diunggah (upload).</span>
                                            </li>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Dokumen yang diunggah (upload) adalah sesuai dengan dokumen asli, calon Peserta Didik tidak boleh menambah atau mengurangi dokumen asli.</span>
                                            </li>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">Memiliki Surat Keterangan Kelulusan yang dikeluarkan oleh sekolah asal dengan menunjukkan aslinya saat verifikasi berkas fisik.</span>
                                            </li>
                                        </ul>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg">
                                                <div
                                                        class="form-check form-check-sm form-check-custom form-check-success form-check-solid me-3">
                                                    <!--begin::Option-->
                                                    <input type="checkbox" class="form-check-input"
                                                           name="syarat_ketentuan"
                                                           id="syarat_ketentuan"/>
                                                    <label class="form-check-label text-gray-600 fs-6"
                                                           for="syarat_ketentuan">
                                                        Ya, saya setuju dengan ketentuan PPDB.
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step jenjang-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Jenjang</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Pilih salah satu jenjang pendidikan
                                            yang diinginkan.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <?php foreach ($jenjang as $d): ?>
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="jenjang"
                                                           value="<?= $d['description'] ?>"
                                                           id="<?= $d['description'] ?>"/>
                                                    <label
                                                            class="btn btn-outline btn-outline-success btn-outline-dashed btn-active-light-success p-7 d-flex align-items-center mb-10"
                                                            for="<?= $d['description'] ?>">
                                                        <i class="ki-duotone ki-teacher fs-3x me-5">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Info-->
                                                        <span class="d-block fw-semibold text-start">
															<span
                                                                    class="text-dark fw-bold d-block fs-4 mb-2"><?= $d['description'] ?></span>
														</span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                            <?php endforeach; ?>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step jenjang-->
                            <!--begin::Step Biodata-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Biodata</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Silahkan isi biodata calon peserta
                                            didik dengan benar.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="nama_lengkap">Nama Lengkap</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="nama_lengkap" id="nama_lengkap" type="text"
                                               class="form-control form-control-lg form-control-solid"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="nisn">NISN</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="nisn" id="nisn" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="nik">NIK</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="nik" id="nik" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label required">Jenis Kelamin</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row mb-2">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="jk" value="Laki-laki"
                                                       id="laki-laki"/>
                                                <label
                                                        class="btn btn-outline btn-outline-success btn-outline-dashed btn-active-light-success w-100 p-4"
                                                        for="laki-laki">
                                                    <span class="fw-bold fs-3">Laki-laki</span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="jk" value="Perempuan"
                                                       id="perempuan"/>
                                                <label
                                                        class="btn btn-outline btn-outline-danger btn-outline-dashed btn-active-light-danger w-100 p-4"
                                                        for="perempuan">
                                                    <span class="fw-bold fs-3">Perempuan</span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="tempat_lahir">Tempat
                                                    Lahir</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="tempat_lahir" id="tempat_lahir" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="kt_datepicker_flat">Tanggal
                                                    Lahir</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input placeholder="Pilih tanggal" name="tgl_lahir"
                                                       id="kt_datepicker_flat"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="agama">Agama</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="agama"
                                                class="form-select form-select-lg form-select-solid"
                                                data-control="select2" data-placeholder="Pilih..."
                                                data-allow-clear="true">
                                            <option></option>
                                            <?php foreach (AGAMA as $agama): ?>
                                                <option value="<?= $agama ?>"><?= $agama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="alamat">Alamat Lengkap</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <textarea name="alamat" id="alamat"
                                                          class="form-control form-control-lg form-control-solid"
                                                          rows="3"></textarea>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="jenis_tinggal">Jenis
                                                    Tinggal</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="jenis_tinggal"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach (JENIS_TINGGAL as $jt): ?>
                                                        <option value="<?= $jt ?>"><?= $jt ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="desa">Desa/Kelurahan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="desa" id="desa" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="kecamatan">Kecamatan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="kecamatan" id="kecamatan" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required"
                                                       for="kabupaten">Kabupaten/Kota</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="kabupaten" id="kabupaten" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="provinsi">Provinsi</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <select name="provinsi"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>

                                                    <?php foreach (PROVINSI as $prov): ?>
                                                        <option value="<?= $prov ?>"><?= $prov ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required"
                                                       for="kode_pos">Kode Pos</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="kode_pos" id="kode_pos" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Title-->
                                    <h2 class="fw-bold text-dark">Data Sekolah Asal</h2>
                                    <!--end::Title-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="nama_sekolah">Nama
                                                    Sekolah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nama_sekolah" id="nama_sekolah" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="lokasi_sekolah">Alamat
                                                    Sekolah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <textarea name="lokasi_sekolah" id="lokasi_sekolah"
                                                          class="form-control form-control-lg form-control-solid"
                                                          rows="3"></textarea>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="no_un">No. Ujian Nasional</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no_un" id="no_un" type="number"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="no_seri_ijazah">No. Seri Ijazah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no_seri_ijazah" id="no_seri_ijazah" type="number"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="sttb_lulus">No. STTB/Tahun Lulus</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="sttb_lulus" id="sttb_lulus" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="no-seri_skhun">No. Seri SKHUN</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no-seri_skhun" id="no-seri_skhun" type="number"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Title-->
                                    <h2 class="fw-bold text-dark">Nama Orang Tua</h2>
                                    <!--end::Title-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="nama_ayah">Nama Ayah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nama_ayah" id="nama_ayah" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="nama_ibu">Nama Ibu</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nama_ibu" id="nama_ibu" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="no_telp">No. Telepon</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no_telp" id="no_telp" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">Jika tidak ada, boleh masukkan no. telepon orang
                                                    tua/wali
                                                </div>
                                                <!--end::Hint-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Biodata-->

                            <!--begin::Step Asal Sekolah-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Unggah Berkas</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Silahkan unggah berkas yang sesuai
                                            dengan form.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_surat_kelulusan">Surat Kelulusan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_surat_kelulusan" id="file_surat_kelulusan" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_kk">Kartu Keluarga</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_kk" id="file_kk" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_ktp_ayah">KTP Ayah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_ktp_ayah" id="file_ktp_ayah" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_ktp_ibu">KTP Ibu</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_ktp_ibu" id="file_ktp_ibu" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_akta">Akta Kelahiran</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_akta" id="file_akta" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="file_foto">Pas Foto</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_foto" id="file_foto" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*" required/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="file_ijazah">Ijazah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_ijazah" id="file_ijazah" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="file_kip">KIP</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="file_kip" id="file_kip" type="file"
                                                       class="form-control form-control-lg form-control-solid" accept="image/*"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Asal Sekolah-->
                            <!--begin::Step Konfirmasi-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark">Konfirmasi</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Langkah terakhir.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row mb-5 pb-lg-5">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark mb-7">Konfirmasi Data Calon Peserta Didik:</h2>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fs-4 fw-semibold text-gray-700 mb-13">Proses pendaftaran PPDB
                                            Online <?= $lembaga['nama_lembaga'] ?> hampir selesai. Silahkan periksa
                                            kembali data yang telah diisi sebelum melanjutkan ke tahap selanjutnya.
                                        </div>
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg">
                                                <div
                                                        class="form-check form-check-sm form-check-custom form-check-success form-check-solid me-3">
                                                    <!--begin::Option-->
                                                    <input type="checkbox" class="form-check-input"
                                                           name="konfirmasi"
                                                           id="konfirmasi"/>
                                                    <label class="form-check-label text-gray-600 fs-6"
                                                           for="konfirmasi">
                                                        Data sudah sesuai, lanjutkan.
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Konfirmasi-->
                            <!--begin::Step selesai-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100" id="berhasil">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Berhasil!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Harap simpan No. Pendaftaran dan
                                            password dengan baik.
                                            <a href="<?= base_url('login') ?>"
                                               class="link-primary fw-bold">Masuk</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">Untuk masuk, anda memerlukan No.
                                            Pendaftaran yang digunakan sebagai username dan NISN yang digunakan
                                            sebagai password.
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                                class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Harap simpan username dan
                                                        password!</h4>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="fs-6 text-gray-700">Username</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="fs-6 text-gray-700"
                                                                 id="username_siswa"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="fs-6 text-gray-700">Password</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="fs-6 text-gray-700"
                                                                 id="password_siswa"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="fs-6 text-gray-700">
                                                                <a href="<?= base_url('login') ?>"
                                                                   class="link-primary fw-bold">Masuk</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div class="w-100 d-none" id="gagal">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Gagal!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Sepertinya kamu sudah pernah daftar.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                                class="notice d-flex bg-light-danger rounded border-danger border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-information fs-2tx text-danger me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Sepertinya data anda sudah
                                                        terdaftar!</h4>
                                                    <div class="fs-6 text-gray-700"><a href="<?= base_url('login') ?>"
                                                                                       class="link-primary fw-bold">Masuk</a>.
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step selesai-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-success me-3"
                                            data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Sebelumnya
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-lg btn-success"
                                            data-kt-stepper-action="submit">
											<span class="indicator-label">Kirim
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
                                        <span class="indicator-progress">Tunggu sebentar...
											<span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-success"
                                            data-kt-stepper-action="next">
                                        Selanjutnya
                                        <i class="ki-duotone ki-arrow-right fs-4 ms-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->
<?= $this->endSection() ?>