<?php
	require '../config/TextConfig.php';

	if(empty($_GET) || $_GET['path'] == 'home')
	{
		require '../view/home.php';
	}
	else if($_GET['path'] == 'product')
	{
		require '../view/product.php';
	}
	else if($_GET['path'] == 'about')
	{
		require '../view/about.php';
	}
	else if($_GET['path'] == 'contact')
	{
		require '../view/contact.php';
	}
	else if($_GET['path'] == 'chat')
	{
		require '../view/chat.php';
	}
	else if($_GET['path'] == 'login')
	{
		require '../view/login.php';
	}
	else 
	{
		return "<div class='title text-white'>ERROR</html>";
	}
?>	

