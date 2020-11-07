<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /*public $passw_cookie = '^Cwvfo8ygoPCzCsQRIRj@Cb@UMHh8R*bhv8E@YJmoFJhaDBLCk';

    public function check() {

    }

    public function setLogin() {
        setcookie('auth', $this->passw_cookie, time() + 3600);

        return true;
    }*/
}
