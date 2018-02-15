<?php

    require 'database.php';
    $database = new Database();
    $pixels = $database->load_pixels();

    require 'index.html';

?>