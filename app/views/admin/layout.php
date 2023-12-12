<?php
$path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) . 'admin/';
// include 'partials/header.php';
require_once './app/views/admin/' . $data['page'] . '.php';
// include 'partials/footer.php';
