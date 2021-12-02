<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Hrac;
use App\Models\Teams;

class PlayersController extends AControllerBase
{
    public function index()
    {
        $hrac = Hrac::getAll();

        return $this->html(
            [
                'hrac' => $hrac
                /*'hrac1' =>$hrac1*/
            ]);

    }
    public function player()
    {
        $priezvisko = $this->request()->getValue('priezvisko');
        $hrac = Hrac::getAll('Priezvisko = ?',[$priezvisko]); //select s podmienkou WHERE
            return $this->html(
                [
                    'hrac' => $hrac
                ]
            );

    }
}