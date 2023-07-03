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
                                        <h3 class="stepper-title">Alamat</h3>
                                        <div class="stepper-desc fw-normal">Alamat calon peserta didik</div>
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
                                        <h3 class="stepper-title">Orang Tua / Wali</h3>
                                        <div class="stepper-desc fw-normal">Data orang tua / wali calon peserta didik
                                        </div>
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
                                        <h3 class="stepper-title">Asal Sekolah</h3>
                                        <div class="stepper-desc fw-normal">Asal sekolah calon peserta didik</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 6-->
                            <!--begin::Step 7-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">7</span>
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
                            <!--end::Step 7-->
                            <!--begin::Step 8-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">8</span>
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
                            <!--end::Step 8-->
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
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form"
                              action="<?= base_url('daftar') ?>" method="post">
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
                                        <h2 class="fw-bold text-dark mb-7">Multisite License:</h2>
                                        <!--end::Title-->
                                        <!--begin::List-->
                                        <ul>
                                            <li>
                                                <span class="fs-4 fw-semibold text-gray-700">It works the same as the Standard License, but you can use it in unlimited count of projects.</span>
                                            </li>
                                        </ul>
                                        <!--end::List-->
                                        <!--begin::Text-->
                                        <div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and
                                            use your website is used only as interface(eCommerce site) to sell other's
                                            products you can use Regular license. if you are going to use the item on
                                            multiple domains, then you will need to purchase a Licence for each domain
                                            or buy Multisite License.
                                            <br>(ex: www.domain-site-
                                            <span class="text-dark">one.com</span>– www.domain-site.
                                            <span class="text-dark">two.com</span>– www.site-three-
                                            <span class="text-dark">domain.com</span>).
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark mb-8">Extended License:</h2>
                                        <!--end::Title-->
                                        <!--begin::List-->
                                        <ul class="fs-4 fw-semibold mb-6">
                                            <li>
                                                <span class="text-gray-700">SaaS projects</span>
                                            </li>
                                            <li class="my-2">
                                                <span class="text-gray-700">Photo stock with PRO subscription</span>
                                            </li>
                                            <li>
                                                <span class="text-gray-700">Cloud service with paid plans</span>
                                            </li>
                                        </ul>
                                        <!--end::List-->
                                        <!--begin::Text-->
                                        <div class="fs-4 fw-semibold text-gray-700">E-commerce site Company business
                                            activity dashboard Customer support center If users can free browse and use
                                            your website is used only as interface(eCommerce site) to sell other's
                                            products you can use Regular license. If you are going to use the item on
                                            one domain and multiple subdomains, you only require one Licence . (ex:
                                            www.domain.com/site1 – site2.domain.com – site.3.domain.com).
                                        </div>
                                        <!--end::Text-->
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
                                            <?php foreach(AGAMA as $agama):?>
                                                <option value="<?=$agama?>"><?=$agama?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="tempat_lahir">Anak ke</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="anak_ke" id="anak_ke" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="jml_saudara">Jumlah
                                                    Saudara</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="jml_saudara" id="jml_saudara" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required" for="no_telp">No. Telepon</label>
                                        <!--end::Label-->
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
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Biodata-->
                            <!--begin::Step Alamat-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Alamat</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Silahkan isi alamat calon peserta
                                            didik dengan benar.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
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

                                                    <?php foreach(JENIS_TINGGAL as $jt):?>
                                                        <option value="<?=$jt?>"><?=$jt?></option>
                                                    <?php endforeach;?>
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

                                                    <?php foreach(PROVINSI as $prov):?>
                                                        <option value="<?=$prov?>"><?=$prov?></option>
                                                    <?php endforeach;?>
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
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="jarak">Jarak Rumah ke
                                                    Sekolah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="jarak" id="jarak" type="text"
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
                                                <label class="form-label required" for="kendaraan">Kendaraan yang
                                                    Digunakan ke Sekolah</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="kendaraan"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach(KENDARAAN as $kendaraan):?>
                                                        <option value="<?=$kendaraan?>"><?=$kendaraan?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Alamat-->
                            <!--begin::Step Data Orang Tua-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Data Orang Tua / Wali</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Silahkan isi data orang tua / wali
                                            calon peserta didik dengan benar.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="no_kk">No. KK</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no_kk" id="no_kk" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Heading Ayah-->
                                    <div class="pb-2 pb-lg-4">
                                        <hr class="text-muted">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Data Ayah</h2>
                                        <!--end::Title-->
                                        <hr class="text-muted">
                                    </div>
                                    <!--end::Heading Ayah-->
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
                                                <label class="form-label required" for="nik_ayah">NIK</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nik_ayah" id="nik_ayah" type="text"
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
                                                       for="pekerjaan_ayah">Pekerjaan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pekerjaan_ayah" id="pekerjaan_ayah"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pekerjaan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label required" for="pdd_ayah">Pendidikan
                                                    Terakhir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pdd_ayah" id="pdd_ayah"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pendidikan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label required"
                                                       for="penghasilan_ayah">Penghasilan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="penghasilan_ayah" id="penghasilan_ayah"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($penghasilan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!-- Status Hidup Ayah -->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="form-label required" for="status_hidup_ayah">Status
                                                    Ayah</label>
                                            </div>
                                            <div class="col">
                                                <select name="status_hidup_ayah"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="Hidup">Hidup</option>
                                                    <option value="Meninggal">Meninggal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Status Hidup Ayah -->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="th_lahir_ayah">Tahun
                                                    Lahir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="th_lahir_ayah" id="th_lahir_ayah" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Heading Ibu-->
                                    <div class="pb-2 pb-lg-4">
                                        <hr class="text-muted mt-2">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Data Ibu</h2>
                                        <!--end::Title-->
                                        <hr class="text-muted">
                                    </div>
                                    <!--end::Heading Ibu-->
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
                                                <label class="form-label required" for="nik_ibu">NIK</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nik_ibu" id="nik_ibu" type="text"
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
                                                <label class="form-label required" for="pekerjaan_ibu">Pekerjaan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pekerjaan_ibu" id="pekerjaan_ibu"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pekerjaan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label required" for="pdd_ibu">Pendidikan
                                                    Terakhir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pdd_ibu" id="pdd_ibu"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pendidikan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label required"
                                                       for="penghasilan_ibu">Penghasilan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="penghasilan_ibu" id="penghasilan_ibu"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($penghasilan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!-- Status Hidup Ibu -->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="form-label required" for="status_hidup_ibu">Status
                                                    Ibu</label>
                                            </div>
                                            <div class="col">
                                                <select name="status_hidup_ibu"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="Hidup">Hidup</option>
                                                    <option value="Meninggal">Meninggal</option>
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
                                                <label class="form-label required" for="th_lahir_ibu">Tahun
                                                    Lahir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="th_lahir_ibu" id="th_lahir_ibu" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Heading Wali-->
                                    <div class="pb-2 pb-lg-4">
                                        <hr class="text-muted mt-2">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Data Wali</h2>
                                        <!--end::Title-->
                                        <hr class="text-muted">
                                    </div>
                                    <!--end::Heading Wali-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label" for="nama_wali">Nama Wali</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nama_wali" id="nama_wali" type="text"
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
                                                <label class="form-label" for="nik_wali">NIK</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="nik_wali" id="nik_wali" type="text"
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
                                                <label class="form-label" for="pekerjaan_wali">Pekerjaan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pekerjaan_wali" id="pekerjaan_wali"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pekerjaan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label" for="pdd_wali">Pendidikan Terakhir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="pdd_wali" id="pdd_wali"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($pendidikan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
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
                                                <label class="form-label" for="penghasilan_wali">Penghasilan</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <select name="penghasilan_wali" id="penghasilan_wali"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <?php foreach ($penghasilan as $item): ?>
                                                        <option
                                                            value="<?= $item['description'] ?>"><?= $item['description'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!-- Status Hidup Ibu -->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="form-label" for="status_hidup_wali">Status
                                                    Wali</label>
                                            </div>
                                            <div class="col">
                                                <select name="status_hidup_wali"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Pilih..."
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="Hidup">Hidup</option>
                                                    <option value="Meninggal">Meninggal</option>
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
                                                <label class="form-label" for="th_lahir_wali">Tahun
                                                    Lahir</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="th_lahir_wali" id="th_lahir_wali" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Heading No Telp-->
                                    <div class="pb-2 pb-lg-4">
                                        <hr class="text-muted mt-2">
                                    </div>
                                    <!--end::Heading No Telp-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <!--begin::Label-->
                                                <label class="form-label required" for="no_telp_ot">No. Telp Orang
                                                    Tua/Wali</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="no_telp_ot" id="no_telp_ot" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step Data Orang Tua-->
                            <!--begin::Step Asal Sekolah-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Data Sekolah Asal</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Silahkan isi alamat calon peserta
                                            didik dengan benar.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
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
                                                <label class="form-label required" for="npsn">NPSN</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="npsn" id="npsn" type="text"
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
                                                <label class="form-label required" for="lokasi_sekolah">Alamat</label>
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
                                                <label class="form-label" for="kks">No. KKS</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="kks" id="kks" type="text"
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
                                                <label class="form-label" for="pkh">No. PKH</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="pkh" id="pkh" type="text"
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
                                                <label class="form-label" for="kip">No. KIP</label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col">
                                                <!--begin::Input-->
                                                <input name="kip" id="kip" type="text"
                                                       class="form-control form-control-lg form-control-solid"/>
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
                                                    <h4 class="text-gray-900 fw-bold">Sepertinya data anda sudah terdaftar!</h4>
                                                    <div class="fs-6 text-gray-700"><a href="<?= base_url('login') ?>" class="link-primary fw-bold">Masuk</a>.
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