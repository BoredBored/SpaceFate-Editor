<?php
  //in js trim whitespace in order to insure faster server runtime
echo file_get_contents(implode("", filter_var($_REQUEST["url"], FILTER_SANITIZE_URL)));
?>
