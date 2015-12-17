<?php



$query = "SELECT * FROM adventure WHERE 1";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}