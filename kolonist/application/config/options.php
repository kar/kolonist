<?php defined('SYSPATH') or die('No direct access allowed.');

return array (
	'cronInterval' => 60, // 60, Seconds to run cron
	'fightAbsoluteLuckLevel' => 100, // 100, Maximum attack / defense ratio for giving chance to win by luck
	'fightRatioCap' => 1000, // 1000, Maximum attack / defense ratio after which one can't loose more troops
	'fightMaxPercentLoss' => 30, // 30, Maximum percentage of troops one can loose when the ratio is maximal (50% is added to this value)
	'fightRandomLoss' => 20 // 20, Maximum percentage which can be added (randomly) or substracted from the general loss percentage (can't be more than 100% when added to the above)
);