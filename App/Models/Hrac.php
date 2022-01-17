<?php

namespace App\Models;

class Hrac extends \App\Core\Model
{
    public function __construct($Obrazok="",$CeleMeno="",$Meno="",$Priezvisko="",$Body="",
                                $Doskoky="", $Asistencie="", $Bloky="",$Zisky="",
                               $Pozicia="",$Height="",$Weight="",$Wing_Span="",$Narodenie="",
                                $Straty="",$Team="",$Logo="",public int $MVPVote = 0,$id="")
    {


    }

    static public function setDbColumns()
    {
        return ['Obrazok','CeleMeno','Meno','Priezvisko',
            'Body','Doskoky','Asistencie','Bloky','Zisky',
            'Pozicia', 'Height','Weight','Wing_Span','Narodenie',
            'Straty','Team','Logo','MVPVote','id'];
    }

    static public function setTableName()
    {
        return 'hrac';
    }
    public function addMVPVote() {
        $this->MVPVote++;
        $this->save();
    }
}