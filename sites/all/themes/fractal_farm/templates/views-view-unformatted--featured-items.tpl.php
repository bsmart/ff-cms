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
<div class="row featured" data-equalizer data-options="equalize_on_stack: true"><?php foreach ($rows as $id => $row): ?>
    <div class="small-12 medium-4 columns" data-equalizer-watch>
      <?php print $row; ?>
    </div>
  <?php endforeach; ?></div>
