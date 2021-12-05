<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS-styles/questionnaire.css">
    <title>Document</title>
</head>
<body>
    <?include 'inc/header.inc.php';?>
    <main>
        <form method="post" class="form_que">
            <div class="form_container">
                <p>Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_1]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_1]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Раздражают ли Вас мелкие повседневные обязанности?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_2]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_2]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Верите ли Вы, что ваши друзья преданы Вам?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_3]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_3]" value="0"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_4]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_4]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Способны ли Вы ударить собаку или кошку?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_5]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_5]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Часто ли Вы принимаете лекарства?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_6]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_6]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_7]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_7]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_8]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_8]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Тяготят ли Вас общественные обязанности?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_9]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_9]" value="0"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_10]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_10]" value="0"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_11]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_11]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_12]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_12]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_13]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_13]" value="0"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Нравится ли Вам семейная жизнь?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_14]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_14]" value="0"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Злопамятны ли Вы?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_15]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_15]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_16]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_16]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Случается ли Вам с утра быть в плохом настроении?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_17]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_17]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Раздражает ли Вас современная живопись?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_18]" value="0"></label>
                    <label>Нет<input type="radio" name="questions[que_18]" value="1"></label>
                </p>
            </div>
            <div class="form_container">
                <p>Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
                <p>
                    <label>Да<input type="radio" name="questions[que_19]" value="1"></label>
                    <label>Нет<input type="radio" name="questions[que_19]" value="0"></label>
                </p>
            </div>
            <div class="form_btn">
                <input type="submit" value="Отправить" name="res_btn" class="res_btn">
            </div>
        </form>
        <div class="result_que">
            <?
                $user = strip_tags((($_SESSION['user'])) ?? 'Неизвестный');
                if (isset($_POST['questions']) && isset($_POST['res_btn'])) {
                    $result_array = $_POST['questions'];
                    $sum_points = array_sum($result_array);

                    if ($sum_points > 15) {
                        echo "<p>Имя анкетируемого: $user</p>
                             <p>Результат: у Вас покладистый характер</p>";
                    }
                    else if ($sum_points <= 15 && $sum_points >=8) {
                        echo "<p>Имя анкетируемого: $user</p>
                             <p>Результат: Вы не лишены недостатков, но с вами можно ладить</p>";
                    }
                    else {
                        echo "<p>Имя анкетируемого: $user</p>
                             <p>Результат: вашим друзьям можно посочувствовать</p>";
                    }
                }
            ?>
        </div>
    </main>
    <? include 'inc/footer.inc.php'; ?>
</body>
</html>
