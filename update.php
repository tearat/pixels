<?php

    require 'database.php';
    $database = new Database();
    $pixels = $database->update( $_POST['id'], $_POST['status'] );

?>