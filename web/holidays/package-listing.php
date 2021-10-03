<?php include('includes/header.php'); ?>

<!----------------------
---Breadcrumb--------
----------------------->

<section class="bread-crumb bg-bread"
    style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/bread.jpg);">
    <div class="container">
        <!-- Container .// -->
        <h3 class="bread-crumb-title text-center">Package Listings</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Package Listings</li>
            </ol>
        </nav>
    </div> <!-- Container .// -->
</section>

<!----------------------
---Breadcrumb--------
----------------------->

<!----------------------
---Package-Listing--------
----------------------->

<section class="package-listing-main common-padding bg-grey">
    <div class="container">
        <!-- Container .// -->
        <h3 class="main-title not-index mb-5">Discover Inbound Tours & Trips</h3>
        <div class="row">
            <!-- Main-Row .// -->
            <div class="col-md-3">
                <!-- Main-Col .// -->

                <div class="package-filter white-card filter-form">
                    <form action="#">
                        <!-- Form_Filter .// -->
                        <div class="duration-silder">
                            <h5>Duration</h5>
                            <div class="dual-range" data-min="2" data-max="30">
                                <span class="handle left"></span>
                                <span class="highlight"></span>
                                <span class="handle right"></span>
                            </div>
                        </div>

                        <div class="cat-content">
                            <!-- Cat-Container .// -->
                            <h5 class="filter-title">Accommodation :</h5>

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Hotel <span class="float-right badge round">55</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Lodge <span class="float-right badge round">39</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Guesthouse <span class="float-right badge round">17</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Hostel <span class="float-right badge round">12</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Apartment <span class="float-right badge round">10</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Chalet <span class="float-right badge round">6</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Hut <span class="float-right badge round">5</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Bungalow <span class="float-right badge round">3</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Camping <span class="float-right badge round">3</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Berth / Cabin <span class="float-right badge round">2</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Resort <span class="float-right badge round">2</span>
                                </span>
                            </label> <!-- form-check.// -->

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label">
                                    Cottage <span class="float-right badge round">1</span>
                                </span>
                            </label> <!-- form-check.// -->

                        </div> <!-- Cat-Container .// -->

                        <div class="cat-content common-tab">
                            <!-- Cat-Container .// -->
                            <h5 class="filter-title">Price :</h5>
                            <ul class="nav mb-4" id="myTab" role="tablist">
                                <!-- Nav-Tabs .// -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Per person</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Per day</a>
                                </li>
                            </ul> <!-- Nav-Tabs .// -->

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab-Content .// -->

                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <!-- Tab .// -->

                                    <div class="dual-range2" data-min="2" data-max="30">
                                        <span class="handle left"></span>
                                        <span class="highlight"></span>
                                        <span class="handle right"></span>
                                    </div>

                                </div> <!-- Tab .// -->

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Tab .// -->

                                    <div class="dual-range3" data-min="2" data-max="30">
                                        <span class="handle left"></span>
                                        <span class="highlight"></span>
                                        <span class="handle right"></span>
                                    </div>

                                </div> <!-- Tab .// -->

                            </div> <!-- Tab-Content .// -->
                        </div> <!-- Cat-Container .// -->

                        <div class="cat-content">
                            <!-- Cat-Container .// -->
                            <h5 class="filter-title">Age Range :</h5>

                            <!-- <p class="bold-text">Or Filter by child-friendly tours</p> -->
                            <label for="age-select">Select age of the youngest child:</label>
                            <select name="location" id="age-select">
                                <option value="Age">Age</option>
                                <option value="less than 1 year old">less than 1 year old</option>
                                <option value="1 year old">1 year old</option>
                                <option value="2 years old">2 years old</option>
                                <option value="3 years old">3 years old</option>
                                <option value="4 years old">4 years old</option>
                                <option value="5 years old">5 years old</option>
                                <option value="6 years old">6 years old</option>
                                <option value="7 years old">7 years old</option>
                                <option value="8 years old">8 years old</option>
                                <option value="9 years old">9 years old</option>
                                <option value="10 years old">10 years old</option>
                                <option value="11 years old">11 years old</option>
                                <option value="12 years old">12 years old</option>
                                <option value="13 years old">13 years old</option>
                                <option value="14 years old">14 years old</option>
                                <option value="15 years old">15 years old</option>
                                <option value="16 years old">16 years old</option>
                                <option value="17 years old">17 years old</option>
                            </select>
                        </div> <!-- Cat-Container .// -->

                        <!-- <div class="cat-content">
                            <input type="text" placeholder="Keyword" name="search-keyword">

                            <select name="location" id="location">
                                <option value="location">Property Location</option>
                                <option value="baneshwor">Baneshwor</option>
                                <option value="tinkune">Tinkune</option>
                                <option value="gyaneshwor">Gyaneshwor</option>
                                <option value="kalanki">Kalanki</option>
                                <option value="dallu">Dallu</option>
                                <option value="kalimati">Kalimati</option>
                                <option value="kupandol">Kupandol</option>
                                <option value="out-of-valley">Out of Valley</option>
                            </select>

                        </div> -->

                    </form> <!-- Form_Filter .// -->
                </div>


            </div> <!-- Main-Row .// -->
        </div> <!-- Container .// -->
</section>

<!----------------------
---Package-Listing--------
----------------------->

<?php include('includes/footer.php'); ?>