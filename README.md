sassalina-responsive
====================

update for sassalina to support various screen sizes

** Notes for future self
The bespoke pages consist of collections. These are lists of large thumbnail images which show some text on hover and take you to a details page on click. The details page then shows a larger individual image with the title of the piece and some description text underneath it.

Here is how I've set up the data for these pages. The title of the piece is many things as follows:
* Name of image file - title_of_piece.jpg
* Name of details file - title_of_piece.php
* The text that shows on hover on collection pages
* The title of the piece

Each data file for the collection contains an array of arrays. The inner array has the title of the piece as the first element and then the blurb / description text as the second element. The title of the piece in the array is held as a natural phrase i.e. space separated e.g. Tapered Baguette and Diamond Ring. A function called create_filename then changes this to lowercase and also separates it with underscores. The collection page then creates a list of thumbnail images which have a filename that matches that underscore separated lower cased phrase and a link to the details page which is the same filename but with a php extension. To create the filenames prior to uploading I wrote simple ruby script generate_filenames. Only did one file at a time but certainly speeded things up.
I initially set up the details page with an array index to find the details for that piece but it was tedious to find the index and what if the order was changed? I realised that the details page file could simply look up the details in the array. The name of the file could be used to search the array. The filename was already being cached by header.php to add meta tags and supply a body tag id attribute so I could use it. I used the same function that created the underscore separated filename to match against the current filename to find the array index and thus the details for the page - image, heading and description. This meant that the array index no longer needed to be supplied in the details file and if the order changed the details page could still __look itself up__ as it were.

** On the fly SEO
On the details pages with a little jquery I used the heading text again as the title tag text and the description text as meta description tag text. I also used the heading text as the image alt attribute. My default Static Site Starter SEO method is to put all of the title and description text in the meta_tags.php file but with so many pages that would have been tedious.

** Templates
My default Static Site Starter framework comes with a template.php file which I use to generate new pages but in this case as there were three other cases for template use I made some new ones as follows:
* collection_template.php
* details_template.php
* data/item_data_template.php

These hold basic boiler plate code to easily generate collection pages, details pages and collection data files. The data file supplies info for both the collection and details pages. Even though the file names for the data files are different the array names are the same. The repeated elements on the pages were further abstracted out into a separate file which was simply included namely, details.php and collection.php which hold the main body of the page.
