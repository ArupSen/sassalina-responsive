<?php
// data/gems_data.php

// Only the file name needs to be different - the array names can be the same

// back button is only used in the details pages
$back_button = array(
  '_href' => 'gems.php', // relative url to main collection page
  '_text' => 'gems' // title attribute of back button and text
);

// array of image file names, which is also title of item and then blurb
// array('heading text', 'the blurb');
$gems_extra_blurb = "Over the years I have sourced many stones for specialist collectors. I have the ability to source incredible quality Large and Coloured Diamonds and Rare and Untreated Coloured stones from abroad when necessary. Gemmological Lab certificates can also be supplied. I also make high end Gem bead necklaces to order, stringing is also a service I can provide. If you are looking for a specific Gemstone do call and we can discuss.";
$items = array(
array('Paraiba Type Tourmaline Cabochon cut','17.55cts Paraiba Type Tourmaline Cabochon cut (19x15mm) Certificate available'),
array('Tanzanite Cushion','19,02cts (17x14.6mm)'),
array('Deep Pink Pear shaped Tourmaline','13.25cts (18x13mm)'),
array('Ruby drop pair','Natural Certificated Ruby Pear shape drops (5x5.7mm)'),
array('Blue Zircon Brilliant cut pair','11.87cts (10.4mm)'),
array('Tanzanite princess cut pair','8.30cts (9mm)'),
array('Mandarin Spessartite garnet oval','7.14cts (13.6x9.6)'),
array('Untreated Sapphire cushion','5.01cts (9x9mm)'),
array('Untreated Yellow Sri Lankan Sapphire oval','11.41cts (13.8x11mm)'),
array('Green Madagascan Sapphire oval','9.01cts (13.4x10.4mm)'),
array('Burmese Red Spinel Cushion','9.35cts (13.5x11.7mm)'),
array('peridot oval','15.45cts (18.4x13.1mm)'),
array('Deep pink tourmaline oval','22.86cts (19.2x16.8mm)'),
array('Black star diopside','This fabulous set of star Diopside could be used to make another set of cufflinks…the original pair were set in 9 ct white gold and engraved on the rods with the couple\'s wedding anniversary…unfortunately they were whisked over to Ireland for a Christmas present before I could photograph them!!'),
array('Set of multi coloured rose cut sapphires', 'Total weight 16.61 cts, see \'Necklaces\' for setting options.'),
array('Set of pink rose cut Sapphires','Total weight 8.49cts, see \'Necklaces\' for setting options ')
);
// add the extra blurb to the existing blurb
$item_count = count($items);
for ($i = 0; $i < $item_count; $i++) {
  $items[$i][1] = $items[$i][1].'<br>'.$gems_extra_blurb;
}
?>
