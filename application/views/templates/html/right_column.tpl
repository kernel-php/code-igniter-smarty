
    {include file="html/messages.tpl"}
    {if isset($right_template) && !empty($right_template) }
        <div class='span9 right_column equal-height'>
            {include file="includes/$right_template"}
        </div>
    {/if}
