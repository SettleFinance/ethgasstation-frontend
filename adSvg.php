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

      $defiPulse = new ad();
      $defiPulse->href = 'http://bit.ly/3c1v8ds';
      $defiPulse->desktopImg = '/images/farmer_desktop_purple.svg';
      $defiPulse->mobileImg = '/images/farmer_mobile_purple.svg';
      $defiPulse->alt = 'DFP Farmer Newsletter';

      $golemAd = new ad();
      $golemAd->href = 'https://bit.ly/3r3EeMi';
      $golemAd->desktopImg = '/images/golem/banner_desktop.svg';
      $golemAd->mobileImg = '/images/golem/banner_mobile.svg';
      $golemAd->alt = 'Golem Banner';

      $ads = array($golemAd);

      $arrLength = count($ads) - 1;
      $index = mt_rand(0, $arrLength);
    ?>

    <a class="promo-desktop" href="<?php echo ($ads[$index]->href); ?>" target="_blank">
      <img class="promo-desktop" src="<?php echo ($ads[$index]->desktopImg); ?>" alt="<?php echo ($ads[$index]->alt); ?>">
    </a>
    <a class="promo-mobile" href="<?php echo ($ads[$index]->href); ?>" target="_blank">
    <img class="promo-mobile" src="<?php echo ($ads[$index]->mobileImg); ?>" alt="<?php echo ($ads[$index]->alt); ?>">
    </a>
  </div>
</div>