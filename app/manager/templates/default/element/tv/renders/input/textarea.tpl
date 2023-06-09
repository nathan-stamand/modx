<textarea id="tv{$tv->id}" name="tv{$tv->id}" rows="15">{$tv->get('value')|escape}</textarea>

<script>
// <![CDATA[
document.getElementById('tv{$tv->id}').setAttribute('autocomplete', globalAutoCompleteSetting);
{literal}
Ext.onReady(function() {
    const fld = MODx.load({
    {/literal}
        xtype: 'textarea'
        ,itemId: 'tv{$tv->id}'
        ,applyTo: 'tv{$tv->id}'
        {if $tv->get('value') != ''}
        ,value: '{$tv->get('value')|escape:'javascript'}'
        {/if}
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: {if $params.allowBlank == 1 || $params.allowBlank == 'true'}true{else}false{/if}
    {literal}
        ,listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});
{/literal}
// ]]>
</script>
