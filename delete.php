<?php

$user_id = filter_input(INPUT_POST, 'user_id');

require_once('connect.php');

$sql = 'DELETE FROM persons WHERE user_id = :user_id';

$statement = $db->prepare($sql);
$statement->bindParam(':user_id', $user_id);
$statement->execute();
header('location:view.php');

$statement->closeCursor();
?>