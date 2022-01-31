<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP homework1</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="title"> PHP HomeWork #4 </div>    

    <?php

        // Task 1
        echo "<b>Задача 1</b><br />";

        $string = "london is the capital of great britain";

        echo ucwords($string);

        echo '<hr />';

        // Task 2
        echo "<b>Задача 2</b><br />";

        $string = 'html <b>css</b> php';

        echo '<pre>' . print_r($string = explode(' ', strip_tags($string)), true) . '</pre>';

        echo '<hr />';

        // Task 3
        echo "<b>Задача 3</b><br />";

        $string = 'Дана вот такая вот строка';

        for ($i = 0; $i < mb_strlen($string); $i++) {
             $stringArr[$i] = mb_substr($string, $i, 1);
        }

        shuffle($stringArr);

        echo $string = implode(' ', $stringArr);

        echo '<hr />';

        // Task 4
        echo "<b>Задача 4</b><br />";

        $date = getdate();

        echo $month = cal_days_in_month(CAL_GREGORIAN, $date['mon'], $date['year']);

        echo '<hr />';

        // Task 5
        echo "<b>Задача 5</b><br />";

        echo date("Y-m-d");
        echo '<br />';
        echo date("d.m.Y");
        echo '<br />';
        echo date("d.m.y");
        echo '<br />';
        echo date("h:i:s");
        echo '<br />';
        $date = date("Y-m-d h:i:s");
        echo strtotime("$date");

        echo '<hr />';

        // Task 6
        echo "<b>Задача 6</b><br />";

        $date = date("2025-12-31");

        $addDate1 = strtotime("$date + 2 days");
        $addDate2 = strtotime("$date + 1 month 2 days");
        $addDate3 = strtotime("$date + 1 year");
        $subtractDate4 = strtotime("$date -3 days");
        
        echo date("Y-m-d", $addDate1);
        echo '<br />';
        echo date("Y-m-d", $addDate2);
        echo '<br />';
        echo date("Y-m-d", $addDate3);
        echo '<br />';
        echo date("Y-m-d", $subtractDate4);

        echo '<hr />';

        // Task 7
        echo "<b>Задача 7</b><br />";

        $string ='1hedc45334jvc894r5kjv0';
        $digits = [0,1,2,3,4,5,6,7,8,9];
        echo $string = str_replace($digits, '', $string); 

        echo '<hr />';

        // Task 8
        echo "<b>Задача 8</b><br />";

        echo min(4, -2, 5, 19, -130, 0, 10); 
        echo '<br />';

        echo max([4, -2, 5, 10, -130, 0, 10]);

        echo '<hr />';

        // Task 9
        echo "<b>Задача 9</b><br />";

        echo rand(0, 100);

        echo '<hr />';

        // Task 10
        echo "<b>Задача 10</b><br />";

        $date = getdate();

        echo $date['weekday'];
        $week = array( 
            '1' => "понедельник",
            '2' => "вторник",
            '3' => "среда",
            '4' => "четверг",
            '5' => "пятница",
            '6' => "суббота",
            '7' => "воскресенье"
        );

        echo '<pre>';
            print_r($week);
        echo '</pre>';

        echo '<hr />';

        // Task 11
        echo "<b>Задача 11</b><br />";

            $arr = [[1, 2, 3], [4, 5], [6]];

            function arrIter($arr, &$arrSum = 0) {
                 for ($i = 0; $i < count($arr); $i++) {
                     if (is_array($arr[$i])) {
                        arrIter($arr[$i], $arrSum);
                     } else {
                        $arrSum += $arr[$i]; 
                     }
                 }
                 return $arrSum;
             };

        echo arrIter($arr, $arrSum);

        echo '<hr />';

        // Task 12
        echo "<b>Задача 12</b><br />";
        
        $array = array(1, 1, 1, 2, 2, 2, 2, 3);

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $array[$i+1]) {
                continue;
            } else {
                $array2[] = $array[$i];
            }
        }

        echo '<pre>' . print_r($array2, true) . '</pre>';

        echo '<hr />';

        // Task 13
        echo "<b>Задача 13</b><br />";

        $navMenu = array (
            'index' => 'Home',
            'about' => 'About',
            'services' => 'Services',
            'catalog' => 'Catalog',
            'contacts' => 'Contacts'
        );

        foreach ($navMenu as $index => $value) {
            $indexNav[] = $index;
            $valueNav[] = $value;
        }

        echo '<ul style="list-style: none"><br />';
        for ($i = 0; $i < count($navMenu); $i++) {
            echo '<li style="float: left"><a style="display: block; padding: 8px 15px; color: #069; " href="' . $indexNav[$i] . '".php>' . $valueNav[$i] . '</a></li>';
        }
        echo '</ul><br /><br />';

        echo '<hr />';

        // Task 14
        echo "<b>Задача 14</b><br />";

        $n = 5;

        echo '<div style="width: 99.9%; height: 100px; border: 1px solid red; background: #000; position: relative">';

        for ($i = 0; $i < $n; $i++) {
            $side = rand(15,25);
            echo '<div style="width: ' . $side . 'px; height: ' . $side . 'px; border:0; background: rgb(202, 46, 26); 
                 position: absolute; bottom: ' . rand(1,70) . '%; right: ' . rand(1,100). '%"></div>';
        }

        echo '</div>';

        echo '<hr />';

        // Task 15
        echo "<b>Задача 15</b><br />";

            $string = "1234567890";
            $offset = 0;

            for ($i = 0; $i < strlen($string); $i++) {
               if ($offset > strlen($string)) {
                    break;
               } else {
                    $newArr[] = substr($string, $offset , $i + 1);
                    $offset += $i + 1;
                        if(empty($newArr[$i])) {
                            unset($newArr[$i]);
                        }
               }
            }

            echo '<pre>' . print_r($newArr, true) . '</pre>';

            echo '<hr />';

            // Task 16
            echo "<b>Задача 16</b><br />";

            $arr = [48, 9, 0, 4, 21, 2, 1, 0, 8, 84, 76, 8, 4, 13, 0, 2];

            $arrZero = array_keys($arr, '0');

            if(count($arrZero) > 1) {
                for ($i = 0; $i < count($arrZero); $i++) {
                    if (isset($arr[$i + 1])) {
                        $lastZero = $arrZero[0];
                        $firstZero = $arrZero[0];
                            if($lastZero >= $arrZero[$i + 1]) {
                                $lastZero = $arrZero[$i];
                            }
                            if($firstZero < $arrZero[$i + 1]) {
                                $firstZero = $arrZero[$i];
                            }
                    }
                }
            }

            if (isset($firstZero) && isset($lastZero)) {
                for ($i = $firstZero; $i <= $lastZero; $i++) {
                    $sumElem += $arr[$i];
                }
            } else {
                $sumElem = 0;
            }

            echo $sumElem;
 
            echo '<hr />';

            // Task 17
            echo "<b>Задача 17</b><br />";

            function colorDechex() {
                return $color = '#' . dechex(rand(0, pow(2, 32) - 1));
            }

            echo '<div style="width: 20%; height: 50px; margin: auto; border: 1px solid #000; background: ' . colorDechex() . '; display: flex; justify-content: center; 
            align-items: center; font-size: 25px">' .  colorDechex() . '</div>';

            echo '<br /><hr />';

            // Task 18
            echo "<b>Задача 18</b><br />";

            $string = '332 441 550';

            $regexp = '/[\d]{2}/';

            echo preg_replace($regexp, '!', $string);

            echo '<br /><hr />';

            // Task 19
            echo "<b>Задача 19</b><br />";

            $phone = '+375 29 2223335';
            $phone2 = '0162 2223333';
            
            function checkPhone($phone) {
            $regexp = '/^\+[\d]{1,3}[\s]?[\d]{1,3}[\s]?\b[\d]{7}\b$/';

            preg_match($regexp, $phone, $matches);

            if(!empty($matches)) {
                return 'true';
            } else {
                return 'false';
            }
            }

            
            function checkPhoneSimple($phone) {
                $regexp = '/^([\d]{3,5}[\s]?)?\b[\d]{5,7}\b$/';
    
                preg_match($regexp, $phone, $matches);
    
                if(!empty($matches)) {
                    return 'true';
                } else {
                    return 'false';
                }
                }

            echo checkPhone($phone);
            echo '<br />';
            echo checkPhoneSimple($phone2);

            echo '<br /><hr />';

            // Task 20
            echo "<b>Задача 20</b><br />";

            $email = 'info@myitschool.by';

                function validateEmail($email) {
                $regexpA1 = '/[\!\#\$\%\&\'\*\+\/\=\?\^\`\{\|\}\~а-я]/iu';
                $regexpA2 = '/(^[@\.\-_]+)?([@\.\-_]@)|(@[@\.\-_])([@\.\-_])?$/';
                $regexpB = '/^@?(([0-9])?\.)?(\b[\w]{1,2}@\b)/iu';
                $regexpC = '/(@[\w]{1,2}\.)|(\.[\w]{11,}$)/iu';

                preg_match($regexpA1, $email, $matches1);

                if(!empty($matches1)) {
                    $error[] = 'не правильные символы';
                }

                preg_match($regexpA2, $email, $matches2);

                if(!empty($matches2)) {
                    $error[] = 'двойные @ точки, -, _ и т.д.';
                }
      
                preg_match($regexpB, $email, $matches3);

                if(!empty($matches3)) {
                    $error[] = 'не правильный ввод символов до @';
                }

                preg_match($regexpC, $email, $matches4);

                if(!empty($matches4)) {
                    $error[] = 'не правильный ввод символов после @';
                }

                if (empty($error)) {
                    return "Адресс эл. почты введен правильно";
                } else {
                    return $error;
                }

                }

                echo '<pre>' . print_r(validateEmail($email), true) . '</pre>';

    ?>

</body>
</html>