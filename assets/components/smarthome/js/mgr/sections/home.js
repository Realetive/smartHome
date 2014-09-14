smartHome.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'smarthome-panel-home'
			,renderTo: 'smarthome-panel-home-div'
		}]
	}); 
	smartHome.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(smartHome.page.Home,MODx.Component);
Ext.reg('smarthome-page-home',smartHome.page.Home);