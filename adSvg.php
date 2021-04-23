<div class="promo-wrap">
  <div class="promo-svg-cont">
    <!-- DEFAULT DFP FARMER NEWSLETTER -->
    <!-- <a href="http://bit.ly/3c1v8ds" target="_blank">
      <img class="promo-desktop" src="/images/farmer_desktop_purple.svg" alt="DFP Farmer Newsletter">
      <img class="promo-mobile" src="/images/farmer_mobile_purple.svg" alt="DFP Farmer Newsletter">
    </a> -->
    <?php

      class ad {
        public $href;
        public $desktopImg;
        public $mobileImg;
        public $alt;
      }

      $golemAd = new ad();
      $golemAd->href = 'https://bit.ly/3r3EeMi';

      $ads = array($golemAd);
    ?>

    <a class="promo-desktop" href="https://bit.ly/3r3EeMi" target="_blank">
      <img class="promo-desktop" src="/images/golem/banner_desktop.svg" alt="Golem Banner">
    </a>
    <a class="promo-mobile" href="<?php echo ($ads[0]->href); ?>" target="_blank">
    <img class="promo-mobile" src="/images/golem/banner_mobile.svg" alt="Golem Banner2">
    </a>
  </div>
</div>