var smartHome = function(config) {
	config = config || {};
	smartHome.superclass.constructor.call(this,config);
};
Ext.extend(smartHome,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('smarthome',smartHome);

smartHome = new smartHome();