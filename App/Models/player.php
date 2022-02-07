<?php

namespace App\Models;

class player extends \App\Core\Model
{
    public function __construct($Picture="",$Name="",$Surname="",$Team="",
                                $Points="", $Rebounds="", $Assists="",$Steals="",$Blocks="",
                               $Position="",$Height="",$Weight="",$Logo="",$Age="",$Salary="",
                                public int $MVP_Vote = 0,$id="")
    {


    }

    static public function setDbColumns()
    {
        return ['Picture','Name','Surname','Team',
            'Points','Rebounds','Assists','Steals','Blocks',
            'Position', 'Height','Weight','Logo','Age','Salary',
            'id'];
    }

    static public function setTableName()
    {
        return 'player';
    }
    public function addMVPVote() {
        $this->MVP_Vote++;
        $this->save();
    }
}