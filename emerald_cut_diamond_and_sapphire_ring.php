<?php
// emerald_cut_diamond_and_sapphire_ring.php

// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'coloured_rings_data.php'; // data file for this collection
require_once DATAPATH.'testimonials_data.php'; // testimonials
navbar();

// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
$name = 'valerie';
include_once INCPATH.'testimonial.php';
?>

<?php footer(); ?>
