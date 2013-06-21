<!DOCTYPE HTML>
<html>
<head>
	<title>Ribbit</title>
	<link rel="stylesheet/less" href="styles/default/css/style.less" />
	<script type="text/javascript" src="styles/default/js/less.js"></script>
</head>
<body>
	<header>
		<div class="wrapper">
			<img src="styles/default/images/logo.png"/>
			<span>Twitter Clone</span>
			{if $login}
				{include file="../../styles/$style/logout.tpl"}
			{else}
				{include file="../../styles/$style/login.tpl"}
			{/if}
		</div>
	</header>
	<div id="content">
		<div class="wrapper">