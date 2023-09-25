<?php include 'header.php'; ?>
<section>
    <div class="row m-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login_top_div">
                <h2>login</h2>
                <form>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="forgot_input_div">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="forgot_input_div">
                                <img src="img/loginIcon.svg" alt="icon">
                                <input type="Password" class="form-control" placeholder="Enter Your Password">
                                <span class="login_eye"><i onclick="myFunction(this)" class="far fa-eye"></i></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label my_check" for="flexCheckChecked">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check text-end">
                                <label class="form-check-label my_check">
                                    <a href="forgotPassword.php">Forgot Password</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="my_account_input_btn_div">
                                <button class="btn_2 btn_2_m">login now</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check ps-0">
                                <label class="form-check-label my_check">
                                    Don’t Have an Account?
                                    <a href="create_new_account.php">Create New Account</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6 p-0 login_img_col">
            <img class="login_img" src="img/login1.png" alt="login">
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>