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
}
