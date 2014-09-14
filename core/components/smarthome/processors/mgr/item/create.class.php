<?php
/**
 * Create an Item
 */
class smartHomeItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'smartHomeItem';
	public $classKey = 'smartHomeItem';
	public $languageTopics = array('smarthome');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('smartHomeItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('smarthome_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'smartHomeItemCreateProcessor';