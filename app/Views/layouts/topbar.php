<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
         id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../demo1/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="<?= base_url(); ?>media/logos/<?=$lembaga['logo']?>" class="h-30px"/>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
             id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                 data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                 data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                 data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                 data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div
                    class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-placement="bottom-start"
                         class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                            <!--begin:Dashboards menu-->
                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                 data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/index.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-element-11 text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Default</span>
																			<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/ecommerce.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-basket text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																			<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/projects.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-44 text-info fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Projects</span>
																			<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/online-courses.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-color-swatch text-success fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																				<span class="path9"></span>
																				<span class="path10"></span>
																				<span class="path11"></span>
																				<span class="path12"></span>
																				<span class="path13"></span>
																				<span class="path14"></span>
																				<span class="path15"></span>
																				<span class="path16"></span>
																				<span class="path17"></span>
																				<span class="path18"></span>
																				<span class="path19"></span>
																				<span class="path20"></span>
																				<span class="path21"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																			<span class="fs-7 fw-semibold text-muted">Student progress</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/marketing.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-chart-simple text-dark fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/bidding.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-switch text-warning fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/pos.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">POS System</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/call-center.html"
                                                       class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-call text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                        <div class="separator separator-dashed mx-5 my-5"></div>
                                        <!--begin:Landing-->
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">Landing Page Template
                                                </div>
                                                <div class="fs-7 fw-semibold text-muted">Onpe page landing
                                                    template with pricing & others
                                                </div>
                                            </div>
                                            <a href="../../demo1/dist/landing.html"
                                               class="btn btn-sm btn-primary fw-bold">Explore</a>
                                        </div>
                                        <!--end:Landing-->
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div
                                        class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                        <!--begin:Heading-->
                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More
                                            Dashboards</h4>
                                        <!--end:Heading-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/logistics.html"
                                               class="menu-link py-2">
                                                <span class="menu-title">Logistics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                        <img src="<?= base_url(); ?>/media/avatars/<?= user()->avatar ?>" alt="user"/>
                    </div>
                    <!--begin::User account menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="<?= base_url(); ?>/media/avatars/<?= user()->avatar ?>"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5"><?= user()->fullname ?>
                                        <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"><?= user()->username ?></span>
                                    </div>
                                    <a href="#"
                                       class="fw-semibold text-muted text-hover-primary fs-7"><?= user()->email ?></a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="<?= base_url('panel/profile') ?>" class="menu-link px-5">Profil Saya</a>
                            </div>
                            <!--end::Menu item-->
                        <?php if (in_groups('siswa')): ?>
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                        <?php endif; ?>
                        <?php if (has_permission('manage-profile')): ?>
                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="<?= base_url('panel/settings') ?>" class="menu-link px-5">Pengaturan Akun</a>
                            </div>
                            <!--end::Menu item-->
                        <?php endif; ?>
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="<?= base_url('logout'); ?>"
                               class="menu-link px-5">Keluar</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                         id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>