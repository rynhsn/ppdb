<?= $this->extend('auth/layouts/index') ?>
<?= $this->section('content') ?>
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="<?= base_url(); ?>" class="mb-7">
                    <img alt="Logo" src="<?= base_url(); ?>/media/logos/logo.png" width="150vh"/>
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">Portal PPDB Online <?=$lembaga['nama_lembaga']?></h2>
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div
            class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                    <!--begin::Form-->
                    <form class="form w-100" action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field(); ?>
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3"><?= lang('Auth.loginTitle') ?></h1>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <?php if ($config->validFields === ['email']): ?>
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="text" placeholder="<?= lang('Auth.email') ?>" name="login"
                                       autocomplete="off"
                                       class="form-control bg-transparent <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"/>
                                <!--end::Email-->
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <!--end::Input group=-->
                        <?php else: ?>
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::username-->
                                <input type="text" placeholder="<?= lang('Auth.emailOrUsername') ?>" name="login"
                                       autocomplete="off"
                                       class="form-control bg-transparent <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"/>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                        <?php endif; ?>
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <!--begin::Password-->
                            <input type="password" placeholder="<?= lang('Auth.password') ?>" name="password"
                                   autocomplete="off"
                                   class="form-control bg-transparent <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"/>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label"><?= lang('Auth.loginAction') ?></span>
                                <!--end::Indicator label-->
                            </button>
                        </div>
                        <!--end::Submit button-->
                        <?php if ($config->allowRegistration) : ?>
                            <!--begin::Sign up-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                <a href="<?= url_to('register') ?>"
                                   class="link-primary"><?= lang('Auth.needAnAccount') ?></a></div>
                            <!--end::Sign up-->
                        <?php endif; ?>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
<?= $this->endSection() ?>