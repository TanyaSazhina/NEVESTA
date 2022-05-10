<?php
include 'connection.php';
$id = $_REQUEST['id'];
$sql = 'SELECT * FROM `catalog` WHERE id= ?';
$stmt = $conn->prepare($sql); // создали команду
$stmt->bind_param("i", $id); // привязали переменную $id к запросу
$stmt->execute(); // выполнили запрос
$result = $stmt->get_result(); // получили результат
$row = $result->fetch_assoc(); // выбрали первую строку результата
$imgs = mysqli_query($conn, "SELECT * FROM `imgs` WHERE `id_product` = " . $id);
$imgs = mysqli_fetch_all($imgs);
$response = array(
    'product' => $row,
    'imgs'  => $imgs
);
echo json_encode($response);
