<?php include ('layouts/header.php')?>

<!--CAROUSEL STARTS-->
<div id="carouselExampleControls" class="carousel slide d-none d-md-block" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carousel.jpg" alt="Carousel" class="img-fluid">
      <div id="overlay"></div>
      <div class="carousel-caption d-md-block">
        <h3>Looking For A Property?</h3>
        <p>Search your dream home on Nepal’s largest property marketplace.</p>
        <div class="form">
          <input type="text" placeholder="Enter address, town or property ID....">
          <button type="submit" class="searchButton btn-primary">Submit</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!--cAROUSEL ENDS-->

<!--CATEGORIES TO DO-->
<div class="categories padex20 padTop pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="content">
          <img src="img/logo.png" data-src="img/cat1.jpg" class="img-fluid">
          <h6 class="padTop10">Buy a home</h6>
          <p class="padTop10">Buying a home involves finding the property, securing financing, making an offer, getting
            a home inspection, and closing on the.</p>
          <a href="house.php" class="btn btn-primary catBut mar10">Find a Home.</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <img src="img/logo.png" data-src="img/cat2.jpg" class="img-fluid">
          <h6 class="padTop10">Find a Rent</h6>
          <p class="padTop10">Find an apartment or house for rent.Discover apartment rentals, townhomes and many other
            types of rentals that suit your needs.</p>
          <a href="rent.php" class="btn btn-primary catBut mar10">Find a Rental.</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <img src="img/logo.png" data-src="img/cat3.jpg" class="img-fluid">
          <h6 class="padTop10">Post Your Ad</h6>
          <p class="padTop10">
            Post free ads on Quikr , Advertise free onlinewww.quikr.com › post-classifieds-ads+allindia › postad...
            Want to sell commercial</p>
          <a href="#" class="btn btn-primary catBut mar10">Post Ad.</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--CATEGORIES TO DO ENDS-->

<!--PRICING-->
<div class="pricing">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="pricingCards">
          <h6 class="pt-5 pb-3">Basic Listing</h6>
          <h6 class="pb-3 pr-5 pl-5">NRS. <span class="cost">5000</span></h6>
          <ul class="offers">
            <li>High Quality Image of the Property</li>
            <li>Property Description</li>
            <li>Facebook Sponsored Promotion for 5 days</li>
            <li>listing until the property is sold</li>
            <li>suitable for 3 months.</li>
          </ul>
          <a href="#" class="btn btn-lg btn-block radius">Get Started</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pricingCards">
          <h6 class="pt-5 pb-3">Featured Listing</h6>
          <h6 class="pb-3 pr-5 pl-5">NRS. <span class="cost">9000</span></h6>
          <ul class="offers">
            <li>High Quality Image of the Property</li>
            <li>Property Description</li>
            <li>Facebook Sponsored Promotion for 5 days, 2 intervals a day</li>
            <li>listing until the property is sold</li>
            <li>suitable for 6 months.</li>
          </ul>
          <a href="#" class="btn btn-lg btn-block radius">Get Started</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pricingCards">
          <h6 class="pt-5 pb-3">Premium Listing</h6>
          <h6 class="pb-3 pr-5 pl-5">NRS. <span class="cost">14000</span></h6>
          <ul class="offers">
            <li>Basic Listing</li>
            <li>Featured listing</li>
            <li>Facebook Sponsored Promotion for 10 days, 2 intervals a day.</li>
            <li>Suitable For Urgent & Large Real Estate Property</li>
          </ul>
          <a href="#" class="btn btn-lg btn-block radius">Get Started</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="pricingCards">
          <h6 class="pt-5 pb-3">Elite Listing</h6>
          <h6 class="pb-3 pr-5 pl-5">NRS. <span class="cost">20000</span></h6>
          <ul class="offers">
            <li>Basic Listing</li>
            <li>Featured Listing</li>
            <li>Premium Listing</li>
            <li>suitable for urgent property sale</li>
            <li>Suitable For Urgent & Large Real Estate Property</li>
          </ul>
          <a href="details.php" class="btn btn-lg btn-block radius">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--PRICING ENDS-->

<!--PROPERTIES TO BUY OR RENT-->
<div class="properties">
  <div class="container-fluid padbotex20">
    <h3>Properties in Nepal to Buy or Rent.</h3>
    <p>Real Estate offers a wide variety of properties in Kathmandu and in Nepal.</p>

    <div class="types owl-carousel owl-theme">
      <div class="item boxes">
        <a href="#">
          <img src="img/logo.png" data-src="img/rent.jpg" alt="carousel" class="img-fluid">
        </a>
        <div id="overlay2"></div>
        <div class="carousel-owl d-md-block">
          <h6><a href="#">Rent</a></h6>
        </div>
      </div>
      <div class="item boxes">
        <a href="#">
          <img src="img/logo.png" data-src="img/apartment.jpg" alt="carousel" class="img-fluid">
        </a>
        <div id="overlay2"></div>
        <div class="carousel-owl d-md-block">
          <h6><a href="#">Apartment</a></h6>
        </div>
      </div>
      <div class="item boxes">
        <a href="#">
          <img src="img/logo.png" data-src="img/land.jpg" alt="carousel" class="img-fluid">
        </a>
        <div id="overlay2"></div>
        <div class="carousel-owl d-md-block">
          <h6><a href="#">Land</a></h6>
        </div>
      </div>
      <div class="item boxes">
        <a href="#">
          <img src="img/logo.png" data-src="img/bunglaow.jpg" alt="carousel" class="img-fluid">
        </a>
        <div id="overlay2"></div>
        <div class="carousel-owl d-md-block">
          <h6><a href="#">Bunglaow</a></h6>
        </div>
      </div>
      <div class="item boxes">
        <a href="#">
          <img src="img/logo.png" data-src="img/office.jpg" alt="carousel" class="img-fluid">
        </a>
        <div id="overlay2"></div>
        <div class="carousel-owl d-md-block">
          <h6><a href="#">Office</a></h6>
        </div>
      </div>
    </div>
  </div>
</div>
<!--PROPERTIES TO BUY OR RENT ENDS-->

<!--LATEST PROPERTIES-->
<div class="propertyHeading">
  <div class="container-fluid padex20">
    <h3>Properties in Nepal to Buy.</h3>
    <div class="d-flex wrap">
      <p>Real Estate offers a wide variety of properties in Kathmandu and in Nepal.</p>
      <a href="#" class="btn-primary whiteText pl-2 pr-2">View All</a>
    </div>
    <div class="latestCards owl-carousel owl-theme">
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-one.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-nine.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-eight.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-seven.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-six.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">

          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-five.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-four.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-two.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-three.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--LATEST PROPERTIES ENDS-->


<!--LATEST PROPERTIES-->
<div class="propertyHeading padTop">
  <div class="container-fluid padex20">
    <h3>Latest properties in Nepal to Rent.</h3>
    <div class="d-flex wrap">
      <p>Real Estate offers a wide variety of properties in Kathmandu and in Nepal.</p>
      <a href="#" class="btn-primary whiteText pl-2 pr-2">View All</a>
    </div>
    <div class="latestCards owl-carousel owl-theme">
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-one.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-nine.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-eight.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-seven.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-six.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">

          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-five.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-four.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-two.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-three.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--LATEST PROPERTIES ENDS-->

<!--TRENDING PROPERTIES-->
<div class="propertyHeading padTop">
  <div class="container-fluid padex20">
    <h3>Trending properties in Nepal.</h3>
    <div class="d-flex wrap">
      <p>Real Estate offers a wide variety of properties in Kathmandu and in Nepal.</p>
      <a href="#" class="btn-primary whiteText pl-2 pr-2">View All</a>
    </div>
    <div class="row pt-3">
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-one.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-two.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">house on sale</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> baneshwor, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-three.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-four.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-five.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-six.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale at shantinagar</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-one.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-nine.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="mainCard">
          <div class="imageHeight">
            <a href="#">
              <img src="img/logo.png" data-src="img/house-six.jpg" alt="image" class="img-fluid">
            </a>
          </div>
          <h6 class="heading"><a href="#">bunglaow on sale</a></h6>
          <p class="location"><i class="fas fa-map-marker-alt"></i> Shantinagar, Kathmandu</p>
          <p class="area"><i class="far fa-map"></i> <span class="one">1</span>-<span class="two">2</span>-<span
              class="three">3</span>-<span class="four">4</span></p>
          <div class="d-flex">
            <p class="price">
              <span class="ctype">NPR.</span> 1,23,45,678
            </p>
            <span class="verified">Verified</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--TRENDING PROPERTIES ENDS-->

<?php include ('layouts/footer.php')?>