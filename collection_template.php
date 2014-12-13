<?php
// ******* DO NOT USE THIS FILE FOR CONTENT ******

// make a copy in order to create a collection page
// data will be fetched from data file
require_once 'inc_path.php';
require_once INCPATH.'header.php';
require_once DATAPATH.'_data.php'; // data file for this collection
navbar();

// the unique contents will go here up to the footer
?>
<h2>COLLECTION NAME</h2>
<?php
include_once INCPATH.'collection.php';
?>

<?php footer(); ?>
