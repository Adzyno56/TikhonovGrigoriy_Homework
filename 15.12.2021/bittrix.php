<?php
session_start(); // удаление сессии - session_destroy();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    setcookie("last_page[$user]", 'https://www.1c-bitrix.ru/', time() + 3600);
    header("Location: https://www.1c-bitrix.ru/");
    exit();
}
?>
