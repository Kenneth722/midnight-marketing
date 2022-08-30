<section id="hero" class="hero d-flex">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up"></h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p><?php echo $category_details->description; ?></p>
          </blockquote>
          <!-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->

        </div>
        <div class="col-xl-1">
        	
        </div>
        <div class="col-xl-6 services-list" data-aos="fade-up" data-aos-delay="100">
        	<h2 data-aos="fade-up">Sub Categories</h2>
          <div class="row gy-5">
          <?php foreach($sub_categories as $sub_category) { ?>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="icon flex-shrink-0"><i class="bi bi-list-ul" style="color: #ffffff;"></i></div>
              <div>
                <h4 class="title"><a href="" class="stretched-link text-white"><?php echo $sub_category->name; ?></a></h4>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
        <div class="col-xl-1" data-aos="fade-up" data-aos-delay="100">
          <a href="categories/addSubCategoryView?id=<?php echo $category_details->id; ?>"><i class="bi bi-plus" style="color: #ffffff;">Add New</i></a>
        </div>
      </div>
    </div>
</section><!-- End Hero Section -->

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>