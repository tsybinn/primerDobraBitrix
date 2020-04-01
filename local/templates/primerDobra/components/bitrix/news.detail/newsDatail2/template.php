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

<!-- <?="<pre>";
var_dump($arResult);
?> -->

<?= $arResult["PROPERTIES"]["video$i"]['VALUE'] ?>
<div class="container news">
	<?
	$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
		<div class="row">
			<div class="col dateNews">
				<div class="date"><?= $arResult["PROPERTIES"]["date"]['VALUE'] ?></div>
			</div>
		</div>
		<div class="row">
			<div class="col ">
				<h4 class="prevTextNews"> <?= $arResult["PREVIEW_TEXT"] ?> </h4>
			</div>
		</div>
		<div class="row videoNews">
			<? for ($i = 0; $i <= 1; $i++) : ?>
				<? if (!empty($arResult["PROPERTIES"]["video$i"]['VALUE'])) : ?>
					<div class="col-sm ">

						<iframe width="300" height="400" src=https://www.youtube.com/embed/<?= $arResult["PROPERTIES"]["video$i"]['VALUE'] ?>>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen></iframe>

					</div>
			<? endif;
			endfor; ?>
		</div>

		<div class="row">
			<? for ($i = 1; $i <= 4; $i++) : ?>
				<? if (!empty($arResult["PROPERTIES"]["foto$i"]['VALUE'])) : ?>
					<div class="col-sm ">
						<img class='newsBorder' src="<?= $arResult["PROPERTIES"]["foto$i"]['VALUE'] ?>" width="300px" height="400px" ;>
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







<!-- <div class="news-detail">
	<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
		<img
			class="detail_picture"
			border="0"
			src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
			width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
			height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
			alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
			title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
			/>
	<? endif ?>
	<? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]) : ?>
		<span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
	<? endif; ?>
	<? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]) : ?>
		<h3><?= $arResult["NAME"] ?></h3>
	<? endif; ?>
	<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]) : ?>
		<p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
			unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
	<? endif; ?>
	<? if ($arResult["NAV_RESULT"]) : ?>
		<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?><?= $arResult["NAV_STRING"] ?><br /><? endif; ?>
		<? echo $arResult["NAV_TEXT"]; ?>
		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?><br /><?= $arResult["NAV_STRING"] ?><? endif; ?>
	<? elseif (strlen($arResult["DETAIL_TEXT"]) > 0) : ?>
		<? echo $arResult["DETAIL_TEXT"]; ?>
	<? else : ?>
		<? echo $arResult["PREVIEW_TEXT"]; ?>
	<? endif ?>
	<div style="clear:both"></div>
	<br />
	<? foreach ($arResult["FIELDS"] as $code => $value) :
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) {
	?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?
														if (!empty($value) && is_array($value)) {
														?><img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>" height="<?= $value["HEIGHT"] ?>"><?
																																									}
																																								} else {
																																										?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?><?
																																																										}
																																																											?><br />
	<? endforeach;
	foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>

		<?= $arProperty["NAME"] ?>:&nbsp;
		<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
			<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
		<? else : ?>
			<?= $arProperty["DISPLAY_VALUE"]; ?>
		<? endif ?>
		<br />
	<? endforeach;
	if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
	?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:main.share",
				"",
				array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
		?>
</div> -->