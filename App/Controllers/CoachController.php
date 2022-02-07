<?php

namespace App\Controllers;
use App\Core\DB\Connection;
use App\Models\player;
use App\Models\teams;
use App\Models\coaches;
use App\Models\matches;

class CoachController extends AControllerRedirect
{
    public function index()
    {

    }
    public function updatee()
    {
        return $this->html();
    }
    public function update() {
        $name= $this->request()->getValue('name');
        $surname = $this->request()->getValue('surname');
        $team = $this->request()->getValue('team');
        $newteam = $this->request()->getValue('newteam');
        $jeTam = coaches::getAll('Team= ?',[$team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        }
        $jeTam = coaches::getAll('Team= ?',[$newteam]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        }
        $prepare = Connection::connect()->prepare('UPDATE coaches SET  Team = ? WHERE Team = ?;');
        $prepare->execute([$newteam,$team]);
        $this->redirect('home');
    }
}