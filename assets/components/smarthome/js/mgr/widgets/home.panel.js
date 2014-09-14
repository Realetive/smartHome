smartHome.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('smarthome')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('smarthome_items')
				,items: [{
					html: _('smarthome_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'smarthome-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	smartHome.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(smartHome.panel.Home,MODx.Panel);
Ext.reg('smarthome-panel-home',smartHome.panel.Home);
