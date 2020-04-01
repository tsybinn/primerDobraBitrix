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

if (!$arResult["NavShowAlways"]) {
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}




$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

//var_dump($arResult);
$page = $arResult['NavPageNomer'];

$pageNext = $page + 1;
$pagePrew = $page - 1;
$notePages = 3;
$from = ($page - 1) * $notePages;
$order = '';
$pageNext2 =  $pageNext + 1;
$pagePrew2 = $pagePrew - 1;
//$ITEMS = $db->select($table, $from, $notePages, $order);
$quantPage =  $arResult['NavPageCount'];
$_SESSION['quantPage'] = $quantPage;
?>


<div class="container pagin">
	<nav>
		<ul class="pagination">
			<? if ($page != 1) : ?>
				<li class="page-item ">
					<a class="page-link" href="?pages=2&PAGEN_1=1">
						Первая
					</a>
				</li>
				<li class="page-item <? if ($page == 1) echo "disabled" ?> ">
					<a class="page-link" href="?pages=2&PAGEN_1=<?= $pagePrew ?>" aria-label="Предыдущая">
						<span aria-hidden="true">«</span>
						<span class="sr-only">Предыдущая</span>
					</a>
				</li>
				<? if ($page != 2) : ?>
					<li class="page-item ?>">
						<a class="page-link" href="?pages=2&PAGEN_1=<? echo "$pagePrew2\">$pagePrew2"; ?></a>
    </li>
    <? endif ?>
<li class=" page-item ">
                    <a class=" page-link" href="?pages=2&PAGEN_1=<? echo "$pagePrew\">$pagePrew"; ?></a>
    </li>
    <? endif; ?>

<li class=" page-item active">
							<a class="page-link" href="?pages=2&PAGEN_1=<? echo "$page\">$page"; ?></a>
    </li>
    <? if ($page != $quantPage) : ?>
<li class=" page-item">
								<a class="page-link" href="?pages=2&PAGEN_1=<? echo "$pageNext\">$pageNext"; ?></a>
    </li>
    <? if ($page != $quantPage - 1) : ?>
    <li class=" page-item ">
     <a class=" page-link" href="?pages=2&PAGEN_1=<? echo "$pageNext2\">$pageNext2"; ?></a>
    </li>    
    <? endif; ?>    
     <li class=" page-item">
									<a class=" page-link" href="?pages=2&PAGEN_1=<?= $pageNext; ?>" aria-label="Следующая">
										<span aria-hidden="true">»</span>
										<span class="sr-only">Следующая</span>
									</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="?pages=2&PAGEN_1=<?= $quantPage ?>">
							Последняя
						</a>
					</li>
				<? endif; ?>

		</ul>
	</nav>

</div>
