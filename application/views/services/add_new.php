<section id="hero" class="hero d-flex">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Add Service for <?php echo $sub_category_details->name ?></h2>
          <!-- <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>We Offer business advertising solution for every category on our Website.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->

        </div>
        <div class="col-xl-1">
          
        </div>
        <div class="col-xl-7">
          <div class="card opacity-75" data-aos="fade-up">
            <div class="card-header">
              <div class="card-title">
                <label>Add Service for <?php echo $sub_category_details->name ?></label>
              </div>
            </div>
            <div class="card-body">
              <form action="services/addNew" method="POST">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="form-label">Description</label>
                      <input type="text" name="description" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="form-label">Duration</label>
                      <input type="number" name="duration" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <input type="hidden" name="sub_category" value="<?php echo $id; ?>">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 mt-3">
                    <div class="form-group">
                      <button class="btn btn-primary form-control" type="submit" name="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
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