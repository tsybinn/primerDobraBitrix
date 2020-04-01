<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arResult ['DATE'] = date($arParams["DATE_TEMPLATE"]);
$arResult ['TIME'] = date($arParams["TIME_TEMPLATE"]);
$this->includeComponentTemplate();