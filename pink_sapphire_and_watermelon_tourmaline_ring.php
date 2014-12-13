<?php
// pink_sapphire_and_watermelon_tourmaline_ring.php

// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'coloured_rings_data.php'; // data file for this collection
// index of piece in data file
$piece = 22;
navbar();

// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
?>

<?php footer(); ?>
