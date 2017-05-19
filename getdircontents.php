<?php
$path = $_REQUEST["q"];

if ($path == "")
{
 $DirContentsArray = scandir("/var/www/admin");
 $arrlength = count($DirContentsArray);
 for ($x = 0; $x < $arrlength; $x++)
 {
  if ($DirContentsArray[$x] == "."){
      echo "";
  } elseif ($DirContentsArray[$x] == "..")
  {
   echo "<li>";
      echo "<a href=\"http://admin.angeletakis/${path}/..\">Parent Directory</a>";
      echo "</li>";
  }
  else
  {
   echo "<li>";
      echo "<a href=\"http://admin.angeletakis/${path}/${DirContentsArray[$x]}\">${DirContentsArray[$x]}</a>"
   echo "</li>";
  }
 }
}
else
{
 $DirContentsArray = scandir($q);
 echo $dirContents;
}
