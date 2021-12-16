<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS-styles/arrays.css">
    <title>Document</title>
</head>
<body>
    <? include 'inc/header.inc.php' ?>
    <main>
        <div class="container_1">
            <h2>Задача №1</h2>
            <?
                $array_1 = [];
                $n = 50;
                for ($i = 0; $i < $n; $i++) {
                    $array_1[$i] = mt_rand(1, 50);
                }
                // для четных элементов массива
                for ($x = 0; $x < count($array_1); $x++) {
                    if ($x % 2 !== 0) {
                        echo "<span class = 'text_array'><b>>>$array_1[$x]<<</b></span></br>";
                    }
                    else {
                        echo "<span class = 'text_array'>$array_1[$x]</span></br>";
                    }
                }
                // для четных чисел элементов массива
//                foreach ($array_1 as $element) {
//                    if ( $element % 2 == 0) {
//                        echo "<span class = 'text_array'><b>>>$element<<</b></span></br>";
//                    }
//                    else {
//                        echo "<span class = 'text_array'>>$element<</span></br>";
//                    }
//                }
                echo "<br>";
            ?>
        </div>
        <div class="container_2">
            <h2>Задача №2</h2>
            <?
                $array_2 = array( array('Apex', 'Bazon', 'Georgia', 'Helvet'),
                                  array('Fact', 'Apple', 'Cleave', 'Andromeda'),
                                  array ('Angel', 'Ring', 'Aqua', 'Night')
                );

                foreach ($array_2 as $string) {
                     foreach ($string as $element) {
                         if (mb_substr($element, 0, 1) == 'A') {
                             echo "<span class = 'text_array'>>$element<</span></br>";
                         }
                     }
                }
            ?>
        </div>
        <div class="container_3">
            <h2>Задача №3</h2>
            <?
                $array_3 = [
                        [10, 20, 43, 65, 87],
                        [87, 23, 11, 4],
                        [9, 90, 47, 62, 36, 22, 80],
                        [21, 82, 6, 33, 42, 50, 32, 243, 23]
                ];
                $dimension = 1;
                $number = 0;
                foreach ($array_3 as $sub_array) {
                    $number = count($sub_array);
                    echo "<span class = 'text_array'>Количество элементов для измерения $dimension = <b>$number</b></span><br>";
                    $dimension++;
                }

                $number_of_all = count($array_3, COUNT_RECURSIVE);
                echo "<br><span class = 'text_array'>Общее количество элементов массива = <b>$number_of_all</b></span></br>";

            ?>
        </div>
    </main>
    <? include 'inc/footer.inc.php'; ?>
</body>
</html>
