<header>
    <? session_start(); // удаление сессии - session_destroy();
        $user = $_SESSION['user'];
    ?>
    <div class = "image">
        <img src="images/logo.jpg" alt = "Упс...что-то пошло не так"
             width="100px" height="100px" align="left">
    </div>
    <nav class="two">
        <ul>
            <li><a href="table.html" target="_blank"><i class="table_mend"></i>Таблица Менделеева</a></li>
            <li><a href="arrays.php" target="_blank"><i class="table_mend"></i>Массивы</a></li>
            <li><a href="questionnaire.php" target="_blank"><i class="table_mend"></i>Анкета</a></li>
        </ul>
    </nav>
    <div class = "line-break">
        <a href="fact.php" target="_blank"><span class="head_span">Факт</span></a>
        <a href="bittrix.php" target="_blank"><span class="head_span">Битрикс</span></a>
        <span class="head_span">
            <?
            if (isset($_COOKIE['last_page'][$user])) {
                $lpage = $_COOKIE['last_page'][$user];
                echo "Последння посещенная вами страница - $lpage";
            }
            ?>
        </span>
    </div>
    <div class = "head_color">
        <form method="post">
            <select name="color">
                <option value="#E21717">Красный</option>
                <option value="#E2A117">Желтый</option>
                <option value="#FFFFFF">Белый</option>
                <option value="#5F9EA0">Голубой</option>
                <option value="#9E4CAC">Фиолетовый</option>
            </select>
            <p>
                <input type="submit" name="submit" value="Принять">
            </p>
            <? if (isset($_POST['color']) && isset($_POST['submit'])) {
                $color = $_POST['color'];
                setcookie("color[$user]", $color, time() + 3600 );

            }

            ?>
        </form>
    </div>
    <div class="aut">
        <?

        if(isset($_SESSION['user'])) {
        $user_text = strip_tags($_SESSION['user']);
        echo "<span class='aut_p'>Здравствуйте, $user_text.</span><br>";
        }
        else {
        echo '<a href="auten.php" target = "_self" class="btn_aut"><img src="images/key3.png" alt="Что-то пошло не так" width="50px" height="50px"></a>';
        }

        ?>
    </div>
</header>
