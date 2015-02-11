<?php
// -- footer.php --
?>

</div><!-- end of contents -->
<div id="footer"> 
<?php
img_tag('footer_logo.png');
?>
<hr class="left-line">
<hr class="right-line">
  <nav class="navbar navbar-default" role="navigation">
  <ul id="navbar" class="nav nav-justified">
    <li id="nav-privacy"><a href="cookies.pdf" target="_blank" title="privacy and cookies">privacy and cookies</a></li>
    <li id="nav-contact"><a href="contact.php" title="contact">contact</a></li>
    <li id="nav-terms"><a href="terms_and_conditions.pdf" target="_blank" title="terms and conditions">terms and conditions</a></li>
  </ul>
  </nav>
<?php
include('social.php');
?>
</div> <!-- end of footer -->
</div> <!-- end of wrap -->
<?php
// latest jquery and bootstrap js from cdn
// this site's js delivered from the js folder
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo JSPATH.'main.js'; ?>"></script>
<?php
//Google Analytics: change UA-XXXXX-X to be your site's ID.
?>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-29067463-1');ga('send','pageview');
        </script>
</body>
</html>
