<div class="row-fluid bottom" >
    {foreach from=$bottom_hyperlinks item=link name=bottom_hyperlinks}
        <div class='pull-right'>
            <a class="bottom-hyperlinks" href="{$link.href}">{$link.text}</a>
            {if $smarty.foreach.bottom_hyperlinks.first==false && $bottom_hyperlinks|count > 1 }-{/if}                
        </div>
    {/foreach}
</div>
<div id="dialog-container">
    <div id="dialog-confirm" class='hide' title="{$dialog_delete_title}">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>{$dialog_delete_text}</p>
    </div>
    {foreach from=$bottom_dialogs item=dialog}
        {$dialog.dialog}
    {/foreach}   
</div>
