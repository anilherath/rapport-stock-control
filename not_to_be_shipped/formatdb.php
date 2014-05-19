<?php

echo "<br>Please wait......... Formating database";

$db = new PDO('sqlite:../stock_system/ims/protected/data/ims.db');

//////// DROPPING UNUSED TABLES /////////

$result = $db->exec('DELETE FROM alternate_part_numbers');
$result = $db->query('DELETE FROM inbound_items_history');
$result = $db->query('DELETE FROM item_on_order');
$result = $db->query('DELETE FROM items');
$result = $db->query('DELETE FROM outbound_items_history');
$result = $db->query('DELETE FROM purchase_order');
$result = $db->query('DELETE FROM suppliers');
$result = $db->query('VACUUM');

echo "<br><br>FINISHED......... Database is Empty Now";
?>