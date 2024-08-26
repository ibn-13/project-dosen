@extends('layouts.app')

@section('content')
<div class="content-header row">
</div>
<div class="content-body">
    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- Register v1 -->
            <div class="card mb-0">
                <div class="card-body">


                    <h4 class="card-title mb-1">Hallo</h4>
                    <p class="card-text mb-2">Please register using your username, email and password.</p>

                    <form class="auth-register-form mt-2" action="index.html" method="POST">
                        <div class="form-group">
                            <label for="register-username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="register-username" name="register-username"
                                placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus />
                        </div>
                        <div class="form-group">
                            <label for="register-email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="register-email" name="register-email"
                                placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                        </div>

                        <div class="form-group">
                            <label for="register-password" class="form-label">Password</label>

                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="register-password"
                                    name="register-password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="register-password" tabindex="3" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="register-privacy-policy"
                                    tabindex="4" />
                                <label class="custom-control-label" for="register-privacy-policy">
                                    I agree to <a href="javascript:void(0);">privacy policy & terms</a>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>Already have an account?</span>
                        <a href="page-auth-login-v1.html">
                            <span>Sign in instead</span>
                        </a>
                    </p>

                    <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a href="javascript:void(0)" class="btn btn-facebook">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-twitter white">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-google">
                            <i data-feather="mail"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-github">
                            <i data-feather="github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Register v1 -->
        </div>
    </div>

</div>
</div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/page-auth-register.js"></script>
<!-- END: Page JS-->

<script>
$(window).on('load', function() {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})
</script>
</body>
<!-- END: Body-->

</html>
@endsection