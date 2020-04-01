<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "DATE_TEMPLATE" => array(
            "PARENT" => "BASE",
            "NAME" => "Шаблон даты",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "d-m-Y",
        ),
        "TIME_TEMPLATE" => array(
            "PARENT" => "BASE",
            "NAME" => "Шаблон TIME",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "h:i:s",
        ),
    )
    );
