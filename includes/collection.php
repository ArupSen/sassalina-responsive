<div class="row">
  <div class="container">
    <?php
    $total = count($items);
    for ($i = 0; $i < $total; $i++) {
      $tmp = $items[$i][0];
      $img_file = create_filename($tmp).".jpg";
      $details_file = create_filename($tmp).".php";
      echo '<a href="'.$details_file.'" class="pull-left thumbnail col-sm-4 col-xs-12 col-md-3">';
      img_tag($img_file,$tmp);
      echo '</a>';
    }
    ?>
  </div>
</div>
