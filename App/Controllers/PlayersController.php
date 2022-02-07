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
        $celeMeno = $this->request()->getValue('celeMeno');
        $prepare = Connection::connect()->prepare('UPDATE player SET Team =? WHERE CeleMeno = ?;');
        $prepare->execute([$team,$celeMeno]);
        $this->redirect('home','updatePlayer');
    }

    public function delete() {return $this->html();}
    public function deletation()
    {
        $CeleMeno = $this->request()->getValue('celeMeno');
        $jeTam = player::getAll('CeleMeno= ?',[$CeleMeno]);
        if(sizeof($jeTam) > 0 ) {
            $prepare = Connection::connect()->prepare('Delete from player WHERE CeleMeno = ?;');
            $prepare->execute([$CeleMeno]); //vykonanie SQL prikazu
            $this->redirect('home');
        } else {
            $this->redirect('Home','post',['error' => 'player uz neexistuje']);
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
                $menoplayera = $this->request()->getValue('meno');
                $celeMeno = $this->request()->getValue('celeMeno');
                $jeTam = player::getAll('CeleMeno= ?',[$celeMeno]);
                if(sizeof($jeTam) < 0 ) {
                    $this->redirect('Home','post',['error' => 'player uz existuje']);
                }
                $priezvisko= $this->request()->getValue('priezvisko');
                $MVP= $this->request()->getValue('MVPVote');
                move_uploaded_file($_FILES['files']['tmp_name'],Configuration::UPLOAD_DIR . "$name");
                $prepare = Connection::connect()->prepare('INSERT into player (Obrazok,CeleMeno,Meno,Priezvisko,MVP_Vote) values(?,?,?,?,?);');
                $prepare->execute([$name,$celeMeno,$menoplayera,$priezvisko,$MVP]);
                $this->redirect('players','player', ['priezvisko' => $priezvisko]);
            }
        }
    }

}