<?php
$path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) . 'user/';
include 'partials/header.php';
require_once './app/views/user/' . $data['page'] . '.php';
include 'partials/footer.php';
