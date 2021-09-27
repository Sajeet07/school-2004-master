 <?php
 require 'include/header.php';
 ?>

 <body>

     <!-- navbar section include  -->
     <?php 
         require 'include/navbar.php';
         ?>

     <!-- start banner Area -->
     <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
             <div class="row d-flex align-items-center justify-content-center">
                 <div class="about-content col-lg-12">
                     <h1 class="text-white">
                         Gallery
                     </h1>
                     <p class="text-white link-nav"><a href="index.php">Home </a> <span
                             class="lnr lnr-arrow-right"></span> <a href="gallery.php"> Gallery</a></p>
                 </div>
             </div>
         </div>
     </section>
     <!-- End banner Area -->

     <!-- Start gallery Area -->
     <section class="gallery-area section-gap">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7">
                     <a href="img/gallery/g1.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g1.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-5">
                     <a href="img/gallery/g2.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g2.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-4">
                     <a href="img/gallery/g3.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g3.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-4">
                     <a href="img/gallery/g4.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g4.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-4">
                     <a href="img/gallery/g5.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g5.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-5">
                     <a href="img/gallery/g6.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g6.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-7">
                     <a href="img/gallery/g7.jpg" class="img-gal">
                         <div class="single-imgs relative">
                             <div class="overlay overlay-bg"></div>
                             <div class="relative">
                                 <img class="img-fluid" src="img/gallery/g7.jpg" alt="">
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </section>
     <!-- End gallery Area -->


  
     <section class="online-course">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <span class="title">Our Gallery</span>
                        <h2>Step forward to gain the knowledge</h2>
                        <div class="divider">
                            <span class="fa fa-mortar-board"></span>
                        </div>
                    </div>
                    <p class="p-17">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book.</p>
                    <p class="p-17">It has survived not only five centuries, but also the leap into electronic
                        typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets
                        containing Lorem Ipsum passages.</p>
                    <button type="button" class="btn theme-orange theme-btn my-2 join-us">Learn More</button>
                </div>
                <div class="col-lg-6">
                    <div class="course-block  d-flex justify-content-between bg-light pa-2 mx-5 my-3" data-aos="fade-up"
                         data-aos-duration="550">
                        <img src="assets/images/icons/promotion.png" class="img-fluid m-auto" alt="Key Of Success">
                        <div class="course-text pl-5">
                            <h4>Our Events Gallery</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="course-block  d-flex justify-content-between theme-blue pa-2 mx-5 my-3"
                         data-aos="fade-up"
                         data-aos-duration="550">
                        <img src="assets/images/icons/career.png" class="img-fluid m-auto" alt="Our Philosophy">
                        <div class="course-text pl-5">
                            <h4>Our Sports Gallery</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="course-block  d-flex justify-content-between theme-orange pa-2 mx-5 mt-3"
                         data-aos="fade-up"
                         data-aos-duration="550">
                        <img src="assets/images/icons/feminism.png" class="img-fluid m-auto" alt="Our Principle">
                        <div class="course-text pl-5">
                            <h4>Our Picnic Gallery</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
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
     <!-- start footer Area -->
     <?php require ('include/footer.php'); ?>