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


    public function deluser($id): void
    {
        $models = model(StudentsModel::class);
        $models->delUser($id);
        // echo "User Delete";
        redirect('/users');
    

        }
    public function updateUser(): void{
        $models = model(StudentsModel::class);
        $id = $this->input->post('id');
        $data = [
            'Fname' => $this->input->post('Fname'),
            'Lname' => $this->input->post('Lname'),
            'Course' => $this->input->post('Course'),
        ];
        $model->updateUser($id,$data);
        redirect('/users');

    }
    public function newUser(): void{
        $models = model(StudentsModel::class);
        
        $data = [
            'Fname' => $this->input->post('Fname'),
            'Lname' => $this->input->post('Lname'),
            'Course' => $this->input->post('Course'),
        ];
        $model->insert($id,$data);
        redirect('/users');

    }

    public function new(): string
    {
        return view('templates/head')
        .view('templates/header')
         .view('newstudent')
        .view('templates/footer')
        ;
    }


}