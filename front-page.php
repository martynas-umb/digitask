<?php get_header(); ?>

<section class="intro">
  <div class="main-container">
<!--    <div class="mobile-wrapper">-->
    <div class="intro-content">
      <h1><?php echo get_field('intro_title'); ?></h1>
      <div class="text-wrapper">
        <?php echo get_field('intro_content'); ?>
      </div>
      <div class="intro-apps">
        <div class="apple-store">
          <a href="<?php echo get_field('apple_store_link'); ?>">
            <?php
            $apple_img_id = get_field('apple_store_image');
            echo wp_get_attachment_image($apple_img_id, 'full'); ?>
          </a>
        </div>
        <div class="google-play">
          <a href="<?php echo get_field('google_store_link'); ?>">
            <?php
            $google_img_id = get_field('google_store_image');
            echo wp_get_attachment_image($google_img_id, 'full');
            ?>
          </a>
        </div>
      </div>
    </div>
    <div class="intro-image">
      <?php
      $section_img_id = get_field('section_image');
      echo wp_get_attachment_image($section_img_id, 'full');
      ?>
    </div>
<!--    </div>-->
    <div class="break"></div>
    <div class="scroll-down">
      <p>SCROLL DOWN</p>
    </div>
  </div>
</section>
</div><!-- Intro background end-->
<section class="refuel">
  <div class="main-container">
    <div class="color-wrapper">
    <div class="refuel-content">
      <div class="section-num">
        <?php echo get_field('refuel_number'); ?>
      </div>
      <h2>
        <?php echo get_field('refuel_title'); ?>
      </h2>
      <div class="text-wrapper">
        <?php echo get_field('refuel_content'); ?>
      </div>
    </div>
    <div class="refuel-image">
      <?php
      $refuel_img_id = get_field('refuel_image');
      echo wp_get_attachment_image($refuel_img_id, 'full');
      ?>
    </div>
    </div>
    <div class="section-indicator">
      <div class="item"></div>
      <div class="item"></div>
      <div class="item active">
        <span class="num">
          <?php echo get_field('refuel_number'); ?>
        </span>
      </div>
      <div class="item"></div>
    </div>
    <div class="scroll-down">
      <p>SCROLL DOWN</p>
    </div>
  </div>
  <div class="get-the-app">
    <a href="<?php echo get_field('apple_store_link'); ?>" class="apple-icon">
      <img src="/wp-content/uploads/2020/04/apple-icon.png" alt="apple-icon">
    </a>
    <a href="<?php echo get_field('google_store_link'); ?>" class="android-icon">
      <img src="/wp-content/uploads/2020/04/android-icon.png" alt="android-icon">
    </a>
    <div class="wrapper">
    <p>get the app</p>
    </div>
  </div>
</section>
<?php get_footer(); ?>
