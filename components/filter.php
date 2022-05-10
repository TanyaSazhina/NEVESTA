<?php
include 'connection.php';
$id = $_REQUEST['id'];
if ($id == "price-filter-m-50") {
    $sql = "SELECT * FROM `catalog` WHERE (`price` < 50000) OR (`price-with-sale` < 50000)";
}
if ($id == "price-filter-m-60") {
    $sql = "SELECT * FROM `catalog` WHERE `price` BETWEEN '50000' AND '60000' OR `price-with-sale` BETWEEN '50000' AND '60000'";
}
if ($id == "price-filter-b-60") {
    $sql = "SELECT * FROM `catalog` WHERE (`price` > 60000)";
}
if ($id == "none") {
    $sql = "SELECT * FROM `catalog`";
}

//if ($id == "color-filter-w") {
//    $sql = "SELECT * FROM `catalog` WHERE `color` = 'белое'";
//}
//if ($id == "color-filter-c") {
//    $sql = "SELECT * FROM `catalog` WHERE `color` = 'кремовое'";
//}
//if ($id == "color-filter-l") {
//    $sql = "SELECT * FROM `catalog` WHERE `color` = 'сиреневое'";
//}



//if ($id == "sil-filter-a") {
//    $sql = "SELECT * FROM `catalog` WHERE `silhouette` = 'А-силует'";
//}
//if ($id == "sil-filter-s") {
//    $sql = "SELECT * FROM `catalog` WHERE `silhouette` = 'с прямой юбкой'";
//}
//if ($id == "sil-filter-l") {
//    $sql = "SELECT * FROM `catalog` WHERE `silhouette` = 'с пышной юбкой'";
//}
//if ($id == "sil-filter-f") {
//    $sql = "SELECT * FROM `catalog` WHERE `silhouette` = 'русалка/рыбка'";
//}
//if ($id == "sil-filter-g") {
//    $sql = "SELECT * FROM `catalog` WHERE `silhouette` = 'в греческом стиле'";
//}

//if ($id == "length-filter-long") {
//    $sql = 'SELECT * FROM `catalog` WHERE `lenght` = `длинное платье без шлейфа`';
//}
//if ($id == "length-filter-long-train") {
//    $sql = 'SELECT * FROM `catalog` WHERE `lenght` = `длинное платье со шлейфом`';
//}
//if ($id == "length-filter-short") {
//    $sql = 'SELECT * FROM `catalog` WHERE `lenght` = `короткое платье без шлейфа`';
//}

$stmt = $conn->prepare($sql); // создали команду
$stmt->execute(); // выполнили запрос
$result = $stmt->get_result(); // получили результат
$row = $result->fetch_all(); // выбрали первую строку результата
echo json_encode($row);
//$sql = "SELECT * FROM 'catalog'";
//$array = array();
//if(isset($_POST["color"]))
//{
//    $array[] = array("color", "s", $_POST["color"]);
//}
//if(isset($_POST["silhouette"]))
//{
//    $array[] = array("silhouette", "s", $_POST["silhouette"]);
//}
//if(isset($_POST["lenght"]))
//{
//    $array[] = array("lenght", "s", $_POST["lenght"]);
//}


//$stmt = $mysqli->prepare('
//        SELECT * 
//        FROM table 
//        WHERE 1=1
//            AND color LIKE :color 
//            AND type  LIKE :silhouette 
//            AND shape LIKE :lenght
//        ');

//$color = isset($colorFilter) ? $colorFilter : '%';
//$silhouette  = isset($silhouetteFilter)  ? $silhouetteFilter  : '%';
//$lenght = isset($lenghtFilter) ? $lenghtFilter : '%';

//$stmt->bindValue(':color', $color);
//$stmt->bindValue(':silhouette', $silhouette);
//$stmt->bindValue(':lenght', $lenght);

//$stmt->execute();
//$res = $stmt->get_result();
//$i = $res->fetch_assoc();