<?php

namespace App\Models;

class matches extends \App\Core\Model
{
    public function __construct($HomeTeam="",$AwayTeam="",$ScoreHome="",$ScoreAway="",$Date="",$ID="",)
    {
    }

    static public function setDbColumns()
    {
        return ['HomeTeam','AwayTeam','ScoreHome','ScoreAway','Date','ID'];
    }

    static public function setTableName()
    {
        return 'matches';
    }
}