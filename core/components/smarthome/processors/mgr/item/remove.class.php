<?php
/**
 * Remove an Item
 */
class smartHomeItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'smartHomeItem';
	public $classKey = 'smartHomeItem';
	public $languageTopics = array('smarthome');

}

return 'smartHomeItemRemoveProcessor';