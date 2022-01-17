<?php

namespace App\Models;

class Login extends \App\Core\Model
{
    public function __construct($Meno="",$Heslo="")
    {

    }
    static public function setDbColumns()
    {
        return ['Meno','Heslo'];
    }

    static public function setTableName()
    {
        return 'login';
    }
}