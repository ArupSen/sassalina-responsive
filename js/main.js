// Site specific js code
(function(){
  'use strict';
  // hovering over thumbnail images creates tooltip
    var $thumb = $('.thumbnail');
    var hoverText = $thumb.find('img').attr('alt');
  $thumb.on('mouseenter', function() {
    hoverText = $(this).find('img').attr('alt');
    $(this).find('img').attr('title','');
    $(this).append('<span>' + hoverText + '</span>');
  });
  $thumb.on('mouseleave', function() {
    $(this).find('span').remove();
  });
  // swap the image on the details page
  //var $main_img = $('.details img');
  //var old_src = $main_img.attr('src');
  //var new_src = old_src.replace(/.jpg/g, '_swap.jpg');
  //var source = new_src;
  //$main_img.on('mouseenter', function() {
  //  $(this).error(function() {
  //    source = old_src;
  //  }).attr('src', source);
  //});
  //$main_img.on('mouseleave', function() {
  //  $(this).attr('src', old_src);
  //});
  // some on the fly quick and dirty SEO
  // first check if the .details div exists
  // only works on the item detail pages
  var hasDetails = false;
  var $details = $('.details');
  hasDetails = $details !== [];
  if (hasDetails) {
    $('title').text($details.find('h2').text());
    $('meta[name="description"]').attr('content', $details.find('p').text());
    $details.find('img').attr('alt', $details.find('h2').text());
  }
}());
