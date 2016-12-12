<div id='messages-info'>
{foreach from=$infos item=info}
    <div class="alert alert-info">{$info}</div>
{/foreach}
</div>
<div id='messages-success'>
{foreach from=$successes item=success}
    <div class="alert alert-success">{$success}</div>
{/foreach}
</div>
<div id='messages-error'>
{foreach from=$errors item=error}
    <div class="alert alert-error">{$error}</div>
{/foreach}
</div>
<div id='messages-warning'>
{foreach from=$warnings item=warning}
    <div class="alert alert-warning">{$warning}</div>
{/foreach}
</div>
