
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS-styles/index.css">
    <title>Document</title>
</head>
<body>
    <? include 'inc/header.inc.php' ?>
    <div class="photo">
        <img src="images/photo.png" alt = "Упс...что-то пошло не так" >
    </div>
    <main>
        <div class = "names">
            <h2 class = "htwo">Григорий Тихонов</h2>
        </div>
        <div class = "about">
            <p>
                Студент магистрант ОГУ по направлению "Информационные системы и технологии".<br>
                Бакалавр по направлению "Информационная безопасность".<br>
                Знания: C# на уровне разработки любительского ПО, JS - изучал только синтаксис.
            </p>
        </div>
        <div class = "call">
            <p>
                Нравится, что любую информацию разжевывают "для самых маленьких". <br>
                Всегда можно обратиться за помощью к преподавателю, если в чем-то не успеваешь разобраться. <br>
            </p>
        </div>
        <div class ="container_1">
            <div class = "illustration_1_1">
                <img class="image_1" src="images/gameofthrones.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Игра престолов</p>
            </div>
            <div class = "illustration_1_2">
                <img class="image_1" src="images/true.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Настоящий детектив</p>
            </div>
            <div class = "illustration_1_1">
                <img class="image_1" src="images/dare.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Сорвиголова</p>
            </div>
            <div class = "illustration_1_2">
                <img class="image_1" src="images/boys.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Пацаны</p>
            </div>
        </div>
        <div class ="container_2">
            <div class = "illustration_2">
                <img class="image_2" src="images/shindler.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Список Шиндлера</p>
            </div>
            <div class = "illustration_2">
                <img class="image_2" src="images/ironman.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Железный человек</p>
            </div>
            <div class = "illustration_2">
                <img class="image_2" src="images/good.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Хороший, плохой, злой</p>
            </div>
            <div class = "illustration_2">
                <img class="image_2" src="images/dark.jpg" alt="Что-то пошло не так...">
                <p class="serialname">Темный рыцарь</p>
            </div>
        </div>
    </main>
    <?
    date_default_timezone_set('Asia/Yekaterinburg');
    $date = date('H:i');
     ?>
    <? include 'inc/footer.inc.php'; ?>
    <?
    if ($date >= '08:00' && $date < '20:00') {

        echo "<script src='js/day.js'></script>";
    }
    else {
        echo '<body style="background-color:#233B3C">';
        echo "<script src='js/night.js'></script>";
    } ?>
</body>
</html>