<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>{$title.sitename} {$title.separator} {$title.pagename}</title>
    {foreach from=$metas item=meta}
             <meta NAME="{$meta.name}" CONTENT="{$meta.content}"> 
    {/foreach}

    
    {foreach from=$links item=link}
             <link href="{$link.href}" rel="{$link.rel}" type="{$link.type}" >
    {/foreach}
    {foreach from=$javascripts item=javascript_file}
            <script src="{$javascript_file}"></script>
    {/foreach}
    <script type="text/javascript">
        var base_url    =   '{$base_url}';
        var BASEPATH    =   '{$BASEPATH}';
        var APPPATH     =   '{$APPPATH}';
        var FCPATH      =   '{$FCPATH}';
        var site_lang   =   '{$site_lang}';
        var cancel      =   '{$cancel}';
        var delete_this_item = '{$delete_this_item}';
        var duplicate_this_item ='{$duplicate_this_item}';
        var inprocess ='{$inprocess}';
        var accept_file_types = '{$accept_file_types}';
        var max_file_size ='{$max_file_size}';
        var upload_max_filesize ='{$upload_max_filesize}';
    </script>

</head>
<body>
    <div class="container-fluid">