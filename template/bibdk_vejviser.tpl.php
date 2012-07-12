
<h4>Biblioteksvejviser - resultat - vælg bibliotek</h4>

<?php
foreach ($result as $agency) {
  foreach ($agency->pickUpAgencies as $branch) {

    echo '<p>' . $branch->branchName . '<br/>';
    echo '(' . $agency->agencyName . ') </p>';

    if (isset($branch->postalAddress) && $branch->postalAddress) {
      echo '<p>' . $branch->postalAddress . '<br/>';
      echo '' . $branch->postalCode . ' ' . $branch->city . '</p>';
    }

    if (isset($branch->branchPhone) && $branch->branchPhone)
      echo '<span>' . $branch->branchPhone . '</span>';
    
    if (isset($branch->branchEmail) && $branch->branchPhone)
      echo '<p>' . $branch->branchEmail . '</p>';

    echo "<hr>";
  }
}