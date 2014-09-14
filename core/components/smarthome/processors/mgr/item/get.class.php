<?php
/**
 * Get an Item
 */
class smartHomeItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'smartHomeItem';
	public $classKey = 'smartHomeItem';
	public $languageTopics = array('smarthome:default');
}

return 'smartHomeItemGetProcessor';