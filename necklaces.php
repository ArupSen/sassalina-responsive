<?php
// necklaces.php

// data will be fetched from data file
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'necklaces_data.php'; // data file for this collection
navbar();

// the unique contents will go here up to the footer
?>
<h2>NECKLACES</h2>
<?php
include_once INCPATH.'collection.php';
?>

<?php footer(); ?>
