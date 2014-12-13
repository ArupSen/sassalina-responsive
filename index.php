<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div id="carousel-sassalina" class="carousel slide col-lg-offset-1" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-sassalina" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-sassalina" data-slide-to="1"></li>
    <li data-target="#carousel-sassalina" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
<?php
img_tag('jewels_slide.jpg');
?>
    </div>
    <div class="item">
<?php
img_tag('Planters_slide.jpg');
?>
    </div>
    <div class="item">
<?php
img_tag('smaller_ring.jpg');
?>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-sassalina" role="button" data-slide="prev">
    <span class="fa fa-caret-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-sassalina" role="button" data-slide="next">
    <span class="fa fa-caret-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php footer(); ?>
