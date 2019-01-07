<?php
if ($_SERVER['REQUEST_URI'] == "/gdq/special.php"){
  echo "<!-- Silence is Golden -->";
}
else {
  $special = false;
  $marathon = "ESA";
  //$marathon = "GDQ Express";

  if ($special && rand(0,5) == 4){
    echo "<!-- Special -->";
    echo '<script>gdq="'.$marathon.'"</script>';
  }
}
?>
