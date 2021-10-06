<?php include('includes/header.php'); ?>
<div class="contact">
    <div class="sub-head">
        <div class="container">
            <h2>HOTEL BOOKING</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="contact.php">HOTEL BOOKING</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Country, ZIP, city...">
                            <span class="form-label">Destination</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" required>
                                    <span class="form-label">Check In</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" required>
                                    <span class="form-label">Check out</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of rooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Rooms</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="Enter you Phone">
                                    <span class="form-label">Phone</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="submit-btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>