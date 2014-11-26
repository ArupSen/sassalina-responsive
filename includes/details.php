<div class="container">
<h2><?php echo $back_button["_text"]; ?></h2>
<a href="<?php echo $back_button["_href"]; ?>" title="back to <?php echo $back_button["_text"]; ?>" class="btn btn-default back-button"><i class="fa fa-angle-double-left"></i> <?php echo $back_button["_text"]; ?></a>
<div class="details">
  <div class="col-md-4 col-md-offset-4">
<?php

// main jewel image
// filename has already been assigned in header.php by the file including this one
$img_file = $filename.".jpg";
img_tag($img_file);

// look up data for this piece in items array
$num_items = count($items);
for ($i = 0; $i < $num_items; $i++) {
  if  (create_filename($items[$i][0]) == $filename) {
    $piece = $i;
  }
}
?>
  </div>
  <div class="col-md-6 col-md-offset-3">
    <div>
    <h2><?php echo $items[$piece][0]; ?></h2>
    <hr>
    <p><?php echo $items[$piece][1]; ?></p>
    </div>
  </div>
</div>
</div>
