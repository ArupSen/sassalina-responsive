<?php
// rough_cut_amethyst_bead_necklace.php

// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'necklaces_data.php'; // data file for this collection
// index of piece in data file
$piece = 7;
navbar();

// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
?>

<?php footer(); ?>
