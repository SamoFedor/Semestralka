<?php

namespace App\Controllers;

use App\Core\DB\Connection;
use App\Models\player;
use App\Models\teams;
use App\Models\coaches;
use App\Models\matches;


class TeamController extends AControllerRedirect
{
    public function index()
    {

    }
    public function team()
    {
        $Team = $this->request()->getValue('Team');
        $team = teams::getAll('Team = ?',[$Team]);
        $coach = coaches::getAll('Team = ?',[$Team]);
        $zapasDomaci =matches::getAll('HomeTeam =?',[$Team]);
        $zapasHostia =matches::getAll('AwayTeam =?',[$Team]);
        $players = player::getAll('Team =?',[$Team]);
        return $this->html(
            [
                'Team' => $team,
                'coach' => $coach,
                'HomeTeam' =>$zapasDomaci,
                'AwayTeam'=>$zapasHostia,
                'Players' => $players
            ]
        );

    }
    public function all() {
        $pacific = Teams::getAll('Division =?',['Pacific']);
        $central = Teams::getAll('Division =?',['Central']);
        $atlantic = Teams::getAll('Division =?',['Atlantic']);
        $southeast = Teams::getAll('Division =?',['Southeast']);
        $southwest = Teams::getAll('Division =?',['Southwest']);
        $northwest = Teams::getAll('Division =?',['Northwest']);
        return $this->html(['Pacific' =>$pacific,'Central'=>$central,'Southeast'=>$southeast,'Atlantic'=>$atlantic,'Southwest'=>$southwest,'Northwest'=>$northwest]);
    }
    public function leaderboard()
    {
        $conference = $this->request()->getValue('conference');
        $divizia = $this->request()->getValue('division');
        $teams = Teams::getAll('Division = ?',[$divizia]);
        $team = Teams::getAll('Conference = ?',[$conference]);
        return $this->html(
            [
                'Conference' => $teams,
                'Division' =>$team
            ]
        );
    }
    public function getAllTeams() {
        $pr = Connection::connect()->prepare('SELECT * FROM teams WHERE Team != ? ORDER BY Wins DESC');
        $pr->execute([""]);
        $team = $pr->fetchAll();

        return $this->json($team);

    }

   /* public function getAllTeamsDivision() {
        $pr = Connection::connect()->prepare('SELECT * FROM teams where Division = ? ORDER BY Wins ');
        $division = $this->request()->getValue('division');
        $pr->execute([$division]);
        $team = $pr->fetchAll();

        return $this->json($team);
    }*/
    public function deleteTeam() {return $this->html();}
    public function deleteTeamm() {
        $Team = $this->request()->getValue('team');
        $jeTam = player::getAll('Team= ?',[$Team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        }
        $prepare = Connection::connect()->prepare('Delete from teams WHERE Team = ?;');
        $prepare->execute([$Team]); //vykonanie SQL prikazu
        $this->redirect('home');

    }
    public function insertTeam() {return $this->html();}
    public function insertTeamm() {
        $Team = $this->request()->getValue('team');
        $town= $this->request()->getValue('Town');
        $post = $this->request()->getValue('Postfix');
        $jeTam = Teams::getAll('Team= ?',[$Team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('Home');
        }
        $win= $this->request()->getValue('win');
        $lose= $this->request()->getValue('lose');
        $prepare = Connection::connect()->prepare('INSERT into teams (Team,Town,Postfix,Wins,Loses) values(?,?,?,?,?);');
        $prepare->execute([$Team,$town,$post,$win,$lose]);
        $this->redirect('Home');
    }
    public function update() {
        return $this->html();
    }
    public function updatee() {
        $team = $this->request()->getValue('team');
        $win = $this->request()->getValue('vyhry');
        $lose = $this->request()->getValue('prehry');
        $jeTam = Teams::getAll('Team= ?',[$team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        }
        $prepare = Connection::connect()->prepare('UPDATE teams SET Vitazstva = ?,Prehry = ? WHERE Team = ?;');
        $prepare->execute([$win,$lose,$team]);
        $this->redirect('home','update');
    }

}
