<?php
if ($_SERVER['REQUEST_URI'] == "/gdq/special.php"){
  echo "<!-- Silence is Golden -->";
}
else {
  $special = false;
  $marathon = "Calithon";
  //$marathon = "GDQ Express";

  if ($special && rand(0,5) == 4){
    echo "<!-- Special -->"."\n";
    echo '<script>$(document).ready(function(){special="'.$marathon.'";});</script>'."\n";
  }
}
?>
