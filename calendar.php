<?php
	$url = 'http://mlb.mlb.com/soa/ical/schedule.ics?team_id=112&season=2014';
	echo file_get_contents($url);
