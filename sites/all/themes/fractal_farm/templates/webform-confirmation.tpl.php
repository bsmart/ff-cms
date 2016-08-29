<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<div id="alertModal" class="webform-confirmation alert-box success radius" data-reveal data-alert class="alert-box success radius">
    <?php print t('Thank you, we will contact you soon.'); ?>
    <a href="#" class="close close-reveal-modal">&times;</a>
</div>