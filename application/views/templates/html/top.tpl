<div class="row-fluid top">
    {foreach from=$top_hyperlinks item=link name=top_hyperlinks}
        <div class='pull-right'>
            <a class="top-hyperlinks {if isset($link.class)}{$link.class}{/if}" href="{$link.href}">{$link.text}</a>
            <span class="{$link.icon}" ></span>
            &nbsp;&nbsp;
        </div>
        {if $smarty.foreach.top_hyperlinks.first!=false && $top_hyperlinks|count > 1} <div class='pull-right'>-</div>{/if} 
    {/foreach}
</div>