<div class="row">
  <div class="container">
    <?php
    $total = count($items);
    $replace = array(" ", ",");
    $replace_with = array("_","");
    for ($i = 0; $i < $total; $i++) {
      $filename = strtolower($items[$i][0]);
      $filename = str_replace($replace, $replace_with, $filename);
      $img_file = $filename.".jpg";
      $details_file = $filename.".php";
      echo '<a href="'.$details_file.'" class="pull-left thumbnail col-sm-4 col-xs-12 col-md-3">';
      img_tag($img_file,$items[$i][0]);
      echo '</a>';
    }
    ?>
  </div>
</div>
