<?php

namespace App\Models;

class Hrac extends \App\Core\Model
{
    public function __construct($Obrazok="",$Meno="",$Priezvisko="",$Pozicia="",
                                $Height="",$Weight="",$Wing_Span="",$Narodenie="",
                                $Body="",$Doskoky="", $Asistencie="",$Zisky="",
                                $Bloky="",$Straty="",$Team="",$Logo="")
    {

    }

    static public function setDbColumns()
    {
        return ['Obrazok','Meno','Priezvisko','Pozicia',
            'Height','Weight','Wing_Span','Narodenie',
            'Body','Doskoky','Asistencie','Zisky',
            'Bloky','Straty','Team','Logo'];
    }

    static public function setTableName()
    {
        return 'hrac';
    }
}