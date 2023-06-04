<?php

use CodeIgniter\I18n\Time;

?>
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

            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8"><!--begin::List widget 11-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Jadwal PPDB</span>
                                <span
                                    class="text-gray-400 mt-1 fw-semibold fs-6">Jenjang <?= JENJANG[$jenjang] ?></span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <?php foreach ($jadwal as $item): ?>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                               class="text-gray-800 fw-bold text-hover-primary fs-6"><?= $item['judul'] ?></a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span
                                                class="text-gray-400 fw-semibold fs-9 d-block text-start ps-0"><?= ($item['tgl_mulai'] == $item['tgl_selesai']) ? $item['tgl_mulai'] : $item['tgl_mulai'] . ' s/d ' . $item['tgl_selesai'] ?></span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Wrapper-->
                                    <div class="text-gray-400 fw-bold fs-7 text-end">
                                        <td class="text-end">
                                            <button
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                               data-bs-toggle="modal"
                                               data-bs-target="#update_<?= $item['id']; ?>">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <?= form_open('/panel/jadwal/' . $jenjang . '/' . $item['id'], ['class' => 'd-inline']) ?>
                                            <?= csrf_field(); ?>
                                            <?= form_hidden('_method', 'DELETE'); ?>
                                            <button type="submit"
                                                    class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                                    onclick="return confirm('Data akan dihapus, yakin?')">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <?= form_close(); ?>
                                        </td>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                            <?php endforeach; ?>
                            <div class="text-center pt-9">
                                <button class="btn btn-primary" data-bs-target="#tambah_jadwal" data-bs-toggle="modal">
                                    Tambah Jadwal
                                </button>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 11-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 10-->
                    <div class="card bg-success card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Preview Jadwal</span>
                                <span
                                    class="text-white-50 mt-1 fw-semibold fs-6">Jenjang <?= JENJANG[$jenjang] ?></span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <?php foreach ($jadwal as $item) : ?>
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon" style="margin-left: 11px">
                                            <i class="ki-duotone ki-<?= (Time::now('Asia/Jakarta', 'id-ID') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta', 'id-ID') <= $item['tgl_selesai']) ? 'geolocation fs-2' : 'cd fs-3' ?> text-<?= (Time::now('Asia/Jakarta', 'id-ID') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta', 'id-ID') <= $item['tgl_selesai']) ? 'info' : 'danger' ?>">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span
                                                class="fs-9 text-white-50 fw-semibold d-block"><?= ($item['tgl_mulai'] == $item['tgl_selesai']) ? $item['tgl_mulai'] : $item['tgl_mulai'] . ' s/d ' . $item['tgl_selesai'] ?></span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-white"><?= $item['judul'] ?></span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                <?php endforeach; ?>
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::List widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
    <!--begin::Modal-->
    <div class="modal fade" tabindex="-1" id="tambah_jadwal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah jadwal</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon fs-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <?= form_open('panel/jadwal/' . $jenjang) ?>
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="mb-5">
                        <label for="judul" class="form-label">Judul</label>
                        <input class="form-control form-control-solid" placeholder="Masukkan judul" id="judul"
                               name="judul" required/>
                    </div>
                    <div class="mb-0">
                        <label for="kt_daterangepicker_add" class="form-label">Pilih Tanggal</label>
                        <input class="form-control form-control-solid" placeholder="Pick date" id="kt_daterangepicker_add"
                               name="tgl" required/>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                <?= form_close() ?>
            </div>
        </div>
    </div>
    <!--end::Modal-->

<?php foreach ($jadwal as $item) : ?>
    <!--begin::Modal-->
    <div class="modal fade" tabindex="-1" id="update_<?=$item['id']?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah jadwal</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon fs-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <?= form_open('panel/jadwal/' . $jenjang . '/' . $item['id']) ?>
                <?= csrf_field() ?>
                <?= form_hidden('_method', 'PUT') ?>
                <div class="modal-body">
                    <div class="mb-5">
                        <label for="judul" class="form-label">Judul</label>
                        <input class="form-control form-control-solid" value="<?=$item['judul']?>" placeholder="Masukkan judul" id="judul" name="judul" required/>
                    </div>
                    <div class="mb-0">
                        <label for="kt_daterangepicker_<?=$item['id']?>" class="form-label">Pilih Tanggal</label>
                        <input class="form-control form-control-solid" value="<?=$item['tgl']?>" placeholder="Pick date" id="kt_daterangepicker_<?=$item['id']?>" name="tgl" required/>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                <?= form_close() ?>
            </div>
        </div>
    </div>
    <!--end::Modal-->
<?php endforeach; ?>
<?= $this->endSection(); ?>