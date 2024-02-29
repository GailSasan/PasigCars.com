<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'users ' ;
    
    protected $allowedFields = [
        'Id',
        'Fname',
        'Lname',
        'Course',
        
    ];

    public function getAll(){
        return $this ->findAll();

    }

    public function getUser(int $id){
        return $this ->find($id);

    }

    

public function delUser(int $id){
    return $this->delete($id);

    }
public function addnewUser($data){
    return $this->insert($data);

}
public function updateUser($id,$data){
    return $this->update($id,$data);

}
}

