#!/usr/bin/php
<?php
if (sizeof($argv) > 1)
{
	if (preg_match(
        "/[A-Z]?"."[a-z]+"." ".    //Day of the week
		"[0-9]{1,2}"." ".           //Day of the month
        "[A-Z]?"."[^A-Z]+"." ".    //Name of the month
		"[0-9]+"." ".             //Year
        "[0-9]{2}:"."[0-9]{2}:"."[0-9]{2}$/", //Time 
        $argv[1]))
	{
		setlocale(LC_TIME, "fr_FR");
        $ret = strptime($argv[1], "%A %e %B %Y %T");
		if ($ret == false || !checkdate(($ret["tm_mon"] + 1),($ret["tm_mday"]),($ret["tm_year"] + 1900)))
			echo "Wrong Format2\n";
		else
		{
			date_default_timezone_set("Europe/Paris");
			$nbr = mktime($ret["tm_hour"], $ret["tm_min"], $ret["tm_sec"],
				$ret["tm_mon"] + 1, $ret["tm_mday"], $ret["tm_year"] + 1900);
			printf("%d\n", $nbr);
		}
	}
	else
		echo "Wrong Format\n";
}
?>