<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<!-- public function returnIdVideo($url)
{
$id = explode('/', $url);
return end($id);
}
public function returnDate($date)
{
return date('d.m.Y', $date);
} -->

<?

foreach ($arResult['ITEMS'] as  $key => $ITEM) {
    
      $url = $ITEM["PROPERTIES"]['video0']['VALUE'];
      $date = $ITEM["PROPERTIES"]['date']['VALUE'];
      $arResult['ITEMS'][$key]["PROPERTIES"]['video0']['VALUE'] = end(explode('/', $url));
      $arResult['ITEMS'][$key]["PROPERTIES"]['date']['VALUE'] = date('d.m.Y', $date) . "г";
}



?>
