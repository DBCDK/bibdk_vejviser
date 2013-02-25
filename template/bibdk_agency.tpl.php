<div class="agency-container">

  <div class="left-infobox">
    <p><?php print $branch->branchName; ?></p>

    <?php if (isset($branch->postalAddress) && $branch->postalAddress) : ?>
      <p><?php print $branch->postalAddress; ?><br/>
        <?php print $branch->postalCode; ?> <?php print $branch->city; ?><br/>
        <?php $findVej = $branch->postalAddress . ',' . $branch->postalCode; ?>
        <a href="http://findvej.dk/<?php print urlencode($findVej); ?>" target="_blank" /><?php t('See on map (findvej.dk)', array(), array('context' => 'bibdk_vejviser')); ?></a></p>
    <?php endif; ?>

    <?php if (isset($branch->branchPhone) && $branch->branchPhone) : ?>
      <span><?php t('Telephone:', array(), array('context' => 'bibdk_vejviser')); ?><?php print $branch->branchPhone; ?></span>
    <?php endif; ?>

    <?php if (isset($branch->branchEmail) && $branch->branchPhone) : ?>
      <p><?php t('E-mail:', array(), array('context' => 'bibdk_vejviser')); ?><a href="mailto:<?php print $branch->branchEmail ?>"/><?php print $branch->branchEmail ?></a></p>
    <?php endif; ?>
  </div>

  <div class="right-infobox">
    <?php if (isset($branch->branchWebsiteUrl) && $branch->branchWebsiteUrl) : ?>
      <p><a href="<?php print $branch->branchWebsiteUrl ?>" target="_blank" /><?php t('Library homepage', array(), array('context' => 'bibdk_vejviser')); ?></a><br/>
      <?php endif; ?>
      <?php if (isset($branch->serviceDeclarationUrl) && $branch->serviceDeclarationUrl) : ?>
        <a href="<?php print $branch->serviceDeclarationUrl ?>" target="_blank" /><?php t('Service declaration', array(), array('context' => 'bibdk_vejviser')); ?>></a></p>
    <?php endif; ?>
    <?php if (isset($branch->openingHours) && $branch->openingHours) : ?>
      <p><?php t('Opening hours:', array(), array('context' => 'bibdk_vejviser')); ?><br/>
        <?php foreach ($branch->openingHours as $hours) : ?>
          <?php print $hours->{'$'}; ?>
          <br/>
        <?php endforeach; ?>
      </p>
    <?php endif; ?>
  </div>

  <?php
// give each branch a unique classname for messages to show correct
  echo '<div class="messages_' . $branch->branchId . '"></div>';
  ?>

  <div>
    <!-- additional html; buttons etc. -->
    <?php if (isset($branch->addit)) : ?>
      <?php foreach ($branch->addit as $addit) : ?>
        <div><?php print $addit; ?></div>
      <?php endforeach; ?>
    <?php endif; ?>

    <hr/>
  </div>
