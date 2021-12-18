<?php
session_start(); // удаление сессии - session_destroy();
include 'classes/Autorization.php';

if (isset($_POST['submit'])) {
    $auten = new Autorization($_POST['user'], $_POST['pass']);
    $conn = $auten->getConnection();
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    if ($auten->check_auth($conn)) {
        $_SESSION['user'] = htmlspecialchars($_POST['user']);
        header("Location: index.php");
        exit;
    }
    else {
        echo '<p>Логин или пароль неверны!</p>';
    }
    $conn->close();
}
?>

<form method="post">
    <label>Логин<input type="text" name="user"/></label><br/>
    <label>Пароль<input type="password" name="pass" /></label><br/>
    <input type="submit" name="submit" value="Login"/>
</form>
