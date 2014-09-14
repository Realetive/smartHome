<?php
/**
 * The home manager controller for smartHome.
 *
 */
class smartHomeHomeManagerController extends smartHomeMainController {
	/* @var smartHome $smartHome */
	public $smartHome;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('smarthome');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->smartHome->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->smartHome->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->smartHome->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "smarthome-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->smartHome->config['templatesPath'] . 'home.tpl';
	}
}