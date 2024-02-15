<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'users ' ; 

    public function getAll(){
        return $this ->findAll();
    }
}