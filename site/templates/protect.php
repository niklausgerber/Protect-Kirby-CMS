<!-- Checks for protection -->
<?php
if ($page->password() != '')
  snippet('protect');
?>

<!-- Header -->
<?php snippet('header') ?>

<!-- Site template -->
<h1><?php echo html($page->title()) ?></h1>
<?php echo kirbytext($page->text()) ?>		