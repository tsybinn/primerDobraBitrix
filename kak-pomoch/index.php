<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("КАК ПОМОЧЬ");
?><div class="container">
	<div class="row">
		<div class="col-md-4 ">
			<ul>
				<li class="nav-item telephone"> <a href="tel:7-960-14-99" class="btn btn-block btn-social btn-vk">+7 960 678-14-99</a> </li>
				<li class="nav-item email"><a href="mailto:miss.rannewa2016@yandex.ru" class="btn btn-block btn-social btn-pinterest">miss.rannewa2016@yandex.ru</a></li>
				<li class="nav-item email"><a href="mailto:lenalaxina@yandex.ru" class="btn btn-block btn-social btn-vk">lenalaxina@yandex.ru</a></li>
				<li class="nav-item email"><a href="https://chat.whatsapp.com/LfcQRuRuwJp4CDVEZCJnGK" class="btn btn-block btn-social btn-pinterest">Группа в WhatsApp </a></li>
				<li class="nav-item contact"><a href="https://vk.com/app5727453_-180255958" class="btn btn-block btn-social btn-vk"> <span class="fa fa-vk"></span> Группа в Контакте </a></li>
				<li class="nav-item contact"><a href="https://www.youtube.com/channel/UCEVnIFb86rMPd73AC2Z3WQQ" class="btn btn-block btn-social btn-pinterest">
				YOU TUBE </a></li>
				<li class="nav-item svyz"><a class="btn btn-block btn-social btn-vk" href="http://helppeople.taxi999.ru/?linkMenu=meNeedHelp">
				Обратная связь</a></li>
				<li class="nav-item contact"><a href="https://vk.com/club180255958?w=app5727453_-180255958" class="btn btn-block btn-social btn-vimeo">
				ПОЖЕРТВОВАТЬ </a></li>
			</ul>
		</div>
		<div class="col-md-8 ">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
			2 => "MINIMAP",
			3 => "TYPECONTROL",
			4 => "SCALELINE",
			5 => "SEARCH",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:5:{s:10:\"yandex_lat\";d:52.60313875642195;s:10:\"yandex_lon\";d:39.57454692034796;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:39.575233565855775;s:3:\"LAT\";d:52.60432759456728;s:4:\"TEXT\";s:19:\"Дари Добро\";}}s:9:\"POLYLINES\";a:0:{}}",
		"MAP_HEIGHT" => "",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
		</div>
	</div>
</div>
 <br>