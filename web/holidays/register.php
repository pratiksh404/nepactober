<?php include('includes/header.php'); ?>
<!-- start account area -->
<section class="account-page account p80 py-5 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="item signin">
                    <h4>Create an Account</h4>
                    <p>Register here if you are a new customer.</p>
                    <form action="#">
                        <input type="text" placeholder="username" class="inputs">
                        <input type="email" placeholder="e-mail address" class="inputs">
                        <input type="password" placeholder="password" class="inputs">
                        <input type="password" placeholder="confirm password" class="inputs">
                        <label for="terms2">
                            I have read and agree to the terms & conditions
                            <input type="checkbox" class="check" id="terms2">
                            <span class="check-custom"></span>
                        </label>
                        <button type="submit" class="button-style1">submit & register <span class="btn-dot"></span></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end account area -->
<?php include('includes/footer.php'); ?>