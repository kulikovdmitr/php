<?php

namespace Domashka;

class Count

{
    public function countit ($num, $chislo): string
    {
        return substr_count($chislo, $num);
    }



}






