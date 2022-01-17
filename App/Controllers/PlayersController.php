<?php

namespace App\Controllers;

use App\Models\Hrac;
use App\Models\Teams;
use App\Models\Trener;
use App\Models\Zapas;


class PlayersController extends AControllerRedirect
{
    public function index()
    {
        $hrac = Hrac::getAll();

        return $this->html(
            [
                'hrac' => $hrac

            ]);

    }

    public function team()
    {

        $Team = $this->request()->getValue('Team');
        $team = Teams::getAll('Team = ?',[$Team]);
        $coach = Trener::getAll('Team = ?',[$Team]);
        $zapasDomaci =Zapas::getAll('Domaci =?',[$Team]);
        $zapasHostia =Zapas::getAll('Hostia =?',[$Team]);
        return $this->html(
            [
                'Team' => $team,
                'coach' => $coach,
                'zapasDomaci' =>$zapasDomaci,
                'zapasHostia'=>$zapasHostia

            ]
        );

    }
    public function player()
    {
        $priezvisko = $this->request()->getValue('priezvisko');
        $hrac = Hrac::getAll('Priezvisko = ?',[$priezvisko]);

            return $this->html(
                [
                    'hrac' => $hrac
                ]
            );


    }
    public function addMVPVote(){
        $idPlayer = $this->request()->getValue('id');
        if ($idPlayer > 0){
            $Player = Hrac::getOne($idPlayer);
            $Player->addMVPVote();
        }
        $this->redirect('Players','player',['id' => $idPlayer]);
    }
    public function leaderboard()
    {
        $conference = $this->request()->getValue('conference');
        $divizia = $this->request()->getValue('divizia');
        $teams = Teams::getAll('Divizia = ?',[$divizia]);
        $team = Teams::getAll('Konferencia = ?',[$conference]);
        return $this->html(
            [
                'Divizia' => $teams,
                'Conference' =>$team
            ]
        );
    }
}