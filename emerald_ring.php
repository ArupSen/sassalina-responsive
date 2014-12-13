<?php
// -- emerald_ring.php --

// this file is only for generating detail pages
// copy and paste all the code listed here
// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
//require_once DATAPATH.'_data.php'; // data file for this collection
navbar();

// the unique contents will go here up to the footer
// TODO put the snippet below in a function with array elements to replace defaults
?>
<div class="container">
<a href="coloured_rings.php" title="back to coloured rings" class="btn btn-default"><i class="fa fa-angle-double-left"></i> coloured rings</a>
<div class="details">
  <div class="col-md-4 col-md-offset-4">
<?php
// main jewel image
img_tag('ring-5.jpg');
?>
  </div>
  <div class="col-md-6 col-md-offset-3">
    <div>
      <h2>Green Tourmaline and Diamond Ring</h2>
        <p>Having a passionate love of emeralds and cocktail rings, my client was completely wowed by this amazing blue/green 6.92ct emerald cut Tourmaline. Setting it in 18ct white gold with two tapered baguette Diamonds created a really sophisticated ring.</p>
    </div>
  </div>
</div>
</div>



<?php footer(); ?>
