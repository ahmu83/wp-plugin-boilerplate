<?php

$inline = array(
	'src/constants.php',
	'src/functions.php',
	'src/lib/print_are.php',
);

$hooks = array(
	'src/hooks/activation.php',
	'src/hooks/deactivation.php',
	'src/hooks/actions.php',
	'src/hooks/actions-handlers.php',
	'src/hooks/filters.php',
	'src/hooks/filters-handlers.php',
);

$classes = array(
	// 'src/classes/ClassName.class.php',
);

$files = array_filter(array_merge($inline, $hooks, $classes));

return $files;

