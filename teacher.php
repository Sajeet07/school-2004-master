<?php 
 require 'include/header.php';
 ?>
 <!-- navbar section start -->
 <?php 
 require 'include/navbar.php';
 ?>
 <!-- navbar section end -->

     <!-- start banner Area -->
     <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Teachers
                    </h1>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!--  Start teacher info area  -->
    <section class="message-area my-4">
    <div class="container-fluid row justify-content-around"  >
        <div class="card col-lg-3 ">
            <img class="card-img-top" src="img/message/principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">John</h5>
                <p class="card-text"> BBA - HOD</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="card card col-lg-3">
            <img class="card-img-top" src="img/message/vice-principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robert</h5>
                <p class="card-text"> BCA - HOD</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card card col-lg-3 ">
            <img class="card-img-top" src="img/message/principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Danish</h5>
                <p class="card-text"> Vice-Principal</p>
               
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

    </div>
</section>
<!--  End teacher info area  -->
<nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
  

 <!-- start footer area -->
 <?php require ('include/footer.php'); ?>
 <!-- end footer area -->