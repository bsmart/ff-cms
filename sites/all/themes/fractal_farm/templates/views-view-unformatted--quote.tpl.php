<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="small-centered small-12 medium-10 large-8 columns">
    <div class="quote_text">
          <?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>