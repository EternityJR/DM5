<?php
    /*
    * Получение данных
    *
    * Преобразует данные из строки в массив и проверяет введены ли все элементы
    *
    *@локальные переменные
    *@return arr
    */
function getdata(){
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    if ($_POST[$i . $j] == "") {
                        echo ("Введены не все элементы <br> ");
                        return ;
                    }
                    $arr[$i][$j] = (int)$_POST[$i . $j];
                }
            }
            return $arr;
        }

    /*
        *проверка на соответствие типа
        *
        *проверка каждого элемента на соответствие
        *
        *@param arr
    */
        function validate($arr){
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    if (($i == $j) and ($arr[$i][$j] != 0)) {
                        echo("Ошибка в элементе ".$i.$j);
                        return;
                    }
                    if (!(($arr[$i][$j] == 0) or ($arr[$i][$j] == 1))){
                        echo("Ошибка в элементе ".$i.$j);
                    }
                }
            }
        }

    /*
    * Поиск кратчайшего пути
    *
    * Создаёт матрицу достижимости 
    *
    *@param arr
    *@return arr
    */
        function minl($arr){
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        if ($arr[$i][$j] == 0){
                            if ($arr[$k][$j] == 1 && $arr[$i][$k] == 1){
                                $arr[$i][$j] = 1;
                            }
                        }
                    }
                }
            }
            return $arr;
        }

    /*
    * Вывод матрицы достижимости
    *
    * Выводит матрицу на страницу
    *
    *@param arr
    */
        function printl($arr){
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    echo($arr[$i][$j] . " ");
                }
                echo("<br>");
            }
        }
        ?>