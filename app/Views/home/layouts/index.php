<!DOCTYPE html>
<html lang="id">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>Penerimaan Peserta Didik Baru</title>
    <meta charset="utf-8"/>
    <meta name="description" content="PPDB Online"/>
    <meta name="keywords" content="PPDB Online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="id_ID"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="PPDB Online"/>
    <meta property="og:url" content="PPDB Online"/>
    <meta property="og:site_name" content="PPDB Online"/>
    <link rel="canonical" href="PPDB Online"/>
    <link rel="shortcut icon" href="<?= base_url(); ?>/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= base_url(); ?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url(); ?>/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode") {
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

<?= $this->renderSection('content'); ?>

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->
<script>var hostUrl = "<?=base_url();?>/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url(); ?>/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url(); ?>/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="<?= base_url(); ?>/plugins/custom/typedjs/typedjs.bundle.js"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url(); ?>/js/custom/landing.js"></script>
<script src="<?= base_url(); ?>/js/custom/pages/pricing/general.js"></script>
<!--end::Custom Javascript-->

<!--for daftar-->
<script src="<?= base_url() ?>/js/custom/ppdb/modals/create-account.js"></script>
<!--end daftar-->
<script>
    $("#kt_datepicker_flat").flatpickr();
</script>
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>