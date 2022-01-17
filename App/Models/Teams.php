<?php

namespace App\Models;

class Teams extends \App\Core\Model
{
    public function __construct($Logo="",$Team ="", $Konferencia ="", $Divizia="",
                                $Vitazstva="", $Prehry="")
    {

    }


    static public function setDbColumns()
    {
        return ['Logo','Team','Konferencia','Divizia','Vitazstva','Prehry'];
    }

    static public function setTableName()
    {
        return 'Teams';
    }

}