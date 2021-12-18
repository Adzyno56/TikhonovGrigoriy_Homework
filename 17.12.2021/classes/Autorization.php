<?php


class Autorization
{

    private $login;
    private $password;


    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function getConnection() {

        $host = 'localhost';
        $db   = 'mysite';
        $user = 'TikhonovG';
        $pass = 'root1234';
        $charset = 'utf8';

        $conn = new mysqli($host, $user, $pass, $db);
        mysqli_set_charset($conn, $charset);

        return $conn;
    }

    public function check_auth($db_connection) {

        $log = $this->login;
        $pass = $this->password;
        $sql = "SELECT * FROM auten";
        if ($result = $db_connection->query($sql)) {
            foreach($result as $row) {
                if (sha1($log) == $row["login"] && sha1($pass) == $row["password"]) {
                    return true;
                }
                else return false;
            }
        }


    }
}