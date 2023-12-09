<!-- (A) SEARCH FORM -->
<form method="post" action="search.php">
  <input type="text" name="search" placeholder="Search..." required>
  <input type="submit" value="Search">
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "searchprocess.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
      //print_r($r);
    printf("<div>%s - %s - %s</div>", $r["Title"], $r["Author_firstname"], $r["Author_surname"]);
  }} else { echo "No results found"; }
}
?>