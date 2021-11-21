<section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Mission</h2>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <?php 
          foreach ($ourmission as $ourmission) {
          ?>
            <div class="col-lg-4" style="margin-top: 4rem;">
            <div style="padding: 0rem 8.5rem; margin-bottom:2rem">
              <img src="<?= base_url('uploads/ourmission/'.$ourmission->FOTO)?>" alt=""
              style="width: 100%;">
            </div>
            <p style="font-weight: 600; text-align:center; font-size: 1rem">
              <?= $ourmission->DESCRIPTION ?>
            </p>
          </div>
          <?php } ?>

        </div>
      </div>
    </section>
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-subtitle" style="font-size: 1.8rem; background: none">
          Nusantara Coco Indo establishment with the three value of Sustainable Development Goals</h2>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <div class="col-lg-4" style="margin-top: 4rem;">
            <div style="padding: 0rem 4rem; margin-bottom:2rem">
              <img src="<?= base_url('assets/img/user/sdgs/SDGS8.jpg')?>" alt="SDGs8"
              style="width: 100%;">
            </div>
            <p style="font-weight: 600; text-align:center; font-size: 1rem">
              Creating an integrated export ecosystem between stakeholders
            </p>
          </div>
          <div class="col-lg-4" style="margin-top: 4rem;">
            <div style="padding: 0rem 4rem; margin-bottom:2rem">
              <img src="<?= base_url('assets/img/user/sdgs/SDGS12.jpg')?>" alt="SDGs12"
              style="width: 100%;">
            </div>
            <p style="font-weight: 600; text-align:center; font-size: 1rem">
              Empowering domestic production Improve quality, quantity, and continuity through collaboration between stakeholders
            </p>
          </div>
          <div class="col-lg-4" style="margin-top: 4rem;">
            <div style="padding: 0rem 4rem; margin-bottom:2rem">
              <img src="<?= base_url('assets/img/user/sdgs/SDGS15.jpg')?>" alt="SDGs15"
              style="width: 100%;">
            </div>
            <p style="font-weight: 600; text-align:center; font-size: 1rem">
              Increase employment and inclusive economic growth
            </p>
          </div>
        </div>
      </div>
    </section>