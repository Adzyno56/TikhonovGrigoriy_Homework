
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
                <?
                    // 1 решение
                    $string_text =
                        "Студент магистрант ОГУ по направлению 'Информационные системы и технологии'.<br>
                        Бакалавр по направлению 'Информационная безопасность'.<br>
                        Знания: C# на уровне разработки любительского ПО, JS - изучал только синтаксис.";
                    function exp_1($string)
                    {
                        $array_text = explode('<br>', $string);
                        for ($i = 0; $i < count($array_text); $i++) {
                            if ($i == 0) {
                                  echo "<span class = 'text_1'>$array_text[$i]</span><br>";
                            } else {
                                  echo "$array_text[$i]<br>";
                            }
                        }
                    }
                    exp_1($string_text);
                    // 2 решение
                   // echo str_replace(array('Студент магистрант', 'и технологии'),
                               //      array('<span class = "text_1">Студент магистрант', 'и технологии</span>'),
                                //     $string_text);
                ?>
            </p>
        </div>
        <div class = "call">
            <p>
                <?
                    $string_text_2 = "Нравится, что любую информацию разжевывают 'для самых маленьких'.<br>
                                      Всегда можно обратиться за помощью к преподавателю, если в чем-то не успеваешь разобраться.<br>";
                    function epx_2($string)
                    {


                        $array_text_2 = [];
                        for ($x = 0; $x < mb_strlen($string); $x++) {

                            $array_text_2[$x] = mb_substr($string, $x, 1);
                        }
                        $odd_or_even = 1;

                        foreach ($array_text_2 as $el) {
                            switch ($el) {
                                case '>':
                                case '<':
                                case 'b':
                                case 'r':
                                    echo $el;
                                    break;
                                default:
                                    if ($odd_or_even % 2 == 0) {
                                        echo "<span class ='text_1'>$el</span>";
                                        $odd_or_even++;
                                    } else {
                                        echo "<span class ='text_2'>$el</span>";
                                        $odd_or_even++;
                                    }
                                    break;
                            }

                        }
                    }
                    epx_2($string_text_2);

                ?>
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

    <? include 'inc/footer.inc.php'; ?>

</body>
</html>