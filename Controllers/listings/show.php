<?php

$config = require basePath("config/db.php");
$db = new Database($config);

$id = $_GET["id"] ?? "";

$params = [
    "id"=> $id
];

$listing = $db->query("SELECT * FROM listings WHERE id = :id", $params)->fetch();
error_log(__FILE__ . ":" . __LINE__ . " my var is:" . print_r($id,true));
inspect($listing);
loadView("listings/show", [
    "listing" => $listing
]);
