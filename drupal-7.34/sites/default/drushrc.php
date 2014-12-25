<?php

$command_specific['dl']['destination'] = 'profiles/nobcc/modules/contrib';


$command_specific['sql-dump']['result-file'] = 'backups/db/@DATABASE_@DATE.sql';
$command_specific['sql-dump']['gzip'] = TRUE;


$options['structure-tables']['common'] = array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'sessions', 'watchdog');
