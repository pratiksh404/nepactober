<?php include('includes/header.php'); ?>
<div class="contact">
    <div class="sub-head">
        <div class="container">
            <h2>BOOK A TRIP</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="contact.php">BOOK A TRIP</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="container">
    <div class="trip-name mt-4">
        <h2>TRIP NAME: KAKANI TOUR</h2>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="book-form">

                <div class="text-right mb-4">
                    <h3>Fields marked with ( * ) are mandatory</h3>
                </div>
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Full Name <span class="text-danger">*</span> </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="phone">Phone Number <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="phone" name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="travellers">No Of Travellers</label>
                        </div>
                        <div class="col-75">
                            <select id="travellers" name="travellers">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="message">Message</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
                        </div>
                    </div>
                </form>
                <div class="book-button mt-4 mb-5">
                    <a href="#" class="btn-1">SUBMIT</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <?php include('includes/sidebar-2.php'); ?>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>