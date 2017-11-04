<?php
  //in js trim whitespace in order to insure faster server runtime
$weburl = implode("", filter_var($_REQUEST["url"], FILTER_SANITIZE_URL));
$webpageSrc = file_get_contents($weburl);
echo $webpageSrc;
?>
