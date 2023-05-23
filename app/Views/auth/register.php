<?= $this->extend('auth/layouts/index') ?>
<?= $this->section('content') ?>
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="../../demo1/dist/index.html" class="mb-7">
                    <img alt="Logo" src="<?= base_url(); ?>/media/logos/custom-3.svg"/>
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
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
                    <form class="form w-100"
                          action="<?= url_to('register') ?>" method="post">

                        <?= csrf_field() ?>

                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3"><?= lang('Auth.register') ?></h1>
                            <!--end::Title-->
                            <?= view('Myth\Auth\Views\_message_block') ?>
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <input type="text" name="email" autocomplete="off"
                                   class="form-control bg-transparent <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>"/>
                            <small id="emailHelp"
                                   class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            <!--end::Email-->
                        </div>

                        <div class="fv-row mb-8">
                            <!--begin::Username-->
                            <input type="text" name="username" autocomplete="off"
                                   class="form-control bg-transparent <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                   placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>"/>
                            <!--end::Username-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" placeholder="<?= lang('Auth.password') ?>"
                                           name="password" autocomplete="off"/>
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <small class="form-text text-muted">Use 8 or more characters with a mix of letters, numbers
                                & symbols.
                            </small>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--end::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Repeat Password-->
                            <input placeholder="<?= lang('Auth.repeatPassword') ?>" name="pass_confirm" type="password"
                                   autocomplete="off" class="form-control bg-transparent <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"/>
                            <!--end::Repeat Password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Sign up</span>
                                <!--end::Indicator label-->
                            </button>
                        </div>
                        <!--end::Submit button-->
                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6"><?= lang('Auth.alreadyRegistered') ?>
                            <a href="<?=base_url('login');?>"
                               class="link-primary fw-semibold"><?= lang('Auth.signIn') ?></a></div>
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-up-->
<?= $this->endSection(); ?>