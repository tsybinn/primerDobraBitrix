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
?>

<?

//var_dump($arResult);
foreach ($arResult["ITEMS"] as   $ITEM) : ?>

	<div class="container news">
		<?
		$this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="news-item" id="<?= $this->GetEditAreaId($ITEM['ID']); ?>">
			<div class="row">
				<div class="col dateNews">
					<div class="date"><?= $ITEM["PROPERTIES"]["date"]['VALUE'] ?></div>
				</div>
			</div>
			<div class="row">
				<div class="col ">
					<h4 class="prevTextNews"><a href="<?= $ITEM["DETAIL_PAGE_URL"] ?>"> <?= $ITEM["PREVIEW_TEXT"] ?></a>
					</h4>
				</div>
			</div>
			<div class="row videoNews">
				<? for ($i = 0; $i <= 1; $i++) : ?>
					<? if (!empty($ITEM["PROPERTIES"]["video$i"]['VALUE'])) : ?>
						<div class="col-sm ">

							<iframe width="300" height="400" src=https://www.youtube.com/embed/<?= $ITEM["PROPERTIES"]["video$i"]['VALUE'] ?>>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen></iframe>

						</div>
				<? endif;
				endfor; ?>
			</div>

			<div class="row">
				<? for ($i = 1; $i <= 4; $i++) : ?>
					<? if (!empty($ITEM["PROPERTIES"]["foto$i"]['VALUE'])) : ?>
						<div class="col-sm ">
							<img class='newsBorder' src="<?= $ITEM["PROPERTIES"]["foto$i"]['VALUE'] ?>" width="300px" height="400px" ;>
						</div>
				<? endif;
				endfor; ?>
			</div>
			<div class="row detailTextNews">
				<div class="col-sm">
					<p class="detailText"><?= $value['detailText'] ?></p>
				</div>
			</div>

		</div>
	</div>

<? endforeach ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
	<br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>


<!-- <div class="news-list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
				<? else : ?>
					<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" />
				<? endif; ?>
			<? endif ?>
			<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]) : ?>
				<span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
			<? endif ?>
			<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
				<? else : ?>
					<b><? echo $arItem["NAME"] ?></b><br />
				<? endif; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
				<? echo $arItem["PREVIEW_TEXT"]; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<div style="clear:both"></div>
			<? endif ?>
			<? foreach ($arItem["FIELDS"] as $code => $value) : ?>
				<small>
					<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
				</small><br />
			<? endforeach; ?>
			<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
				<small>
					<?= $arProperty["NAME"] ?>:&nbsp;
					<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
						<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
					<? else : ?>
						<?= $arProperty["DISPLAY_VALUE"]; ?>
					<? endif ?>
				</small><br />
			<? endforeach; ?>
		</p>
	<? endforeach; ?>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div> -->