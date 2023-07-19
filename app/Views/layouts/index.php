<!DOCTYPE html>
<html lang="id">
<!--begin::Head-->
<head data-bs-theme-mode="light">
    <base href="../"/>
    <title><?= $title; ?></title>
    <meta charset="utf-8"/>
    <meta name="description" content="PPDB Online"/>
    <meta name="keywords" content="PPDB Online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="PPDB Online"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="PPDB Online"/>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="<?= base_url(); ?>/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?= base_url(); ?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= base_url(); ?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url(); ?>/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <?= $this->include('layouts/topbar'); ?>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <?= $this->include('layouts/sidebar'); ?>
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <?= $this->renderSection('page-content'); ?>
                </div>
                <!--end::Content wrapper-->

                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div
                        class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://github.com/rynhsn" target="_blank"
                               class="text-gray-800 text-hover-primary"><?= $lembaga['nama_lembaga'] ?></a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Helpers Modals-->
<?php if ($title == 'Helpers'): ?>
    <?= $this->include('helpers/jenjang-modal'); ?>
    <?= $this->include('helpers/pendidikan-modal'); ?>
    <?= $this->include('helpers/penghasilan-modal'); ?>
    <?= $this->include('helpers/pekerjaan-modal'); ?>
    <?= $this->include('helpers/kompetensi-modal'); ?>
<?php endif; ?>
<!--end::Helpers Modals-->

<!--begin::Users Modals-->
<?php if ($title == 'User Management'): ?>
    <?= $this->include('user/usergroup-modal'); ?>
<?php endif; ?>
<!--end::Users Modals-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "<?=base_url();?>/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url(); ?>/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url(); ?>/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url(); ?>/js/widgets.bundle.js"></script>
<script src="<?= base_url(); ?>/js/custom/widgets.js"></script>

<script src="<?= base_url(); ?>/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url(); ?>/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= base_url(); ?>/js/custom/utilities/modals/create-app.js"></script>
<script src="<?= base_url(); ?>/js/custom/utilities/modals/users-search.js"></script>

<!-- data table users -->
<script src="<?= base_url(); ?>js/custom/ppdb/datatables/users.js"></script>
<script src="<?= base_url(); ?>js/custom/ppdb/datatables/siswa.js"></script>

<!--untuk profil lembaga-->
<script src="<?= base_url(); ?>/js/custom/account/settings/profile-details.js"></script>
<!--end::Custom Javascript-->

<script src="<?= base_url(); ?>/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>

<!--end::Javascript-->
<script>
    //    dii hal jadwal
    <?php if ($title == 'Jadwal PPDB'): ?>
    $("#kt_daterangepicker_add").daterangepicker();
    <?php foreach ($jadwal as $j) : ?>
    $("#kt_daterangepicker_<?=$j['id']?>").daterangepicker();
    <?php endforeach; ?>
    <?php endif; ?>

    $("#kt_datepicker_flat").flatpickr();
    $("#kt_datatable_simple").DataTable();
    $("#kt_datatable_pekerjaan").DataTable();
    $("#kt_datatable_pendidikan").DataTable();
    // $("#kt_datatable_siswa").DataTable();

    <?php if ($title == 'Materi dan Jadwal Ujian'): ?>
    ClassicEditor
        .create(document.querySelector('#kt_docs_ckeditor_classic'))
        .then(editor => {
            console.log(editor);
            editor.model.document.on('change:data', () => {
                // Mengambil isi dari CKEditor
                // Memperbarui konten pada elemen dengan id preview_materi
                document.querySelector('#preview_materi').innerHTML = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
    <?php endif; ?>


    <?php if ($title == 'Hasil Seleksi'): ?>
    ClassicEditor
        .create(document.querySelector('#kt_docs_ckeditor_classic'))
        .then(editor => {
            console.log(editor);
            editor.model.document.on('change:data', () => {
                // Mengambil isi dari CKEditor
                // Memperbarui konten pada elemen dengan id preview_materi
                document.querySelector('#preview_catatan').innerHTML = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
    <?php endif; ?>
</script>
</body>
<!--end::Body-->
</html>