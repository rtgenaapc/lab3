<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'Gena_MyGuests';
    
    public function getGuest()
    {
            return $this->findAll();
    }
}
