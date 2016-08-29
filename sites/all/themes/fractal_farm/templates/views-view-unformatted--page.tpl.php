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
<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 menu-group" data-equalizer data-options="equalize_on_stack: true">
<?php foreach ($rows as $id => $row): ?>
  <li data-equalizer-watch>
    <div class="panel">
    <?php print $row; ?>
    </div>
  </li>
<?php endforeach; ?>
</ul>
