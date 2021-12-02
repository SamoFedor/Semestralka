<?php

namespace App\Models;

class Trener extends \App\Core\Model
{
    public function __construct($Meno="",$Priezvisko="",$Team="")
    {
    }

    static public function setDbColumns()
    {
       return ['Meno','Priezvisko','Team'];
    }

    static public function setTableName()
    {
        return 'trener';
    }
}