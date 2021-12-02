<?php

namespace App\Models;

class Login extends \App\Core\Model
{

    static public function setDbColumns()
    {
        return ['Meno','Heslo'];
    }

    static public function setTableName()
    {
        return 'login';
    }
}