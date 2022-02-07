<?php

namespace App\Models;

class coaches extends \App\Core\Model
{
    public function __construct($Name="",$Surname="",$Team="",$IDD="")
    {
    }

    static public function setDbColumns()
    {
       return ['Name','Surname','Team','IDD'];
    }

    static public function setTableName()
    {
        return 'coaches';
    }

}