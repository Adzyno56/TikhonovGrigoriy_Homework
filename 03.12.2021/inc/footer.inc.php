<footer>
    <a href="https://vk.com"><span>Вконтакте</span></a>
    <a href="https://www.youtube.com/"><span>Youtube</span></a>
    <a href="https://www.facebook.com/"><span>Facebook</span></a>
    <span>Все права защищены (c)</span>
    <?
        date_default_timezone_set("Asia/Yekaterinburg");
        $date = date('H:i');
        echo "<span>$date</span>";
        function day_or_night($date)
        {
            if ($date >= '08:00' && $date < '20:00') {

                echo "<script src='js/day.js'></script>";
            } else {
                echo '<body style= "background-color:#233B3C">';
                echo "<script src='js/night.js'></script>";
            }
        }
        day_or_night($date);

        $string_all_text = "Григорий Тихонов Студент магистрант ОГУ по направлению Информационные системы и технологии Бакалавр по направлению Информационная безопасность; Знания на уровне разработки любительского ПО изучал только синтаксиса; Нравится что любую информацию разжевывают для самых маленьких; Всегда можно обратиться за помощью к преподавателю, если в чем-то не успеваешь разобраться; Игра престолов Настоящий детектив Сорвиголова Пацаны Список Шиндлера Железный человек Хороший, плохой, злой Темный рыцарь Вконтакте Все права защищены Таблица Менделеева Массивы";
        function epx_3($string)
        {
            $count_vowel_words = 0;
            $array_count_words = explode(' ', $string);
            echo "<br><br><span>Количество слов на странице = " . count($array_count_words) . "</span>";
            foreach ($array_count_words as $word) {
                for ($x = 0; $x < mb_strlen($word); $x++) {
                    $array_word = [];
                    $array_word[$x] = mb_substr($word, $x, 1);
                    foreach ($array_word as $letter) {
                        switch ($letter) {
                            case 'а':
                            case 'у':
                            case 'о':
                            case 'ы':
                            case 'э':
                            case 'я':
                            case 'ю':
                            case 'ё':
                            case 'и':
                            case 'е':
                                $count_vowel_words++;
                                break;
                            default:
                                break;
                        }
                    }
                }
            }
            echo "<span>Количество гласных букв на странице = " . $count_vowel_words . "</span>";
        }
        epx_3($string_all_text);
        function epx_4()
        {
            $today = date("j, n, Y");
            $today_array = explode(", ", $today);
            $days_between = ($today_array[0] - 4) + (($today_array[1] - 3) * 30) +
                (($today_array[2] - 1999) * 365);
            echo "<br><br><span>Текущая дата - $today; День рождения - 04, 03, 1999; Разность - $days_between дней(день) </span>";
        }
        epx_4();
    ?>
</footer>
