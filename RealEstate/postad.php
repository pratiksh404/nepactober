<?php include('layouts/header.php'); ?>

<div class="grey">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
                <?php include('layouts/sidebar.php'); ?>
            </div>


            <div class="col-md-9 postForm">
                <form action="#">

                <div class="postAdSection text-center p-20 font-26 mb-20">
                    <h2 class="underline first-color">POST YOU AD FREE</h2>
                </div>

                <div class="postAdSection p-20 font-weight-bold">
                    <h5 class="pb-2">I want to <span class="text-danger">*</span>:</h5>
                    <div>
                        <input type="radio" name="type" id="house" class="mr-2">
                        <label for="house" class="font-weight-light mr-5">House</label>

                        <input type="radio" name="type" id="rent" class="mr-2">
                        <label for="rent" class="font-weight-light mr-5">Rent</label>

                        <input type="radio" name="type" id="land" class="mr-2">
                        <label for="land" class="font-weight-light mr-5">Land</label>
                    </div>
                </div>

                <div class="postAdSection b-5 px-20 pb-20 font-weight-bold">
                    <h5 class="pb-3">Property Type <span class="text-danger">*</span>:</h5>
                    <div class="buttonTypes">
                        <button class="typeBorder mr-2 b-5"><i class="fas fa-home mr-2"></i>House</button>
                        <button class="typeBorder mr-2 b-5"><i class="fas fa-building mr-2"></i>Rent</button>
                        <button class="typeBorder mr-2 b-5"><i class="far fa-map mr-2"></i>Land</button>
                        <button class="typeBorder mr-2 b-5"><i class="far fa-building mr-2"></i>Apartment</button>
                        <button class="typeBorder mr-2 b-5"><i class="fas fa-laptop-house mr-2"></i>Office</button>
                    </div>
                </div>

                <div class="postAdSection b-5 p-20 my-20 font-weight-bold">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="pb-2"><label for="propAdd">Property Address</label> <span
                                    class="text-danger">*</span>:</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="propAdd" placeholder="Property Address"
                                        class="w-100 pl-2 b-5">
                                </div>
                                <div class="col-md-4">
                                    <select name="city" id="city" class="w-100 p-1 b-5">
                                        <option value="east">East</option>
                                        <option value="west">West</option>
                                        <option value="north">North</option>
                                        <option value="south">South</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="area" id="area" class="w-100 p-1 b-5">
                                        <option value="east">East</option>
                                        <option value="west">West</option>
                                        <option value="north">North</option>
                                        <option value="south">South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="postAdSection b-5 p-20 my-20 font-weight-bold">
                    <div class="row pb-20">
                        <!--property face and Id-->
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="propId">Property Id</label> <span class="text-danger">*</span>:
                            </h5>
                            <input type="text" id="propId" placeholder="Property ID" class="w-100 b-5 pl-2">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="propFace">Property Face</label> <span
                                    class="text-danger">*</span>:</h5>
                            <label for="propFace" class="mr-2 font-weight-light">Choose a side:</label>

                            <select name="cars" id="cars" class="w-50 p-1 b-5">
                                <option value="east">East</option>
                                <option value="west">West</option>
                                <option value="north">North</option>
                                <option value="south">South</option>
                            </select>
                        </div>
                    </div>
                    <!--property face and Id-->

                    <div class="row pb-20">
                        <!--area and build year-->
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="totalArea">Total Area</label> <span
                                    class="text-danger">*</span>:
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" id="totalArea" placeholder="Total Area" class="w-100 b-5 pl-2">
                                </div>
                                <div class="col-md-6">
                                    <select name="mainarea" id="mainarea" class="w-100 p-1 b-5">
                                        <option value="east">East</option>
                                        <option value="west">West</option>
                                        <option value="north">North</option>
                                        <option value="south">South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="buildArea">Build Up Area</label> <span
                                    class="text-danger">*</span>:
                            </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" id="buildArea" placeholder="Build up Area"
                                        class="w-100 pl-2 b-5">
                                </div>
                                <div class="col-md-6">
                                    <select name="mainarea" id="mainarea" class="w-100 p-1 b-5">
                                        <option value="east">East</option>
                                        <option value="west">West</option>
                                        <option value="north">North</option>
                                        <option value="south">South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--area and build year-->

                    <div class="row pb-20">
                        <!--road access and build year year-->
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="buildyear">Build Year</label> <span
                                    class="text-danger">*</span>:
                            </h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="number" id="buildyear" placeholder="Build Year" class="w-100 b-5 pl-2">
                                </div>
                                <div class="col-md-4">
                                    <select name="yearlist" id="yearlist" class="w-100 p-1 b-5">
                                        <option value="bs">B.S</option>
                                        <option value="as">A.D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <h5 class="pb-2"><label for="road">Road Access Area</label> <span
                                    class="text-danger">*</span>:
                            </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" id="road" placeholder="Road Width" class="w-100 pl-2 b-5">
                                </div>
                                <div class="col-md-6">
                                    <select name="length" id="length" class="w-100 p-1 b-5">
                                        <option value="east">East</option>
                                        <option value="west">West</option>
                                        <option value="north">North</option>
                                        <option value="south">South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--road access and build year-->

                    <div class="row my-30">
                        <div class="col-2">
                            <span>Kitchen:</span>
                        </div>
                        <div class="col-10">
                            <div class="list">
                            <span class="kitchen noToggle"><span>1</span></span>
                            <span class="kitchen noToggle"><span>2</span></span>
                            <span class="kitchen noToggle"><span>3</span></span>
                            <span class="kitchen noToggle"><span>4</span></span>
                            <span class="kitchen forToggle"><span>5+</span></span>
                            <span class="extra-wrap"><input type="number" min="5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-30 py-30">
                        <div class="col-2">
                            <span>Rooms:</span>
                        </div>
                        <div class="col-10">
                            <div class="list">
                            <span class="rooms noToggle"><span>1</span></span>
                            <span class="rooms noToggle"><span>2</span></span>
                            <span class="rooms noToggle"><span>3</span></span>
                            <span class="rooms noToggle"><span>4</span></span>
                            <span class="rooms forToggle"><span>5+</span></span>
                            <span class="extra-wrap"><input type="number" min="5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-30">
                        <div class="col-2">
                            <span>Bathrooms:</span>
                        </div>
                        <div class="col-10">
                            <div class="list">
                            <span class="bathrooms noToggle"><span>1</span></span>
                            <span class="bathrooms noToggle"><span>2</span></span>
                            <span class="bathrooms noToggle"><span>3</span></span>
                            <span class="bathrooms noToggle"><span>4</span></span>
                            <span class="bathrooms forToggle"><span>5+</span></span>
                            <span class="extra-wrap"><input type="number" min="5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-30 py-30">
                        <div class="col-2">
                            <span>Floors:</span>
                        </div>
                        <div class="col-10">
                            <div class="list">
                            <span class="floors noToggles"><span>1</span></span>
                            <span class="floors noToggle"><span>2</span></span>
                            <span class="floors noToggle"><span>3</span></span>
                            <span class="floors noToggle"><span>4</span></span>
                            <span class="floors forToggle"><span>5+</span></span>
                            <span class="extra-wrap"><input type="number" min="5"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="pb-2"><label for="aminities">Aminities</label> <span
                                    class="text-danger">*</span>:
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 font-weight-light">
                                    <input type="checkbox" id="lawn" name="lawn" value="lawn">
                                    <label for="lawn">Lawn</label><br>
                                    <input type="checkbox" id="parking" name="parking" value="parking">
                                    <label for="parking">Parking</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">Well</label><br><br>
                                </div>
                                <div class="col-md-3 font-weight-light">
                                    <input type="checkbox" id="lawn" name="lawn" value="lawn">
                                    <label for="lawn">Lawn</label><br>
                                    <input type="checkbox" id="parking" name="parking" value="parking">
                                    <label for="parking">Parking</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">Well</label><br><br>
                                </div>
                                
                                <div class="col-md-3 font-weight-light">
                                    <input type="checkbox" id="lawn" name="lawn" value="lawn">
                                    <label for="lawn">Lawn</label><br>
                                    <input type="checkbox" id="parking" name="parking" value="parking">
                                    <label for="parking">Parking</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">Well</label><br><br>
                                </div>
                                <div class="col-md-3 font-weight-light">
                                    <input type="checkbox" id="lawn" name="lawn" value="lawn">
                                    <label for="lawn">Lawn</label><br>
                                    <input type="checkbox" id="parking" name="parking" value="parking">
                                    <label for="parking">Parking</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">Well</label><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="postAdSection my-20 p-20">
                    <h5 class="pb-20">Upload Photos <span class="text-danger">*</span>:
                    </h5>
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*" class="b-5">
                    <h5 class="py-20">Youtube Video:
                    </h5>
                    <label for="youtubeVideo">Enter Link:</label>
                    <input type="url" id="youtubeVideo" placeholder="Youtube Video Link" class="pl-2 w-50 b-5">
                </div>

                <div class="postAdSection p-20 b-5 mb-20">
                    <h5 class="pb-20"><label for="desc">Property Description</label> <span class="text-danger">*</span>:
                    </h5>
                    <textarea name="desc" id="desc" class="w-50 b-5" rows="10"></textarea>
                </div>

                <div class="postAdSection p-20 b-5 mb-20">
                    <h5 class="pb-20"><label for="price">Price</label> <span class="text-danger">*</span>:
                    </h5>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="number" id="price" placeholder="Price" class="b-5 w-100 pl-2">
                        </div>
                        <div class="col-md-3">
                            <select name="length" id="length" class="w-100 p-1 b-5">
                                <option value="east">East</option>
                                <option value="west">West</option>
                                <option value="north">North</option>
                                <option value="south">South</option>
                            </select>
                        </div>
                    </div>
                </div>

                <input type="submit" value="SUBMIT" class="mb-20 done b-5">
                </form>
            </div>
        </div>
    </div>
</div>


<a href="#" class="gotopbtn"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/jquery.unveil.js"></script>
<script src="js/app.js"></script>
</body>

</html>