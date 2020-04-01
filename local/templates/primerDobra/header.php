<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon3.ico" type="image/x-icon">
	<!-- Required meta tags -->
	<!-- styles CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Oranienbaum&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<?
	use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-social.css");
	?>

	<? $APPLICATION->ShowHead(); ?>
	<title><?  $APPLICATION->ShowTitle() ?></title>
</head>
<body>
	<? $APPLICATION->ShowPanel(); ?>

	<div class="wrapple test">
		<header class="header">
			<nav class="navbar    navbar-light or ">

				<a class="navbar-brand logotype" href="index.php"><img class="logo circle " src="<?= SITE_TEMPLATE_PATH ?>/img/logo2.jpeg" width="100" height="100"></a>
				<a class="navbar-brand motivation " href="#">
					<h1>ДАРИМ ДОБРО</h1>
				</a>

				<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="fulse" aria-label="Toggle navigation">
					<span class="textMenu">меню</span> <span class="navbar-toggler-icon  "></span>
				</button>

				<div class="navbar-collapse collapse show gradient-demo  " id="navbarsExample01" style="">
					<ul class="navbar-nav mr-auto mx-auto  ">
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"menuDobro",
							array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "top",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "N"
							)
						); ?>
					</ul>
				</div>
			</nav>
		</header>
		<aside>