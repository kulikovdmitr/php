<?php

namespace Domashka;

class Count

{
    public function countit ($num, $chislo): string
    {
        return substr_count($chislo, $num);
    }



}





//    echo "Введите значение\n";
//$chislo = readline(); //Ввод первого числа с клавиатуры
//    echo "Введите значение, которое нужно найти\n";
//$number = readline(); // Ввод второго числа с клавиатуры
//$count = substr_count($chislo, $number); // Количество символов $number в введенном значении
//if ($count > 0) {
//    echo (' Количество значений = '. $count);
//}   elseif ($count == 0) {  //Обработка случая, если значение отсутствует во введенном
//    echo ("Значение не найдено\n");
//}






