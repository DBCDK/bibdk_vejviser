<?php
/**
 *
 */
?>
<div id="bibdk-vejviser-header">
  <div id="bibdk-vejviser-count"><?php print t('@count records', array('@count' => $count), array('context' => 'bibdk_vejviser')); ?></div>
  <?php print $search_form; ?>
  <?php if ($count > 0): ?>
    <div class="bibdk-vejviser-help-text">
    <?php print t($ting_info_holder); ?><br/>
    </div>
  <?php endif; ?>
</div>
