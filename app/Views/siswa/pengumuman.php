<?= $this->extend('layouts/index') ?>
<?= $this->section('page-content') ?>
<?= $this->include('layouts/breadcumb') ?>
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">

            <?= validation_list_errors(); ?>

            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl">
                    <!--begin::Tables Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Pengumuman</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_datatable_simple" class="table align-middle gs-0 gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="p-0 min-w-200px"></th>
                                        <th class="p-0 min-w-70px"></th>
                                        <th class="p-0 min-w-70px"></th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <?php foreach ($pengumuman as $item): ?>
                                        <tr>
                                            <td class="fw-bold text-dark mb-1 fs-6">
                                                <?= date('d M Y', strtotime($item['tgl_pengumuman'])); ?>
                                            </td>
                                            <td class="fw-bold text-dark mb-1 fs-6">
                                                <?= $item['judul_pengumuman']; ?>
                                            </td>
                                            <td class="fw-bold text-dark mb-1 fs-6">
                                                <?= $item['ket_pengumuman']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--endW::Tables Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

<?= $this->endSection(); ?>