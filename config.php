<?php
return [
	'id' => 'tags',
	'class' => 'humhub\modules\tags\Module',
	'namespace' => 'humhub\modules\tags',
	'events' => [
		[
			'class' => \humhub\widgets\TopMenu::className(),
			'event' => \humhub\widgets\TopMenu::EVENT_INIT,
			'callback' => ['humhub\modules\tags\Events', 'onTopMenuInit'],
		],
	],
];
?>

