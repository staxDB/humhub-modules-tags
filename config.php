<?php

use humhub\widgets\TopMenu;
use humhub\modules\tags\Module;
use humhub\modules\tags\Events;

return [
	'id' => 'tags',
	'class' => Module::class,
	'namespace' => 'humhub\modules\tags',
	'events' => [
		['class' => TopMenu::class,	'event' => TopMenu::EVENT_INIT,	'callback' => [Events::class, 'onTopMenuInit']],
	],
];
?>

