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
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 10-->
                    <div class="card bg-success card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Jadwal PPDB Online</span>
                                <span
                                    class="text-white-50 mt-1 fw-semibold fs-6">Jenjang <?= $jenjang ?></span>
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
                                            <i class="ki-duotone ki-<?= ((Time::now('Asia/Jakarta') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta') <= $item['tgl_selesai'])|| (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_mulai']) && (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_selesai'])
                                            )  ? 'geolocation fs-2' : 'cd fs-3' ?> text-<?= ((Time::now('Asia/Jakarta') >= $item['tgl_mulai'] && Time::now('Asia/Jakarta') <= $item['tgl_selesai'])||(Time::now('Asia/Jakarta')->toDateString() === $item['tgl_mulai']) && (Time::now('Asia/Jakarta')->toDateString() === $item['tgl_selesai'])
                                            ) ? 'danger' : 'info' ?>">
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
<?= $this->endSection(); ?>