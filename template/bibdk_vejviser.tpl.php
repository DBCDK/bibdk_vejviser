<?php
/**
 * Roughly display mockup
 * Note: Not prepared for translation
 * @see TingClientAgencyAgency.php and TingClientAgencyBranch.php in ting-client/lib/result for an overview of the result objects
 */
?>
<?php if (isset($libraries)) : ?>
  <h4><?php t('Library directory - result - choose library ', array(), array('context' => 'bibdk_vejviser')); ?></h4>
  <p><?php t('Total:', array(), array('context' => 'bibdk_vejviser')); ?> <?php print $count ?></p>
  <hr/>
  <?php foreach ($libraries as $branch) : ?>

    <?php print theme('bibdk_agency', array('branch' => $branch)); ?>

  <?php endforeach; ?>
<?php endif; ?>