<?php include('layouts/header.php');?>

<div class="parallax">
    <div class="container-fluid">
        <h2 class="parallaxHeading">Contact Us</h2>
        <span class="map">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </span>
    </div>
</div>

<div class="container-fluid">
    <div class="row mtb">
        <div class="col-md-6 col-sm-12 leftBg">
            <div class="leftContaactContent conPad">
                <h4>Real Estate</h4>
                <ul class="mainContact">
                    <li class="d-flex">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h6>Address:</h6>
                            <h6>Shantinagar, Kathmandu</h6>
                        </div>
                    </li>
                    <li class="d-flex">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h6>Have any question?</h6>
                            <h6><a href="mailto:">support@realestate.com</a></h6>
                        </div>
                    </li>
                    <li class="d-flex">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h6>Call us:</h6>
                            <h6><a href="tel:">+977 9832434745</a></h6>
                        </div>
                    </li>
                </ul>
                <h4 class="advertise mt-5">Advertise With Us:</h4>
                <h6 class="d-flex"><i class="fas fa-phone-alt"></i> <a href="tel:"> &nbsp;&nbsp;&nbsp;+977
                        9832434745</a></h6>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 rightBg conPad">
            <form action="#">
                <div class="mb-2">
                    <label for="name" class="d-block">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name" class="w-100" required>
                </div>
                <div class="mb-2">
                    <label for="number" class="d-block">Phone Number</label>
                    <input type="tel" id="number" name="number" placeholder="Phone Number" class="w-100" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="d-block">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-100" required>
                </div>
                <div class="mb-4">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" placeholder="Message" rows="7" name="message" required></textarea>
                </div>
                <div class="mb-2 d-flex">
                    <input type="submit" class="btn-primary orangeButton wb-1" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('layouts/footer.php');?>