<?php
/**
 * Remove an Items
 */
class smartHomeItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'smartHomeItem';
	public $classKey = 'smartHomeItem';
	public $languageTopics = array('smarthome');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'smartHomeItemsRemoveProcessor';