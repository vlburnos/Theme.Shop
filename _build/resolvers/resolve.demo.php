<?php
/**
 * @var modX $modx
 * @var modTemplate $template
 * @var modResource $resource
 */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
	case xPDOTransport::ACTION_INSTALL:
	case xPDOTransport::ACTION_UPGRADE:
		$modx = & $object->xpdo;

		if ($template = $modx->getObject('modTemplate', array('templatename' => 'Shop.main'))) {
			if (!$resource = $modx->getObject('modResource', array('pagetitle' => 'Home'))) {
				$resource = $modx->newObject('modResource');
				$resource->set('pagetitle', 'Home');
			}
			$resource->fromArray(array(
				'published' => 0,
				'parent' => 0,
				'richtext' => 0,
				'template' => $template->id
			));
			$resource->save();
		}

		// if ($template = $modx->getObject('modTemplate', array('templatename' => 'Shop.category'))) {
		// 	if (!$resource = $modx->getObject('modResource', array('pagetitle' => 'Shop.category'))) {
		// 		$resource = $modx->newObject('modResource');
		// 		$resource->set('pagetitle', 'Ка');
		// 	}
		// 	$resource->fromArray(array(
		// 		'published' => 0,
		// 		'parent' => 0,
		// 		'richtext' => 0,
		// 		'template' => $template->id,
		// 		'content' => file_get_contents(MODX_ASSETS_PATH . 'components/themebootstrap/elements/demo/inner.html')
		// 	));
		// 	$resource->save();
		// }

		break;

	case xPDOTransport::ACTION_UNINSTALL:
		break;
}
return true;