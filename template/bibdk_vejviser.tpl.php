
<?php
/**
 * Roughly display mockup
 * Note: Not prepared for translation
 * @see TingClientAgencyAgency.php and TingClientAgencyBranch.php in ting-client/lib/result for an overview of the result objects
 */
?>

<h4>Biblioteksvejviser - resultat - vælg bibliotek</h4>

<p>i alt: <?php print $result['count']; ?></p>
<hr/>
<?php foreach ($result['libraries'] as $agency) : ?>
  <?php foreach ($agency->pickUpAgencies as $branch) : ?>

    <div class="agency-container">

      <div class="left-infobox">
        <p><?php print $branch->branchName; ?><br/>
          (<?php print $agency->agencyName; ?>)</p>

        <?php if (isset($branch->postalAddress) && $branch->postalAddress) : ?>
          <p><?php print $branch->postalAddress; ?><br/>
            <?php print $branch->postalCode; ?> <?php print $branch->city; ?><br/>
            <?php $findVej = $branch->postalAddress.','.$branch->postalCode;?>
            <a href="http://findvej.dk/<?php print urlencode($findVej); ?>" target="_blank" />Se på kort (findvej.dk)</a></p>
        <?php endif; ?>

        <?php if (isset($branch->branchPhone) && $branch->branchPhone) : ?>
          <span>Telefon: <?php print $branch->branchPhone; ?></span>
        <?php endif; ?>

        <?php if (isset($branch->branchEmail) && $branch->branchPhone) : ?>
          <p>E-mail: <a href="mailto:<?php print $branch->branchEmail ?>"/><?php print $branch->branchEmail ?></a></p>
        <?php endif; ?>
      </div>

      <div class="right-infobox">
        <?php if (isset($branch->branchWebsiteUrl) && $branch->branchWebsiteUrl) : ?>
          <p><a href="<?php print $branch->branchWebsiteUrl ?>" target="_blank" />Bibliotekets hjemmeside></a><br/>
          <?php endif; ?>
          <?php if (isset($branch->serviceDeclarationUrl) && $branch->serviceDeclarationUrl) : ?>
            <a href="<?php print $branch->serviceDeclarationUrl ?>" target="_blank" />Servicedeklaration></a></p>
        <?php endif; ?>
        <?php if (isset($branch->openingHours) && $branch->openingHours) : ?>
          <p>Åbningstider:<br/> 
            <?php foreach ($branch->openingHours as $hours) : ?>
              <?php print $hours->{'$'}; ?>
              <br/>
            <?php endforeach; ?>
          </p>
        <?php endif; ?>
      </div>

      <hr/>
    </div>
  <?php endforeach; ?>
<?php endforeach; ?>
