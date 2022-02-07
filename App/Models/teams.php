<?php

namespace App\Models;

class teams extends \App\Core\Model
{
    public function __construct($Logo="",$Team ="", $Town ="", $Postfix="",
                                $Wins="", $Loses="", $Conference="", $Division="",$IDD="")
    {

    }


    static public function setDbColumns()
    {
        return ['Logo','Team','Town','Postfix','Wins','Loses','Conference','Division','IDD'];
    }

    static public function setTableName()
    {
        return 'teams';
    }
}