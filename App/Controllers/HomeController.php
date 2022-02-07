<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\DB\Connection;
use App\Models\player;
use App\Models\teams;
use App\Models\coaches;
use App\Models\matches;
use App\Prihlasenie;

class HomeController extends AControllerRedirect
{
    public function index()
    {
      return $this->html();
    }






}