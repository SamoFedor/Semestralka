<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\DB\Connection;
use App\Models\player;
use App\Models\teams;
use App\Models\coaches;
use App\Models\matches;
use App\Prihlasenie;


class PlayersController extends AControllerRedirect
{
    public function index()
    {
        $player = player::getAll();
        return $this->html(['player' => $player]);
    }

    public function updatePlayer() {return $this->html();}
    public function updateePlayer() {
        $team = $this->request()->getValue('team');
        $surname = $this->request()->getValue('surname');
        $prepare = Connection::connect()->prepare('UPDATE player SET Team =? WHERE Surname = ?;');
        $prepare->execute([$team,$surname]);
        $this->redirect('home','updatePlayer');
    }

    public function delete() {return $this->html();}
    public function deletation()
    {
        $name = $this->request()->getValue('name');
        $surname = $this->request()->getValue('surname');
        $jeTam = player::getAll('Name= ?',[$name]);
        if(sizeof($jeTam) > 0 ) {
            $prepare = Connection::connect()->prepare('Delete from player WHERE Surname = ?;');
            $prepare->execute([$surname]); //vykonanie SQL prikazu
            $this->redirect('home');
        } else {
            $this->redirect('Home','post',['error' => 'player  neexistuje']);
        }

    }
    public  function post()
    {
        if(!Prihlasenie::isLogged()) {
            $this->redirect('home');
        } else{
            return $this->html();
        }
        $priezvisko = $this->request()->getValue('priezvisko');
        $jeTam = player::getAll('priezvisko= ?',[$priezvisko]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        } else {
            $this->redirect('Home','post',['error' => 'player uz existuje']);
        }

    }
    public function player()
    {
        $surname = $this->request()->getValue('surname');
        $player = player::getAll('Surname = ?',[$surname]);
        return $this->html(['player' => $player]);
    }

    public function addMVPVote(){
        $idPlayer = $this->request()->getValue('id');
        if ($idPlayer > 0){
            $Player = player::getOne($idPlayer);
            $Player->addMVPVote();
        }
        $this->redirect('Players','player',['id' => $idPlayer]);
    }

    public function upload()
    {
        if(!Prihlasenie::isLogged()){
            $this->redirect('home');
        }
        if(isset($_FILES['files'])){
            if($_FILES["files"]['error'] == UPLOAD_ERR_OK){
                $name = date('Y-a-d-H-i-s_') . $_FILES['files']['name'];
                $meno = $this->request()->getValue('name');
                $surname = $this->request()->getValue('surname');
                $team = $this->request()->getValue('team');
               /* $points = $this->request()->getValue('points');
                $rebounds = $this->request()->getValue('rebounds');
                $assists = $this->request()->getValue('assists');
                $steals = $this->request()->getValue('steals');
                $blocks = $this->request()->getValue('blocks');
                $position = $this->request()->getValue('position');
                $height = $this->request()->getValue('height');
                $weight = $this->request()->getValue('weight');*/

                $jeTam = player::getAll('Surname= ?',[$surname]);
                if(sizeof($jeTam) < 0 ) {
                    $this->redirect('Home','post',['error' => 'player uz existuje']);
                }
                move_uploaded_file($_FILES['files']['tmp_name'],Configuration::UPLOAD_DIR . "$name");
                $prepare = Connection::connect()->prepare('INSERT into player (Picture,Name,Surname,Team/*,Points,Rebounds,Assists,Steals,Blocks,Position,Height,Weight*/) values(?,?,?,?/*,?,?,?,?,?,?,?,?*/);');
                $prepare->execute([$name,$meno,$surname,$team/*,$points,$rebounds,$assists,$steals,$blocks,$points,$height,$weight*/]);
                $this->redirect('players','player', ['priezvisko' => $surname]);
            }
        }
    }

}