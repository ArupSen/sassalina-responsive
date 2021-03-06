<?php
// -- about.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row">
  <div class="col-md-6 about-pic">
  <?php img_tag('sarah_smaller.jpg'); ?>
  </div>
  <div class="col-md-6">
  <p>
  Sassalina was born from a life-long passion for jewellery and gems.  As a teenager my parents encouraged me to design jewellery incorporating inherited gems and I still wear these pieces today. I believe if the bespoke design perfectly suits the style of the wearer the jewellery will be timeless and the memories held within the piece very powerful.  
  </p>
  <p>After having my three children, I was determined to have a second career based on my passion. I started by attending holiday courses at Central St Martin’s in jewellery making.   Knowledge of making is essential to design, however quite quickly I knew I wanted to become a Gemmologist.  In 2008 I returned to full time study and become a Fellow of the Gemological Association of Great Britain.  I have also attended GIA courses in jewellery drawing. I have been designing for myself since 1983 and for clients since 2006.
  </p>
<p>Sarah Freeman</p>
  </div>
</div>
<div class="row logos">
  <div class="col-md-4 slf">
  <?php img_tag('slf_logo.jpg'); ?>
  </div>
  <div class="col-md-4 gem-soc">
  <?php img_tag('member_coa.jpg'); ?>
  </div>
  <div class="col-md-4 leopard">
  <?php img_tag('leopard_head.jpg'); ?>
  </div>
</div>
<?php footer(); ?>
