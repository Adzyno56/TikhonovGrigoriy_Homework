<header>
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
    <div class = "line-break"></div>
    <div class="aut">
        <?
        session_start();
        if(isset($_SESSION['user'])) {
        $user = strip_tags($_SESSION['user']);
        echo "<span class='aut_p'>Здравствуйте, $user.</span><br>
              <form method='post'>
                    <textarea name='comment'></textarea>
                    <input type='submit' name='send' value='Отправить'>
              </form>";
        }
        else {
        echo '<a href="auten.php" target = "_self" class="btn_aut"><img src="images/key3.png" alt="Что-то пошло не так" width="50px" height="50px"></a>';
        }
        if (isset($_POST['send'])) {
            $comment = strip_tags($_POST['comment']);
            mail('no-reply@gmail.com', 'Comment from '. $user, "$comment");
        }
        ?>
    </div>
</header>
