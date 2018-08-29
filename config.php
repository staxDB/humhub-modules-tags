<?php

use humhub\widgets\TopMenu;

return [
	'id' => 'tags',
	'class' => 'humhub\modules\tags\Module',
	'namespace' => 'humhub\modules\tags',
	'events' => [
		[
			'class' => TopMenu::class,
			'event' => TopMenu::EVENT_INIT,
			'callback' => ['humhub\modules\tags\Events', 'onTopMenuInit'],
		],
	],
];
?>

