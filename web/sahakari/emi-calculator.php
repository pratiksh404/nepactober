<?php include('include/header.php'); ?>

<div class="calculator">
    <div class="sub-head">

        <h2 class="text-uppercase text-white" style="font-size: 22px;">EMI CALCULATOR</h2>

        <ol class="breadcrumb">
            <li>
                <a href="index.php">Home</a></li>
            <li>
                <a href="emi-calculator.php">EMI Calculator</a>
            </li>

        </ol>
    </div>
</div>

<div class="emi-detail mt-5">
    <div class="container">
        <div class="row">
            <h2>What is EMI?</h2>
            <p>
                Equated Monthly Installment - EMI for short - is the amount payable every month to the bank or any other
                financial institution until the loan amount is fully paid off. It consists of the interest on loan as
                well as part of the principal amount to be repaid. The sum of principal amount and interest is divided
                by the tenure, i.e., number of months, in which the loan has to be repaid. This amount has to be paid
                monthly. The interest component of the EMI would be larger during the initial months and gradually
                reduce with each payment. The exact percentage allocated towards payment of the principal depends on the
                interest rate. Even though your monthly EMI payment won't change, the proportion of principal and
                interest components will change with time. With each successive payment, you'll pay more towards the
                principal and less in interest.</p>
        </div>
    </div>
</div>

<section class="emi-calculator mt-4 mb-5">
    <div class="container">
        <div id=outer> <span style="color: red; font-size:30px;">EMI CALCULATOR </span>
            <div id=cover>
                <form>
                    <table class=main>
                        <col class=w50>
                        <col class=w50>
                        <tr>
                            <td>Loan Amount
                            <td><input id=loan1>
                        <tr>
                            <td>Repayment in months
                            <td><input id=months1>
                        <tr>
                            <td>Interest Rate
                            <td><input id=rate1 onchange=emi();>
                        <tr>
                            <td><button class="btn1" type=reset>Reset</button>
                            <td><button class="btn2" type=button onclick='emi()'>Submit</button>
                        <tr>
                            <td>EMI
                            <td><input id=pay1>
                        <tr>
                            <td>Interest payable
                            <td><input id=tintt1>
                        <tr>
                            <td>Total payable
                            <td><input id=gt1>
                    </table>
                </form>
            </div>
        </div>
    </div>
</section>



<?php include('include/footer.php'); ?>