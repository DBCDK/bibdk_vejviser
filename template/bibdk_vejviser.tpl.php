
<?php
/**
 * Roughly display mockup
 * Note: Not prepared for translation
 * @see TingClientAgencyAgency.php and TingClientAgencyBranch.php in ting-client/lib/result for an overview of the result objects
 */
?>
<?php if (isset($result) && $result) : ?>
  <h4>Biblioteksvejviser - resultat - vælg bibliotek</h4>
  <p>i alt: <?php print $result['count']; ?></p>
  <hr/>
  <?php foreach ($result['libraries'] as $branch) : ?>

    <?php print theme('bibdk_agency', array('branch' => $branch)); ?>

  <?php endforeach; ?>
<?php endif; ?>
