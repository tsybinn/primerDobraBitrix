<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("title", "Страница не найдена"); 

 ?>

<? $APPLICATION->IncludeComponent(
	"mycomponents:empty.code", 
	".default", 
	array(
		"phpCode" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>