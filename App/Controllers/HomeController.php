<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\DB\Connection;
use App\Models\Hrac;
use App\Models\Teams;
use App\Models\Zapas;
use App\Prihlasenie;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {
        $zapasy = Zapas::getAll();
        return $this->html(
            [
                'matches' => $zapasy
            ]);
    }
    public function updatePlayer() {
        return $this->html();
    }
    public function updateePlayer() {
        $team = $this->request()->getValue('team');
        $celeMeno = $this->request()->getValue('celeMeno');
        $prepare = Connection::connect()->prepare('UPDATE hrac SET Team =? WHERE CeleMeno = ?;');
        $prepare->execute([$team,$celeMeno]);
        $this->redirect('home','updatePlayer');
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
    public function deleteTeam() {return $this->html();}
    public function deleteTeamm() {
        $Team = $this->request()->getValue('team');
        $jeTam = Hrac::getAll('Team= ?',[$Team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('home');
        }
        $prepare = Connection::connect()->prepare('Delete from teams WHERE Team = ?;');
        $prepare->execute([$Team]); //vykonanie SQL prikazu
        $this->redirect('home');

    }
    public function insertTeam() {return $this->html();}
    public function insertTeamm() {
        $logo = date('Y-a-d-H-i-s_') . $_FILES['files']['name']; //do nazvu prida aktualny datum a meno obrazka
        $Team = $this->request()->getValue('team');    // request meno hraca z formulara
        $Konferencia = $this->request()->getValue('konferencia');
        $jeTam = Teams::getAll('Team= ?',[$Team]);
        if(sizeof($jeTam) < 0 ) {
            $this->redirect('Home');
        }
        $Divizia= $this->request()->getValue('divizia');
        $win= $this->request()->getValue('win');
        $lose= $this->request()->getValue('lose');
        move_uploaded_file($_FILES['files']['tmp_name'],Configuration::UPLOAD_DIR . "$logo"); //premiestni subor od uzivatela na server
        $prepare = Connection::connect()->prepare('INSERT into teams (Logo,Team,Konferencia,Divizia,Vitazstva,Prehry) values(?,?,?,?,?,?);'); // priprava SQL prikazu
        $prepare->execute([$logo,$Team,$Konferencia,$Divizia,$win,$lose]);
        $this->redirect('Home');
    }
    public function upload() /*INSERT INTO*/
    {

        if(!Prihlasenie::isLogged()){
            $this->redirect('home');
        }
        if(isset($_FILES['files'])){
            if($_FILES["files"]['error'] == UPLOAD_ERR_OK){
                $name = date('Y-a-d-H-i-s_') . $_FILES['files']['name']; //do nazvu prida aktualny datum a meno obrazka
                $menoHraca = $this->request()->getValue('meno');    // request meno hraca z formulara
                $celeMeno = $this->request()->getValue('celeMeno');
                $jeTam = Hrac::getAll('CeleMeno= ?',[$celeMeno]);
                if(sizeof($jeTam) < 0 ) {
                    $this->redirect('Home','post',['error' => 'Hrac uz existuje']);
                }
                $priezvisko= $this->request()->getValue('priezvisko');
                $MVP= $this->request()->getValue('MVPVote');
                move_uploaded_file($_FILES['files']['tmp_name'],Configuration::UPLOAD_DIR . "$name"); //premiestni subor od uzivatela na server
                $prepare = Connection::connect()->prepare('INSERT into hrac (Obrazok,CeleMeno,Meno,Priezvisko,MVPVote) values(?,?,?,?,?);'); // priprava SQL prikazu
                $prepare->execute([$name,$celeMeno,$menoHraca,$priezvisko,$MVP]); //vykonanie SQL prikazu
                $this->redirect('players','player', ['priezvisko' => $priezvisko]); //premiestnenie
            }
        }


    }
    public function delete() {
        return $this->html();
    }
    public function deletation()
    {
        $CeleMeno = $this->request()->getValue('celeMeno');
        $jeTam = Hrac::getAll('CeleMeno= ?',[$CeleMeno]);
        if(sizeof($jeTam) > 0 ) {
            $prepare = Connection::connect()->prepare('Delete from hrac WHERE CeleMeno = ?;'); // priprava SQL prikazu
            $prepare->execute([$CeleMeno]); //vykonanie SQL prikazu
            $this->redirect('home');
        } else {
            $this->redirect('Home','post',['error' => 'Hrac uz neexistuje']);
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
        $jeTam = Hrac::getAll('priezvisko= ?',[$priezvisko]);
        if(sizeof($jeTam) < 0 ) {
                $this->redirect('home');
            } else {
                $this->redirect('Home','post',['error' => 'Hrac uz existuje']);
            }

    }




}