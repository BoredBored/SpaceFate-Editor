<?php
$path = $_REQUEST["q"];
$orderPref = $_REQUEST["orderpreference"];
if ($orderPref == "") {
$orderPref = 0;
}

if ($path != "") {
	$DirContentsArray = scandir("/var/www/admin${path}", $orderPref);
	$arrlength = count($DirContentsArray);
	for ($x = 0; $x < $arrlength; $x++) {
		if ($DirContentsArray[$x] == ".") {
		}
		elseif ($DirContentsArray[$x] == "..") {
			echo "${$dircontents}<li><a href=\"http://admin.angeletakis/${path}/..\">Parent Directory</a></li>";
		}
		else {
			if (is_dir(DirContentsArray[$x]) == true) {
				$dircontents = "${$dircontents}<li><div class=\"file\"><p>${DirContentsArray[$x]}</p></div></li>";
			}
			else {
				$dircontents = "${$dircontents}<li><div class=\"dir\" onclick=\"getdircon(${DirContentsArray[$x]}, 1)\"><p>${DirContentsArray[$x]}</p></div></li>";
			}
		}
	}
	echo $dircontents;
} else {
	echo "<li>error</li>";
       }
