<?php

namespace Domashka;

class Graussn
{

    public function grauss (string $number):string

    {
        return array_sum(range(1,$number)); // Сумма чисел ранее созданного массива
    }

}

