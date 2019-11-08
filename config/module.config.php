<?php
namespace Notification;

use Notification\DefaultFactory;

return [
	'service_manager' => [
		'abstract_factories' => [
			DefaultFactory::class,
		],
	],
];
