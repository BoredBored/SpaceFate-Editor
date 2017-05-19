<?php
$path = $_REQUEST["q"];

if ($path == "")
	{
	$DirContentsArray = scandir("/var/www/admin");
	$arrlength = count($DirContentsArray);
	for ($x = 0; $x < $arrlength; $x++)
		{
		if ($DirContentsArray[$x] == ".")
			{
			echo "";
			}
		elseif ($DirContentsArray[$x] == "..")
			{
			echo "";
			}
		  else
			{
			echo "<li><a href=\"http://admin.angeletakis/${DirContentsArray[$x]}\">${DirContentsArray[$x]}</a></li>";
			}
		}
	}
  else
	{
	$DirContentsArray = scandir($path);
	$arrlength = count($DirContentsArray);
	for ($x = 0; $x < $arrlength; $x++)
		{
		if ($DirContentsArray[$x] == ".")
			{
			echo "";
			}
		elseif ($DirContentsArray[$x] == "..")
			{
			echo "<li><a href=\"http://admin.angeletakis/${path}/..\">Parent Directory</a></li>";
			}
		  else
			{
			echo "<li><a href=\"http://admin.angeletakis/${path}/${DirContentsArray[$x]}\">${DirContentsArray[$x]}</a>"echo "</li>";
			}
		}
	}
