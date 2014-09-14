<?php

/**
 * Class smartHomeMainController
 */
abstract class smartHomeMainController extends modExtraManagerController {
	/** @var smartHome $smartHome */
	public $smartHome;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('smarthome_core_path', null, $this->modx->getOption('core_path') . 'components/smarthome/');
		require_once $corePath . 'model/smarthome/smarthome.class.php';

		$this->smartHome = new smartHome($this->modx);

		$this->addCss($this->smartHome->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->smartHome->config['jsUrl'] . 'mgr/smarthome.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			smartHome.config = ' . $this->modx->toJSON($this->smartHome->config) . ';
			smartHome.config.connector_url = "' . $this->smartHome->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('smarthome:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends smartHomeMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}