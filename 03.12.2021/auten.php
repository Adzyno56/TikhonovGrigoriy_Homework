<?php
session_start();
$users = 'e7889649bb678eeb88b21e2292f792c26ceeb5e1'; // логин - tikhonov99
$pass = 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'; // пароль - root
if($_POST['submit']){
    if($users == sha1($_POST['user']) && $pass == sha1(($_POST['pass'])))
    {
        $_SESSION['user'] = htmlspecialchars($_POST['user']);
        header("Location: index.php");
        exit;

    }
    else echo '<p>Логин или пароль неверны!</p>';

}
?>

<form method="post">
    <label>Логин<input type="text" name="user"/></label><br/>
    <label>Пароль<input type="password" name="pass" /></label><br/>
    <input type="submit" name="submit" value="Login"/>
</form>
