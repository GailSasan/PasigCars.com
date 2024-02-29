<?php

namespace App\Controllers;
use App\Models\StudentsModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('templates/head')
        .view('templates/header')
        .view('templates/body')
        .view('templates/footer')
        ;
    }

    public function about(): string
    {
        return view('templates/head')
        .view('templates/header')
         .view('about')
        .view('templates/footer')
        ;
    }

    public function contact(): string
    {
        return view('templates/head')
        .view('templates/header')
         .view('contact')
        .view('templates/footer')
        ;
    }

    public function users(): string
    {
        $models = model(StudentsModel::class);
        $data = [
            'users' => $models->getAll() , 
            'title' =>'See All Users'
        ];

    return view('templates/head')
         .view('templates/header')
         .view('userstable' ,$data)
        .view('templates/footer')
        ;
    }


    public function user($id): string
    {
    $models = model(StudentsModel::class);
    $data = [
        'user' => $models->getUser($id) , 
        'title' =>'User Profile'];

    return view('templates/head')
     .view('templates/header')
     .view('userprofile' ,$data)
     .view('templates/footer');
    }


    public function deluser($id): object
    {
        $models = model(StudentsModel::class);
        $models->delUser($id);
        // echo "User Delete";
        return redirect('users');
    

        }
    public function updateUser(): object{
        $models = model(StudentsModel::class);
        $id = $this->request->getPost(['id']);
        $data = $this->request->getPost(['Fname', 'Lname','Course']);
        $model->updateUser($id,$data);
        return redirect('users');

    }
    public function newUser(): object{
        
        $model = model(StudentsModel::class);
        $data = $this->request->getPost(['Fname', 'Lname','Course']);
      
        $model->insert($data);
        return redirect('users');

    }

    public function new(): string
    {
        helper('form');
        return view('templates/head')
        .view('templates/header')
         .view('newstudent')
        .view('templates/footer')
        ;
    }



}