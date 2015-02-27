<?php
// claret_tourmaline_earrings.php


// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'earrings_data.php'; // data file for this collection
navbar();
// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
?>

<?php footer(); ?>
