<?php

namespace App\Views\Portal;

use App\Views\ViewHelper;
use App\Views\ViewRoutesContract;

class RegisterPage extends HtmlSkeleton
{
    public function __construct()
    {
        parent::__construct("Register");
    }

    function bodySection(): string
    {
        $this->startHtmlParsing(); ?>

        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                    <div class="row flex-grow">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="auth-form-transparent text-left p-3">
                                <div class="brand-logo">
                                    <img src="<?= base_url(ViewRoutesContract::PORTAL_ASSETS_RELATIVE_PATH . 'images/logo_gdps.svg') ?>" alt="logo">
                                </div>
                                <h4>New here?</h4>
                                <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form class="pt-3" action="<?= route_to(ViewRoutesContract::REGISTER) ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-account-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="username" class="form-control form-control-lg border-left-0 <?= (session('errors.username')) ? 'is-invalid' : '' ?>" placeholder="Username" value="<?= old('username') ?>" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.username') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-email-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control form-control-lg border-left-0 <?= (session('errors.email')) ? 'is-invalid' : '' ?>" placeholder="Email" value="<?= old('email') ?>" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.email') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg border-left-0 <?= (session('errors.password')) ? 'is-invalid' : '' ?>" id="exampleInputPassword" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Repeat Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="pass_confirm" class="form-control form-control-lg border-left-0 <?= (session('errors.pass_confirm')) ? 'is-invalid' : '' ?>" id="exampleInputPassword" placeholder="Repeat Password" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.pass_confirm') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check">
                                            <label class="d-inline form-check-label text-muted">
                                                <input type="checkbox" name="agreeToTerms" class="form-check-input" id="inputAgreeToTerms" required>
                                                I agree to all
                                            </label>
                                            <span><a data-toggle="modal" href="#exampleModal"> Terms and Condition </a> </span>

                                            <!-- Button trigger modal -->


                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Terms & Condition</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            This is placeholder to terms & condition
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" id="buttonAgree">Agree</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {

                                                    let button = document.querySelector('#exampleModal #buttonAgree');
                                                    button.addEventListener('click', function() {
                                                        document.querySelector('#inputAgreeToTerms').checked = true;
                                                        $('#exampleModal').modal('hide');
                                                    });
                                                });
                                            </script>

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Already have an account? <a href="<?= route_to(ViewRoutesContract::LOGIN) ?>" class="text-primary">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 register-half-bg d-flex flex-row">
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018 All rights reserved.</p>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

<?php return $this->endParsingAndGetHtml();
    }
}
