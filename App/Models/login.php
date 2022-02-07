<?php

namespace App\Models;

class login extends \App\Core\Model
{

        public $Email;
        public $Username;
        public $Password;
        public $id;

    static public function setDbColumns()
    {
        return ['Username','Password','Email','id'];
    }

    static public function setTableName()
    {
        return 'login';
    }
    public function getName() {
        return $this->Email;
    }
    public function getUsername() {
        return $this->Username;
    }
    public function getPassword() {
        return $this->Password;
    }
}