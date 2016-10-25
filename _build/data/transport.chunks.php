<?php

$chunks = array();

$tmp = array(
	'head' => array(
		'file' => 'head',
		'description' => 'Верхняя часть страниц сайта',
	),
	'navbar' => array(
		'file' => 'navbar',
		'description' => 'Навигационная панель',
	),
	'footer' => array(
		'file' => 'footer',
		'description' => 'Нижняя часть сайта',
	),
	'content_main' => array(
		'file' => 'content.main',
		'description' => 'Содержимое основной страницы',
	),
	'content_inner' => array(
		'file' => 'content.inner',
		'description' => 'Содержимое внутренних страниц',
	),
	'crumbs' => array(
		'file' => 'crumbs',
		'description' => 'Хлебные крошки',
	),

);

foreach ($tmp as $k => $v) {
	/* @avr modChunk $chunk */
	$chunk = $modx->newObject('modChunk');
	$chunk->fromArray(array(
		'id' => 0,
		'name' => $k,
		'description' => @$v['description'],
		'snippet' => file_get_contents($sources['source_assets'].'/elements/chunks/chunk.'.$v['file'].'.tpl'),
		'static' => BUILD_CHUNK_STATIC,
		'source' => 1,
		'static_file' => 'assets/components/'.PKG_NAME_LOWER.'/elements/chunks/chunk.'.$v['file'].'.tpl',
	),'',true,true);

	$chunks[] = $chunk;

	$BUILD_CHUNKS[$k] = file_get_contents($sources['source_assets'].'/elements/chunks/chunk.'.$v['file'].'.tpl');
}

unset($tmp);
return $chunks;