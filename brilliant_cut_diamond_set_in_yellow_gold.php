<?php // brilliant_cut_diamond_set_in_yellow_gold.php

// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'diamond_rings_data.php'; // data file for this collection
require_once DATAPATH.'testimonials_data.php';
navbar();

// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
$name = 'sandra';
include_once INCPATH.'testimonial.php';
?>

<?php footer(); ?>
