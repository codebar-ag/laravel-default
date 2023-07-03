<?php

use CodebarAg\FeaturePolicy\Value;
use CodebarAg\LaravelDefault\Checks\FailedJobsCheck;
use Spatie\Csp\Keyword;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Facades\Health;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;

return [

	'services' => [
		'fathom' => [
			// Global Processing EU Isolation https://cdn.usefathom.com/script.js
			// EU Isolation https://cdn-eu.usefathom.com/script.js
			'url' => env('LARAVEL_DEFAULT_FATHOM_URL', 'https://cdn-eu.usefathom.com/script.js'),
			'site_id' => env('LARAVEL_DEFAULT_FATHOM_SITE_ID'),
			'environments' => ['staging', 'production'],
		],
	],

	'health' => [
		'checks' => [
			Health::checks([
				DebugModeCheck::new(),
				EnvironmentCheck::new(),
				SecurityAdvisoriesCheck::new(),
				// RedisCheck::new(),
				QueueCheck::new()->failWhenHealthJobTakesLongerThanMinutes(30),
				CacheCheck::new(),
				FailedJobsCheck::new(),
				// HorizonCheck::new(),
				ScheduleCheck::new()->heartbeatMaxAgeInMinutes(30),
				OptimizedAppCheck::new(),
			]),
		],
	],

	'feature_policy' => [
		'camera' => [
			Value::SELF,
		],
		'fullscreen' => [
			Value::SELF,
		],
	],
	'security_headers' => [
		'connect' => [
			Keyword::SELF,
			'ws:',
			'api.userback.io/',
			'ka-p.fontawesome.com/',
			'res.cloudinary.com/codebar/',
			'prod-s3-public.s3-website-bc01.gos3.io/',
			'unpkg.com/',
		],
		'default' => [
			Keyword::SELF,
		],
		'form_action' => [
			Keyword::SELF,
		],
		'img' => [
			Keyword::SELF, 'data:',
			'blob:', 'localhost/',
			'prod-s3-public.s3-website-bc01.gos3.io/',
			'cdn.usefathom.com/',
			'cdn-eu.usefathom.com/',
			'www.gravatar.com/avatar/',
			'secure.gravatar.com/avatar/',
			'res.cloudinary.com/codebar/',
		],
		'media' => [
			Keyword::SELF,
		],
		'object' => [
			Keyword::NONE,
		],
		'font' => [
			Keyword::SELF,
			'data:',
			'use.typekit.net/',
			'fonts.gstatic.com/',
			'fonts.googleapis.com/' .
			'ka-p.fontawesome.com/',
			'static.userback.io/',
			'rsms.me/inter/font-files/',
			'prod-s3-public.s3-website-bc01.gos3.io/portal-vanta-ch/production',
		],
		'script' => [
			Keyword::SELF,
			Keyword::UNSAFE_INLINE,
			Keyword::UNSAFE_EVAL,
			'cdn.usefathom.com/',
			'cdn-eu.usefathom.com/',
			'static.userback.io/',
			'kit.fontawesome.com/',
			'cdnjs.cloudflare.com/ajax/libs/dragula/',
			'prod-s3-public.s3-website-bc01.gos3.io/',
			'unpkg.com/',
		],
		'style_elem' => [
			Keyword::SELF,
			Keyword::UNSAFE_INLINE,
			'static.userback.io/',
			'fonts.googleapis.com/',
			'fonts.sandbox.google.com/',
			'rsms.me/inter/',
		],
		'style' => [
			Keyword::SELF,
			Keyword::UNSAFE_INLINE,
			'static.userback.io/',
			'fonts.sandbox.google.com/',
			'fonts.googleapis.com/' .
			'rsms.me/inter/',
		],

	],
];
