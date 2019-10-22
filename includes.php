<?php

$inline = array(
	'src/constants.php',
	'src/functions.php',
	'src/lib/print_are.php',
);

$hooks = array(
	'src/api/hooks/actions/actions.php',
	'src/api/hooks/actions/actions-handlers.php',
	'src/api/hooks/filters/filters.php',
	'src/api/hooks/filters/filters-handlers.php',
);

$api = array(
	'src/api/activation.php',
	'src/api/deactivation.php',
	'src/api/rest/routes.php',
	'src/api/rest/routes-handlers.php',
);

$classes = array(
	// 'src/classes/ClassName.class.php',
);

$files = array_filter(array_merge($inline, $hooks, $api, $classes));

return $files;

