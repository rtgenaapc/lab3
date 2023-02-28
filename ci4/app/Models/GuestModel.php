<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'Gena_MyGuests';
    public function getGuest()
    {
        if ($slug === false) {
            return $this->findAll();
        }
    }
}
