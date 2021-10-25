<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset={$configuration.global_encoding}" >
        <base href="{$configuration.server_url}"/>
		<title>{$head.title}</title>
		<meta name="description" content="{$head.description}"/>
{foreach from=$styles item=style}
		<link type="text/css" rel="stylesheet" href="{$style}">
{/foreach}
{foreach from="$scripts" item=script}
        <script type="text/javascript" src="{$script}"></script>
{/foreach}
	</head>
	<body>