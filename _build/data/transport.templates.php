<?php

$templates = array();

$tmp = array(
	'Shop.main' => array(
		'file' => 'main',
		'description' => 'Шаблон главной страницы',
	),
	'Shop.category' => array(
		'file' => 'category',
		'description' => 'Шаблон категории товаров',
	),
	'Shop.item' => array(
		'file' => 'category',
		'description' => 'Шаблон товара',
	),
	'Shop.info' => array(
		'file' => 'info',
		'description' => 'Шаблон информационных страниц',
	),
);

foreach ($tmp as $k => $v) {
	/* @avr modTemplate $template */
	$template = $modx->newObject('modTemplate');
	$template->fromArray(array(
		'id' => 0,
		'templatename' => $k,
		'description' => @$v['description'],
		'content' => file_get_contents($sources['source_assets'].'/elements/templates/template.'.$v['file'].'.tpl'),
		'static' => BUILD_TEMPLATE_STATIC,
		'source' => 1,
		'static_file' => 'assets/components/'.PKG_NAME_LOWER.'/elements/templates/template.'.$v['file'].'.tpl',
	),'',true,true);

	$templates[] = $template;
}

unset($tmp);
return $templates;