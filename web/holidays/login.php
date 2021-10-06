
<?php include('includes/header.php'); ?>
<!-- start account area -->
    <section class="account-page account p80 py-5 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="item login text-center">
                        <h4>Login</h4>
                        <p>Login if you are a returning customer.</p>
                        <form action="#">
                            <input type="email" placeholder="e-mail address" class="inputs">
                            <input type="password" placeholder="password" class="inputs">
                            <div class="remember d-flex justify-content-between">
                                <label for="terms1">
                                    remember me
                                    <input type="checkbox" class="check" id="terms1">
                                    <span class="check-custom"></span>
                                </label>
                                <a href="login.html#!"><p>forgot password?</p></a>
                            </div>
                            <button type="submit" class="button-style1">login <span class="btn-dot"></span></button>
                        </form>
                        <span class="or">or</span>
                        <ul class="d-flex">
                            <li><a href="login.html#!" class="fb">facebook</a></li>
                            <li><a href="login.html#!" class="gl">google</a></li>
                            <li><a href="login.html#!" class="tw">twitter</a></li>
                        </ul>
                        <h5>Don't Have an Account?<a href="register.php" class="pl-3">Sign up now</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end account area -->
<?php include('includes/footer.php'); ?>