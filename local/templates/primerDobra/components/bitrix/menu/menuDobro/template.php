<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if (empty($arResult["ALL_ITEMS"]))
	return;
CUtil::InitJSCore();
$menuBlockId = "catalog_menu_" . $this->randString();;
?>
<div class="row">
	<? foreach ($arResult["ALL_ITEMS"] as $key => $ITEM) : ?>
		<div class="col-md">
			<li class="nav-item <? if ($ITEM["SELECTED"] == true) echo "active"; ?>">
				<a class="nav-link  " href="<?= $ITEM["LINK"] ?>"><?= $ITEM["TEXT"] ?></a>
			</li>
		</div>
	<? endforeach; ?>
</div>

