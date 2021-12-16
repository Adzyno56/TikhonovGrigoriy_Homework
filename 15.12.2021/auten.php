<?php
session_start(); // удаление сессии - session_destroy();
//$users = 'e7889649bb678eeb88b21e2292f792c26ceeb5e1'; // логин - tikhonov99
//$pass = 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'; // пароль - root
$host = 'localhost';
$db   = 'mysite';
$user = 'TikhonovG';
$pass = 'root1234';
$charset = 'utf8';
$conn = new mysqli($host, $user, $pass, $db);
mysqli_set_charset($conn, $charset);
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {

    $sql = "SELECT * FROM auten";
    if ($result = $conn->query($sql)) {
        foreach($result as $row){
            if (sha1($_POST['user']) == $row["login"] && sha1($_POST['pass']) == $row["password"]){
                $_SESSION['user'] = htmlspecialchars($_POST['user']);
                header("Location: index.php");
                exit;
            }
            else {
                echo '<p>Логин или пароль неверны!</p>';
            }
        }
    }
    else echo "Ошибка: " . $conn->error;

    $conn->close();
}
?>

<form method="post">
    <label>Логин<input type="text" name="user"/></label><br/>
    <label>Пароль<input type="password" name="pass" /></label><br/>
    <input type="submit" name="submit" value="Login"/>
</form>
