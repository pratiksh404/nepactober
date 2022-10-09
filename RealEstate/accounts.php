<?php include('layouts/header.php'); ?>

<div class="grey">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
                <?php include('layouts/sidebar.php'); ?>
            </div>


            <div class="col-md-9">

                <div class="postAdSection p-20 user-profile">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/pp.jpg" alt="User Image" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <form action="">
                                <div>
                                    <label for="username">Username</label>
                                    <br>
                                    <input type="text" id="username" placeholder="Username" class="w-100 typeBorder b-5 p-2">
                                </div>
                                <div class="my-3">
                                    <label for="email">Email</label>
                                    <br>
                                    <input type="email" id="email" placeholder="Email" class="w-100 typeBorder b-5 p-2">
                                </div>
                                <div>
                                    <label for="date">Date of Birth</label>
                                    <br>
                                    <input type="date" id="date" placeholder="dd/mm/yyyy" class="w-100 typeBorder b-5 p-2">
                                </div>
                                <div class="my-3">
                                    <label for="name">Full Name</label>
                                    <br>
                                    <input type="text" id="name" placeholder="Enter your name" class="w-100 typeBorder b-5 p-2">
                                </div>
                                <div>
                                    <label for="phone">Phone Number</label>
                                    <br>
                                    <input type="number" id="phone" placeholder="Enter your number" class="w-100 typeBorder b-5 p-2">
                                </div>
                                <button type="button" class="btn btn-success btn-lg btn-block mt-3 p-1">SUBMIT INFORMATION</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--footer-->
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