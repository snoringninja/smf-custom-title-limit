<?php
global $boardurl, $scripturl, $db_prefix, $smcFunc;

$smcFunc['db_query']('',
		'UPDATE {db_prefix}members
		SET usertitle = ""
		'
	);
?>
