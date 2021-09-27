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
                    Messages
                </h1>

            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!--  Start message area  -->
<section class="message-area my-4">
    <div class="container-fluid row justify-content-around"  >
        <div class="card col-lg-3 ">
            <img class="card-img-top" src="img/message/principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">John</h5>
                <h6>Message From</h6>
            
                <p class="card-text"> BBA - HOD</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nostrum velit earum facere nihil, amet tempore porro omnis veritatis tempora rem magnam non, ipsam voluptatem molestiae, nam optio corporis? Quam tenetur a debitis optio nesciunt!</p>
                <p class="card-text"> BCA - HOD</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="card card col-lg-3">
            <img class="card-img-top" src="img/message/vice-principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Robert</h5>
                
                <h6>Message From</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nostrum velit earum facere nihil, amet tempore porro omnis veritatis tempora rem magnam non, ipsam voluptatem molestiae, nam optio corporis? Quam tenetur a debitis optio nesciunt!</p>
                <p class="card-text"> BCA - HOD</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="card card col-lg-3 ">
            <img class="card-img-top" src="img/message/principal.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Danish</h5>
                
                <h6>Message From</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nostrum velit earum facere nihil, amet tempore porro omnis veritatis tempora rem magnam non, ipsam voluptatem molestiae, nam optio corporis? Quam tenetur a debitis optio nesciunt!</p>
                <p class="card-text"> Vice-Principal</p>
               
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        
    </div>
</section>
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
<!--  End message area  -->

<!-- start footer area -->
<?php require ('include/footer.php'); ?>
<!-- end footer area -->