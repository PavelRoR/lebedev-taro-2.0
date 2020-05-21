<?php
$videos = array('','','');
$hides = array('','','');

$sales1 = array('3 000р.','2 000р.','1 000р.');
$sales2 = array('6 000р.','4 000р.','2 000р.');
$sales3 = array('9 000р.','6 000р.','3 000р.');

$todays1 = array('13 900р.','14 900р.','15 900р.');
$todays2 = array('24 900р.','26 900р.','28 900р.');
$todays3 = array('36 900р.','39 900р.','42 900р.');

$links1 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4891&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4892&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4893&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4894&clean=true&lg=ru');
$links2 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4898&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4899&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4900&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4901&clean=true&lg=ru');
$links3 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4905&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4906&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4907&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4908&clean=true&lg=ru');

$prepLinks = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4912&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4913&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4914&clean=true&lg=ru');

$dates = array(strtotime('2020-05-22'),strtotime('2020-05-23'),strtotime('2020-05-24'),strtotime('2020-05-27'));
$now = strtotime('now');

if ($now < $dates[0]) {
    $sale1 = $sales1[0];
    $sale2 = $sales2[0];
    $sale3 = $sales3[0];

    $today1 = $todays1[0];
    $today2 = $todays2[0];
    $today3 = $todays3[0];

    $link1 = $links1[0];
    $link2 = $links2[0];
    $link3 = $links3[0];

    $prepLink = $prepLinks[0];
}
elseif (($now >= $dates[0])&&($now < $dates[1])) {
    $sale1 = $sales1[1];
    $sale2 = $sales2[1];
    $sale3 = $sales3[1];

    $today1 = $todays1[1];
    $today2 = $todays2[1];
    $today3 = $todays3[1];

    $link1 = $links1[1];
    $link2 = $links2[1];
    $link3 = $links3[1];

    $prepLink = $prepLinks[1];
}
elseif (($now >= $dates[1])&&($now < $dates[2])) {
    $sale1 = $sales1[2];
    $sale2 = $sales2[2];
    $sale3 = $sales3[2];

    $today1 = $todays1[2];
    $today2 = $todays2[2];
    $today3 = $todays3[2];

    $link1 = $links1[2];
    $link2 = $links2[2];
    $link3 = $links3[2];

    $prepLink = $prepLinks[2];
}
else {
    $link1 = $links1[3];
    $link2 = $links2[3];
    $link3 = $links3[3];
}

?>
