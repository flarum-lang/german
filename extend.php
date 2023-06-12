<?php

return [
	new FlarumLang\Utils\Extend\LanguagePackWithVariants([
		'label' => 'Sprachstil',
		'variants' => [
			'informal' => 'Standard',
			'formal' => 'Formell',
		],
		'defaultVariant' => 'informal',
	]),
];
