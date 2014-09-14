<?php
/**
 * Update an Item
 */
class smartHomeItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'smartHomeItem';
	public $classKey = 'smartHomeItem';
	public $languageTopics = array('smarthome');
	public $permission = 'edit_document';
}

return 'smartHomeItemUpdateProcessor';
