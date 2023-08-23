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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-filter="search"
                                   class="form-control form-control-solid w-250px ps-14"
                                   placeholder="Cari Siswa"/>
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_datatable_example_1_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-siswa-table-toolbar="base">

                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Export dropdown-->
                                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Export Data Calon Siswa
                                </button>
                                <!--begin::Menu-->
                                <div id="kt_datatable_siswa_export_menu"
                                     class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                     data-kt-menu="true">
                                    <!--begin::Menu item-->
<!--                                    <div class="menu-item px-3">-->
<!--                                        <a href="#" class="menu-link px-3" data-kt-export="copy">-->
<!--                                            Copy to clipboard-->
<!--                                        </a>-->
<!--                                    </div>-->
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="excel">
                                            Export as Excel
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
<!--                                    <div class="menu-item px-3">-->
<!--                                        <a href="#" class="menu-link px-3" data-kt-export="csv">-->
<!--                                            Export as CSV-->
<!--                                        </a>-->
<!--                                    </div>-->
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
<!--                                    <div class="menu-item px-3">-->
<!--                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">-->
<!--                                            Export as PDF-->
<!--                                        </a>-->
<!--                                    </div>-->
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Export dropdown-->

                                <!--begin::Hide default export buttons-->
                                <div id="kt_datatable_siswa_buttons" class="d-none"></div>
                                <!--end::Hide default export buttons-->
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4" id="kt_datatable_siswa">
                        <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="min-w-50px text-end rounded-end"></th>
                            <th class="min-w-100px">Jenjang Daftar</th>
                            <th class="min-w-150px">Tanggal daftar</th>
                            <th class="ps-4 min-w-150px rounded-start">No. Pendaftaran</th>
                            <th class="min-w-100px">NISN</th>
                            <th class="min-w-100px">NIK</th>
                            <th class="min-w-250px">Nama lengkap</th>
                            <th class="min-w-100px">Jenis Kelamin</th>
                            <th class="min-w-150px">Tempat, Tgl Lahir</th>
                            <th class="min-w-70px">Agama</th>
                            <th class="min-w-250px">Alamat</th>
                            <th class="min-w-100px">Jenis Tinggal</th>
                            <th class="min-w-150px">Desa</th>
                            <th class="min-w-150px">Kecamatan</th>
                            <th class="min-w-150px">Kabupaten/Kota</th>
                            <th class="min-w-150px">Provinsi</th>
                            <th class="min-w-70px">Kode Pos</th>
                            <th class="min-w-250px">Nama Ayah</th>
                            <th class="min-w-250px">Nama Ibu</th>
                            <th class="min-w-150px">No. Hp Orang Tua</th>
                            <th class="min-w-250px">Asal Sekolah</th>
                            <th class="min-w-250px">Alamat</th>
                            <th class="min-w-100px">No. UN</th>
                            <th class="min-w-150px">No. STTB / Th. Lulus</th>
                            <th class="min-w-100px">No. Seri Ijazah</th>
                            <th class="min-w-100px">No. Seri SKHUN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($siswa as $item): ?>
                            <tr>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="<?=base_url('panel/calon-siswa/edit/'.$item['id'])?>"
                                               class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="<?=base_url('panel/calon-siswa/delete/'.$item['id'])?>"
                                               onclick="return confirm('calon siswa akan dihapus, yakin?')" class="menu-link px-3">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td class="fw-bold"><?= $item['jenjang_daftar'] ?></td>
                                <td class="fw-bold"><?= $item['created_at'] ?></td>
                                <td class="ps-4 fw-bold text-muted"><?= $item['no_pendaftaran'] ?></td>
                                <td><?= $item['nisn'] ?></td>
                                <td><?= $item['nik'] ?></td>
                                <td class="fw-bold"><?= $item['nama_lengkap'] ?></td>
                                <td><?= $item['jk'] ?></td>
                                <td><?= $item['tempat_lahir'] . ', ' . $item['tgl_lahir'] ?></td>
                                <td><?= $item['agama'] ?></td>
                                <td><?= $item['alamat_siswa'] ?></td>
                                <td><?= $item['jenis_tinggal'] ?></td>
                                <td><?= $item['desa'] ?></td>
                                <td><?= $item['kec'] ?></td>
                                <td><?= $item['kab'] ?></td>
                                <td><?= $item['prov'] ?></td>
                                <td><?= $item['kode_pos'] ?></td>
                                <td><?= $item['nama_ayah'] ?></td>
                                <td><?= $item['nama_ibu'] ?></td>
                                <td><?= $item['no_hp_ortu'] ?></td>
                                <td><?= $item['nama_sekolah'] ?></td>
                                <td><?= $item['lokasi_sekolah'] ?></td>
                                <td><?= $item['no_un'] ?></td>
                                <td><?= $item['sttb_lulus'] ?></td>
                                <td><?= $item['no_seri_ijazah'] ?></td>
                                <td><?= $item['no_seri_skhun'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
<?= $this->endSection(); ?>