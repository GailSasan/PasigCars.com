<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'users ' ; 

    public function getAll(){
        return $this ->findAll();

    }

    public function getUser(int $id){
        return $this ->find($id);

    }

    

public function delUser(int $id){
    return $this ->delete($id);

    }

}