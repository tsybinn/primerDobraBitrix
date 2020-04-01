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


    
      $url = $arResult["PROPERTIES"]['video0']['VALUE'];
      $date = $arResult["PROPERTIES"]['date']['VALUE'];
      $arResult["PROPERTIES"]['video0']['VALUE'] = end(explode('/', $url));
      $arResult["PROPERTIES"]['date']['VALUE'] = date('d.m.Y', $date) . "г";




?>
