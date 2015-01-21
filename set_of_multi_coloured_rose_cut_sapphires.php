<?php
// set_of_multi_coloured_rose_cut_sapphires.php

// you need to require the data file with image and blurb
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'gems_data.php'; // data file for this collection
// index of piece in data file
$piece = 0;
navbar();

// the unique contents will go here up to the footer
include_once INCPATH.'details.php';
?>

<?php footer(); ?>
