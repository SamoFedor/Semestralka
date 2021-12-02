<?php

namespace App\Models;

class Zapas extends \App\Core\Model
{
    public function __construct($Index="",$Datum="",$Domaci="",$Hostia="")
    {
    }

    static public function setDbColumns()
    {
        return ['Index','Datum','Domaci','Hostia'];
    }

    static public function setTableName()
    {
        return 'zapas';
    }
}