<div class="container">
<a href="<?php echo $back_button["_href"]; ?>" title="back to <?php echo $back_button["_text"]; ?>" class="btn btn-default"><i class="fa fa-angle-double-left"></i> <?php echo $back_button["_text"]; ?></a>
<div class="details">
  <div class="col-md-4 col-md-offset-4">
<?php

// main jewel image
$replace = array(" ", ",");
$replace_with = array("_","");
$filename = strtolower($items[$piece][0]);
$filename = str_replace($replace, $replace_with, $filename);
$img_file = $filename.".jpg";
img_tag($img_file);
?>
  </div>
  <div class="col-md-6 col-md-offset-3">
    <div>
    <h2><?php echo $items[$piece][0]; ?></h2>
    <p><?php echo $items[$piece][1]; ?></p>
    </div>
  </div>
</div>
</div>
